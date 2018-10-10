<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App;

class Element extends Model

{

    protected $table = 'Elements';

    protected $fillable = [
        'name', 'subcategories', 'price','availability','description'
    ];

    //Access to element subcategories. A new pivot table will be created from join between Element and Subcategories.
    public function subcategories(){
        return $this->belongsToMany('App\Subcategory','elem_subC_pivot','name','name');
    }

    /** This function allows to create a pivot table "Order" with elements() function in User model **/
    public function get_users(){
        return $this->belongsToMany('App\User');
    }

    public function get_OrderDetails(){
        return $this->hasMany('App\OrderDetails');
    }
    public $timestamps = false;

}
