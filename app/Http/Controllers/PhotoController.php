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
use App\Models\Service\FollowServiceFacade;

use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image; 

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
        $data_active = $this->getInforActiveAndFollow();

        return view("photo")->with( 'data' , [ 'photos' => $photos , 'data-active'   => $data_active] );
		
	}

    public function getMobilePhotoPage(Request $request)
    {
        $photos = $this->getPhoto();
        $user = $this->getInforUser();
        $noti = $this->getNoticationOfUser();

        $data = [
            'photo' => $photos,
            'user'  => $user,
            'noti'  => $noti
        ];
        return response()->json(['data'    => $data ]);
    }
   protected function getPhoto()
    {
        return ImageServiceFacade::getAllPhoto( $this->user_id );
       
    }
    protected function getInforActiveAndFollow()
    {
        $data = [];

        $data['active-img'] = ImageServiceFacade::countTotalPhoto( $this->user_id );
       
        $data['active-follow'] = FollowServiceFacade::countUserFollow( $this->user_id ); //mình theo dõi
        $data['active-follower'] = FollowServiceFacade::countFollower( $this->user_id );  //theo dõi mình

        $data['follow'] = FollowServiceFacade::getFollow($this->user_id);
        
        return $data;
    }
     protected function getNoticationOfUser()
    {
        if ($this->user_id) {
            return NoticationServiceFacade::getNoticationOfUser( $this->user_id );
        }
    }
    /**
     *Get infor of user
     *@param Request: get id of user saved in session
     *@return object contain information of user
     */
    protected function getInforUser()
    {
        if($this->user_id) { 
            return UserServiceFacade::getInforUser( $this->user_id ); 
        }
    }
   
    public function showPhoto(Request $request)
    {
        $image_id = $request->image_id;
        $image = ImageServiceFacade::getPhotoById( $image_id );

        return view("image")->with('image', $image);
    }
    public function getShowPhotosByCategory( Request $request)
    {
        $category_name = $request->category_name;
        switch ($category_name) {
        case 'all':
            $category_id = 1;
            break;
         case 'life':
            $category_id = 2;
            break;
         case 'nature':
            $category_id = 3;
            break;
         case 'people':
            $category_id = 4;
            break;
         case 'pets':
            $category_id = 5;
            break;
         case 'discovery':
            $category_id = 6;
            break;
        
        default:
            $category_id = 1;
            break;
        }

        $image  = ImageServiceFacade::getImagesByCategory( $category_id );
 
        return view("photo-category")->with([ 'image'  => $image , 'category_name' => $category_name ]);
    }

    public function postShowPhotosByCategory(Request $request)
    {
        $category_name = $request->category_name;
         switch ($category_name) {
        case 'all':
            $category_id = 1;
            break;
         case 'life':
            $category_id = 2;
            break;
         case 'nature':
            $category_id = 3;
            break;
         case 'people':
            $category_id = 4;
            break;
         case 'pets':
            $category_id = 5;
            break;
         case 'discovery':
            $category_id = 6;
            break;
        
        default:
            $category_id = 1;
            break;
        }
         $image  = ImageServiceFacade::getImagesByCategory( $category_id );
         return response()->json( ['image'  => $image ]);
    }
     /**
     *Show list images user follow
     */
    public function showPhotoUserFollow(Request $request)
    {
        $all_image = ImageServiceFacade::getAllPhotoUserFollow( $this->user_id );
    
        return view("follow-page")->with(['data'    => $all_image]);
    }

    public function showPhotoUserFollowMobile(Request $request)
    {
        $all_image = ImageServiceFacade::getAllUserFollow( $this->user_id );
        return response()->json( ['data'    => $all_image] );
    }
    /**
     *Process upload photo
     *@param Request form 
     *@return json: file uploaded if upload success or error if upload fails
     */
    public function uploadPhoto(Request $request)
    {   

        $data_image = $request->data;
        
        if ($data_image) {

            if (preg_match('/data:image\/(gif|jpeg|png);base64,(.*)/i', $data_image['img'], $matches)) {

                $imageType = $matches[1];
                $imageData = base64_decode($matches[2]);
                $image = imagecreatefromstring($imageData);
                $image_name = md5($imageData) . '.png';
                
                if ($image_path = $this->moveImagesToUploadFolder( $image , $image_name )) {
                 
                    $image_size = getimagesize($image_path."/".$image_name);
                    $width = $image_size[0];
                    $height = $image_size[1];

                    if ($width > 1500 || $height > 1500) {
                    
                        $image_resize_1 = $this->resizeImage(  800 , 700, $image_path , $image_name );

                        $image_resize_2  = $image_resize_1 = $image_resize_1->basename;
                       
                    }
                   elseif ($width >=400 && $width <=1500) {

                        $image_resize_1 = $this->resizeImage( ($width/2) , ($height/2), $image_path , $image_name );

                        $image_resize_2 = $this->resizeImage( ($width/3) , ($height/3), $image_path , $image_name );

                        $image_resize_1 = $image_resize_1->basename;
                        $image_resize_2 = $image_resize_2->basename;
                   }
                   else{
                         $image_resize_1 = $image_name;
                         $image_resize_2 = $image_name;
                   }
                    if ($image_resize_1 && $image_resize_2) {

                        $url = '/upload/'.$this->user_id;
                        $image_add = [
                                'user_id'   => $this->user_id,
                                'kind_id'   => (int)$data_image['kind'],
                                'name'      => $image_name,
                                'size'      => $width."x".$height,
                                'resize_1'  => $image_resize_1,
                                'resize_2'  => $image_resize_2,
                                'url'       => $url,
                                'describe'  => $data_image['caption'],
                                'location'  => $data_image['location']
                            ];
                        $image_inserted = $this->addPhotoToDB( $image_add );

                        if ($image_inserted) {
                            //response data
                           return response()->json( ['status'   => "success",
                                                     'content'  => "Upload success! "]);
                        }else{
                            $image_1 = $this->user_id."/".$image_name;
                            $image_2 = $this->user_id."/".$image_resize_1;
                            $image_3 = $this->user_id."/".$image_resize_2;

                            $image_delete = [ $image_1 , $image_2, $image_3 ];

                            $this->deleteImageOnFolder( $image_delete );
                        }
                    }

                }
            }
        }
        return response()->json( [  "status"      => "error",
                                    "content"     => "can't upload photo!"]);
    }

    protected function addPhotoToDB(  $image )
    {
        return ImageServiceFacade::addPhoto( $image );
    }

    public function moveImagesToUploadFolder( $image , $image_name )
    {
        try {
            $path = base_path().'/public/upload/'.$this->user_id;
       
            imagepng($image, $path . '/' . $image_name);

            return $path;

        } catch (Exception $e) {
            return false;
        }
        
    }
    /**
     *Resize Image to other size
     *@param image
     *@param image with other size
     */
    protected function resizeImage( $width, $height, $path, $name)
    {
        try {
             
            $width = intval($width);

            $height = intval($height);

            $image_name = $width."x".$height."_".$name;
 
            $img = Image::make($path."/".$name);

            $img->resize($width , $height , function($constraint){
                $constraint->aspectRatio();
            });
            
            return $img->save($path."/".$image_name);

        } catch (Exception $e) {
            return false;
        }
    }
    /**
     * process delete photo
     *@param Request from client
     *@return json if delete success or null if fails
     */
    public function deletePhoto(Request $request)
    {   
        $image_id = $request->image_id;

        $image = ImageServiceFacade::getPhotoById( $image_id );  //get image in data get name 
    
        if($image){
              $image = $image[0];

               
                $image_1 = $this->user_id."/".$image->name;
                $image_2 = $this->user_id."/".$image->resize_1;
                $image_3 = $this->user_id."/".$image->resize_2;

                $image_delete = [ $image_1 , $image_2, $image_3 ];

                $result = $this->deleteImageOnFolder( $image_delete );
                
                
            if ($result) {
                $result = ImageServiceFacade::deletePhoto( $image_id );
                if ($result) {
                      return response()->json(['status' => 'success']);
                }

            }
        }
        return response()->json(['status' => 'error']);
    }
    protected function deleteImageOnFolder(  $image_delete )
    {

        foreach ($image_delete as $key => $value) {
            $exists = Storage::disk( 'local' )->exists( $value );
            if(!$exists){
                return false;
            }
        }
        Storage::delete( $image_delete );
        return true;
    }

    public function downloadPhoto(Request $request)
    {
        $image_id = $request->image_id;
        $image = ImageServiceFacade::getPhotoById( $image_id )[0];
        $image_url = $image->url."/".$image->name;

        $headers = array(
              'Content-Type: application/gif',
            );
        return response()->download( public_path( $image_url), $image->name, $headers );
    }
}
?>