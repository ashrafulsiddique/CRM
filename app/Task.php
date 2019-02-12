<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;

class Task extends Model

{

    /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */

    protected $fillable = [

        'type', 
        'project', 
        'customer_id',
        'start_date', 
        'due_date',
        'staff_id',
        'priority',
        'status',
        'details'

    ];

       function staff(){
        return $this->belongsTo('App\User');
    }

}