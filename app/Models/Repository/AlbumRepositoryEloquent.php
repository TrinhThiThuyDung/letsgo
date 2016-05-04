<?php
/**
 * 
 */
namespace App\Models\Repository;

use App\Models\Entities\Album;
use Illuminate\Database\Eloquent\Model;
use Storage;

use Illuminate\Filesystem\Filesystem;
/**
* 
*/
class AlbumRepositoryEloquent extends BaseRepository implements AlbumRepository
{

	/**
	 *check exits of album, if not is create, return id and if exits return id of album
	 */	
	  function checkExitsAlbumOrCreate($id_user , $album)
	  {
	  	$path = 'upload/'.$id_user.'/'. $album['album_name'];

	  	$data = [
				  	'user_id' 	=> (int)$id_user , 
				  	'kind_id' 	=> (int)$album['album_kind'], 
				  	'name' 		=> $album['album_name'] , 
				  	'describe' 	=> $album['album_describe'],
				  	'url'		=> $path
				];

	  	$album_model = Album::firstOrCreate( $data );

	  	return $album_model;
	  }
	
}


?>