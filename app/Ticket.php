<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;

class Ticket extends Model

{

    /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */

    protected $fillable = [

        'subject', 
        'customer_id',
        'contact', 
        'department',
        'priority', 
        'details'

    ];

    function customer(){
    	return $this->belongsTo('App\User');
    }

}