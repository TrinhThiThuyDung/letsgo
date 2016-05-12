<?php
namespace App\Http\Controllers;

/**
* 
*/
use Illuminate\Http\Request;
use Storage;
use App\Models\Service\ImageServiceFacade;
use App\Models\Service\UserServiceFacade;
use App\Models\Service\NoticationServiceFacade;

use Illuminate\Http\UploadedFile;

class PhotoController extends Controller
{
	 /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    public function __construct(Request $request)
    {
        $this->user_id = $request->session()->get('id');
    }

    /**
     *get Photo page
     *@param Request
     *@return photo page with array param is user information and array photo show on photo page
     */
	public function getPhotoPage(Request $request)
	{

        $photos = $this->getPhoto();
        
        return view("photo")->with( 'photos' , $photos );
		
	}

   protected function getPhoto()
    {
        return ImageServiceFacade::getAllPhoto();
       
    }


    public function getPhotoUpload(Request $request)
    {
        
    }
    /**
     *Process upload photo
     *@param Request form 
     *@return json: file uploaded if upload success or error if upload fails
     */
    public function uploadPhoto(Request $request)
    {   

        $images = $request->all();
var_dump($images);die;

        if ($album['album_name'] === '') {
            $album['album_name'] = 'Unknown Album';
        }

        if ($request->hasFile('images')) {
            $images = $request->file('images')[0];

            if($images->isValid()){

                $images_name = $images->getClientOriginalName();

                $image_inserted = $this->addPhotoToDB( $images_name ,$album );

                if ($image_inserted) {
                    $this->moveImagesToUploadFolder( $images , $images_name, $album['album_name'] );
                    
                    $deleteUrl      = 'photo/delete/'.$album['album_name'].'/'.$image_inserted['id'].'/'.$images_name;
                    $images_url     = url('/')."/".$image_inserted['url'];
                    $images_size    = $images->getClientSize();

                    $files = [
                               [
                                "name"          => $images_name,
                                "size"          => $images_size,
                                "url"           => $images_url,
                                "thumbnailUrl"  => $images_url,
                                "deleteUrl"     => $deleteUrl,
                                "deleteType"    => "DELETE"
                              
                               ]
                            ];
                   return response()->json( ['files' => $files ]);
                }
                
            }
        }
        $files = [
                    [
                        "error"     => "Lỗi tải ảnh"      
                    ]
                ];
        return response()->json( $files );
        
    }

    protected function addPhotoToDB(  $image_name , $album)
    {
        return ImageServiceFacade::addPhoto( $this->user_id , $image_name , $album );
    }

    protected function moveImagesToUploadFolder( $images , $images_name , $album_name)
    {
        $path = '/public/upload/'.$this->user_id.'/'.$album_name;
       
        $images->move(
            base_path().$path, $images_name
        );
    }
    /**
     * process delete photo
     *@param Request from client
     *@return json if delete success or null if fails
     */
    public function deletePhoto(Request $request)
    {   
        $images_id = $request->id;
        $images_name = $request->name;
        $album_name = $request->album_name;

        if( $this->deleteImageOnFolder($album_name, $images_name)){
            $result = ImageServiceFacade::deletePhoto($images_id);
            if ($result == 1) {
                return response()->json(['status' => 'OK']);
            }
            return null;
        }
    
        return null;
        
    }
    protected function deleteImageOnFolder($album_name , $image_name)
    {
        $file = $this->user_id."/".$album_name."/".$image_name;

        $exists = Storage::disk( 'local' )->exists( $file );
        if($exists){
            Storage::delete( $file );
            return true;
        }
        return false;
    }
}
?>