<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
      if($request->isMethod('get')) {
        return view('hello.index');
      } else {
          $rules = [
            'name' => 'required',
            'age' => 'numeric|between:0,150',
            'mail' => 'email',
            'gender' => 'required',
            'sub' => 'required',
            'aihao' => 'required|array'
          ];
          $message = [
            'name.required' => '名前を入れて下さい',
            'age.numeric' => '整数の年齢を入れて下さい',
            'age.between' => '年齢を0~150中に入れて下さい',
            'mail.email' => '正しいのメールを入れて下さい',
            'gender.required' => '性別を選んで下さい',
            'sub.required' => 'subを入れて下さい',
            'aihao.required' => '爱好を入れて下さい',
            'aihao.array' => '爱好必须是数组'
          ];
          $validator = Validator::make($request->all(), $rules, $message);
          if ($validator->fails())
            return redirect('/hello')
              ->withErrors($validator)
              ->withInput();
          }
          return view('hello.ok');
      }
    }
