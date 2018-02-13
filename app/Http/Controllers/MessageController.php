<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Validator;
use App\Auther;

class MessageController extends Controller
{
    public function index(Request $request){
      $items = Message::all();
      return view('message.index',['items' => $items]);
    }

    public function add(Request $request){
      if ( $request->isMethod('get') ) {
        $items = Auther::all();
        return view('message.add',['items' => $items]);
      }else {
        // $request->auther_id = $request->auther_id[0];
        // var_dump($request->auther_id);
        // exit();
        $validator = Validator::make($request->all(),Message::$rules,Message::$messages);
        if ( $validator->fails() ) {
          return redirect('message/add')
            ->withErrors($validator)
            ->withInput();
        }
        $message = new Message;
        $form = $request->all();
        unset($form['_token']);
        $message->fill($form)->save();
        return redirect('message');
      }
    }

    public function view(Request $request){
      $item = Message::find($request->id);
      return view('message.view',['item' => $item]);
    }
}
