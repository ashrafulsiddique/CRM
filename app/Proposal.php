<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;

class Proposal extends Model

{

    /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */

    protected $fillable = [

        'subject',
        'customer_id',
        'staff_id',
        'status',
        'start_date',
        'end_date', 
        'details'

    ];

    function customer(){
    	return $this->belongsTo('App\User');
    }
    function staff(){
    	return $this->belongsTo('App\User');
    }

}