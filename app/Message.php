<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
     protected $fillable = [

        'ticket_id',
        'user_id',
        'message'

    ];
}
