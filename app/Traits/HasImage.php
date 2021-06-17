<?php

namespace App\Traits;

/**
 * 
 */
trait HasImage {
    public static function storeImage($image){
        $image->move(self::getImageDirectory(), self::getImageName($image));
    }
    
    public static function getImageName($image){
        return now()->format('YmdHis').'.'.$image->getClientOriginalExtension();
    }

    public function removeImage($image = ''){
        if ($image=='') {
            $image = $this->image;
        }

        @unlink(self::getImageDirectory().'/'.$image);
        return true;
    }

    public static function getImageDirectory(){
        return resource_path(self::IMAGE_PATH);
    }

    public function getImagePathAttribute(){
        return self::IMAGE_PATH."/".$this->image;
    }
}
