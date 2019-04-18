<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoShowroom extends Model
{
    protected $fillable = ['name', 'path'];

    protected $table = 'showroom_photo_table';

    public function get_element_showroom(){
        return $this->hasOne('App\ElementsShowRoom','element_id');
    }

    public static function deleteAll($id_element){
        $arrayPhoto = PhotoShowroom::where('element_id', $id_element)->get();
        
        if(isset($arrayPhoto)){
            foreach($arrayPhoto as $pho) {
                $path = str_replace("/","\\",$pho->path);
                if(file_exists($path)){
                    unlink(public_path('storage'.$path));
                }
            }  
        }

        PhotoShowroom::where('element_id', $id_element)->delete();
    }

}
