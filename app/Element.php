<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Element extends Model

{

   // protected $table = 'Elements';

    protected $fillable = [
        'name', 'subcategories', 'availability','description','id'
    ];

    protected $guarded = ['price'];


    //Access to element subcategories. A new pivot table will be created from join between Element and Subcategories.
    public function get_subcategories(){
        return $this->belongsToMany('App\Subcategory','elem_subC_pivot','name','name');
    }

    /** This function allows to create a pivot table "Order" with elements() function in User model **/
    public function get_users(){
        return $this->belongsToMany('App\User');
    }

    public function get_orders(){
        return $this->belongsToMany('App\Order');
    }

    public function get_brand(){
        return $this->belongsTo('App\Brand');
    }

    public function get_photo(){
        return $this->hasMany('App\PhotoElement','element_id','id');
    }

    public static function deleteAll($el){
        $path = str_replace("/","\\", $el->pathPhoto);
        unlink(public_path('storage'.$path));

        Element::where('id', $el->id)->delete();
    }


    public $timestamps = false;

}
