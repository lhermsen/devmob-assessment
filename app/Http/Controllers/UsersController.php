<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;

class UsersController extends Controller
{
    public function list()
    {
        return response()->json(User::all());
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function listReceivedMessages(User $user)
    {
        // List all the messages that were recieved by this user
        return response()->json($user->received_messages);
    }

    public function listSentMessages(User $user)
    {
        // List all the messages that were sent by this user
        return response()->json($user->sent_messages);
    }
}
