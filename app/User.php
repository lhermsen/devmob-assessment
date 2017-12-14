<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'password'];

    public function send_message($message, $receiver_id)
    {
        $message = new Message;
        $message->body = $message;
        $message->save();
    }

    public function received_messages()
    {
        return $this->hasMany('App\Message', 'receiver_id');
    }

    public function sent_messages()
    {
        return $this->hasMany('App\Message', 'sender_id');
    }

    public function getMessages($direction = 'received')
    {
        if('sent' == $direction) return $this->sent_messages;
        return $this->received_messages;
    }
}