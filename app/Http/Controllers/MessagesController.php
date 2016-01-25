<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// My uses
use App\Http\Requests\GuestsMessagesRequest;
use App\Message;

class MessagesController extends Controller {

	public function sendMessage(GuestsMessagesRequest $request){
		if (Message::create($request->all())) {	
			return response()->json(['success' => true]);
		}
	}

}
