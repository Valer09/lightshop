<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class PhotoElement extends Model
{
    protected $fillable = ['name', 'path'];

    protected $table = 'photo_table';
    
    public function get_element_showroom(){
        return $this->hasOne('App\Element','element_id');
    }

    public static function deleteAll($id_element){
        $arrayPhoto = PhotoElement::where('element_id', $id_element)->get();
        
        if(isset($arrayPhoto)){
            foreach($arrayPhoto as $pho) {
                $path = str_replace("/","\\",$pho->path);
                unlink(public_path('storage'.$path));
            }  
        }

        PhotoElement::where('element_id', $id_element)->delete();
    }
}
