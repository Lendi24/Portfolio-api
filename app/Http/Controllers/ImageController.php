<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function showImg($id, $path)
    {
        $imgPath        = storage_path().$path.$id.'.png';
        $imgPathDefault = storage_path().$path.'0'.'.svg';

        if (file_exists( $imgPath )) {
            return response()->file($imgPath);
        } else {
            return response()->file($imgPathDefault);
        }    
    }

    public function showProfileImg($id){ return $this->showImg($id, '/images/people/profile-'); }
    public function showProjectImg($id){ return $this->showImg($id, '/images/projects/thumbnail-'); }

}
