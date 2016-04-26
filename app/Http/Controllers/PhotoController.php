<?php
namespace App\Http\Controllers;

/**
* 
*/
use Illuminate\Http\Request;
use Storage;
use App\Models\Service\ImageServiceFacade;
use App\Models\Service\UserServiceFacade;

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

	public function getPhotoPage(Request $request)
	{
         $id_user = $request->session()->get('id');
         $name_user = $request->session()->get('username');

        $array_photo = $this->getPhoto();
        $user_data = $this->getInforUser();

        $user_data->username = $name_user;

        $array_data = ['user' => $user_data , 'photo' => $array_photo];
        
        return view("photo")->with(['array_data' => $array_data]);
		
	}

    protected function getPhoto()
    {
       /* $all_photo = ImageServiceFacade::getAllPhoto();*/
        return null;
    }

    /**
     *Get infor of user
     *@param Request: get id of user saved in session
     *@return object contain information of user
     */
    protected function getInforUser()
    {
        return UserServiceFacade::getInforUser( $this->user_id );
    }


    public function getPhotoUpload(Request $request)
    {
        
    }
    public function uploadPhoto(Request $request)
    {   

        $album = $request->all();

        if ($request->hasFile('images')) {
            $images = $request->file('images')[0];

            if($images->isValid()){

                $images_name = $images->getClientOriginalName();

                $image_inserted = $this->addPhotoToDB( $images_name ,$album );

                if ($image_inserted) {
                   $this->moveImagesToUploadFolder( $images , $images_name );
                    
                   $files = [
                               [
                                "name"      => $images_name,
                                "size"      => $images->getClientSize(),
                                "url"       => url('/')."/".$image_inserted['url'],
                                "deleteUrl" => 'photo/delete',
                                "deleteType"=> "DELETE"
                                
                               ]
                            ];
                   return response()->json( ['files' => $files ]);
                }
                return response()->json($images);
                
            }else{
                return response()->json(['status' => 'error']);
            }
        }
        else{
            return response()->json(['status' => 'error' , 'error' => 'Khong tim thay anh']);
        }
    }

    protected function addPhotoToDB(  $image_name , $album)
    {
        return ImageServiceFacade::addPhoto( $this->user_id , $image_name , $album );
    }

    protected function moveImagesToUploadFolder( $images , $images_name)
    {
        $path = '/public/upload/'.$this->user_id;
  
        $images->move(
            base_path().$path, $images_name
        );
    }
    public function deletePhoto(Request $request)
    {
        
    }
}
?>