<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessagesController extends Controller
{
    public function list()
    {
        return Message::all();
    }

    public function show(Message $message)
    {
        // Return this message in JSON
        return response()->json($message);
    }

    public function store(Request $request)
    {
        // Store this new message based on the request input and get its ID
        $id = Message::insertGetId($request->json()->all());

        // Return a 201 status with a Location header to the newly created message
        return response()->json([], 201)->header('Location', url('').'/messages/'.$id);
    }
}