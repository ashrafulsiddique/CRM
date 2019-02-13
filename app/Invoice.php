<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;

class Invoice extends Model

{

    /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */

    // protected $fillable = [

    //     'name', 'detail'

    // ];

      public function customer()
    {
        return $this->belongsto('\App\User');
    }




}