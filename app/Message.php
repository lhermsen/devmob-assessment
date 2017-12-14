<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    protected $fillable = ['body', 'sender_id', 'receiver_id'];

    // Set up the relationship between a message and its sender user

    public function sender(){

        return $this->belongsTo('User', 'sender_id');
    }

    // Set up the relationship between a message and its receiver user

    public function receiver(){

        return $this->belongsTo('User', 'receiver_id');
    }

    public function getCreatedAtAttribute($createdAt) {

        return Carbon::parse($createdAt)->diffForHumans();
    }

    public function getUpdatedAtAttribute($createdAt) {

        return Carbon::parse($createdAt)->diffForHumans();
    }
}
