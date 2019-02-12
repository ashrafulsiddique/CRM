<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;

class Lead extends Model

{

    /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */

    // protected $fillable = [

    //     'name', 'detail'

    // ];



 public function user()
    {
        return $this->belongsto('\App\User');
    }
}