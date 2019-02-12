<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;

class Project extends Model

{

    /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */

    protected $fillable = [

        'name',
        'customer_id',
        'start_date',
        'end_date',
        'details'

    ];
      function customer(){
    	return $this->belongsTo('App\User');
    }
}