<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auther;

class AutherController extends Controller
{
  public function index(Request $request){
    $items = Auther::all();
    return view('auther.index',['items' => $items]);
  }

  public function view(Request $request){
    $item = Auther::find($request->id);
    return view('auther.view',['item' => $item]);
  }
}
