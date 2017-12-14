<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name'];

    public function received_messages()
    {
        return $this->hasMany('App\Message', 'receiver_id');
    }

    public function sent_messages()
    {
        return $this->hasMany('App\Message', 'sender_id');
    }

}