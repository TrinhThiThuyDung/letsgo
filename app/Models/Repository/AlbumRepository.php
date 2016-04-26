<?php

namespace App\Models\Repository;


interface AlbumRepository 
{
	
      function checkExitsAlbumOrCreate($id_user , $album);
    
}
?>