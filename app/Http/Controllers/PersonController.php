<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{
    public function index(Request $request)
    {
      $user = Auth::user();
      $sort = $request->sort;
      if(!$request->sort) {
        $sort ="id";
      }
      $items = DB::table('people')->orderBy($sort,'asc')->paginate(5);
      return view('person.index',['items' => $items,'sort'=>$sort,'user'=>$user]);
    }

    public function view(Request $request){
      $item = Person::find($request->id);
      $data = ['item' => $item];
      return view('person.view',$data);
    }

    public function add(Request $request){
      if ( $request->isMethod('get') ) {
        $user = Auth::user()->op;
        if ($user !== 1) {
          return view('person.error');
        }
        return view('person.add');
      }else {
        $validator = Validator::make($request->all(),Person::$rules,Person::$message);
        if ($validator->fails()) {
          return redirect('person/add')
            ->withErrors($validator)
            ->withInput();
          }
        $person = new Person;
        $form = $request->all();
        unset($form['_token']);
        $person->name = $request->name;
        $person->mail = $request->mail;
        $person->sub = $request->sub;
        $person->age = $request->age;
        $person->save();
        return redirect('person');
      }
    }
    public function update(Request $request){
        if ($request->isMethod('get')) {
          $user = Auth::user()->op;
          if ($user !== 1) {
            return view('person.error');
          }
          $person = Person::find($request->id);
          return view('person.update',['form' => $person]);
        }else {
          $validator = Validator::make($request->all(),Person::$rules,Person::$message);
          if ($validator->fails()) {
            return redirect('person/update/'.$request->id)
              ->withErrors($validator)
              ->withInput();
            }
          $person = Person::find($request->id);
          $form = $request->all();
          unset($form['_token']);
          $person->name = $request->name;
          $person->mail = $request->mail;
          $person->sub = $request->sub;
          $person->age = $request->age;
          $person->save();
          return redirect('person');
        }
    }

    public function delete(Request $request){
      $user = Auth::user()->op;
      if ($user !== 1) {
        return view('person.error');
      }
      $person = Person::find($request->id);
      $person->delete();
      return redirect('person');
    }

    public function auth(Request $request)
    {
      if ($request->isMethod('get')) {
        $msg = "请登录";
        return view('person.auth',['msg'=>$msg]);
      }else {
        $name = $request->name;
        $password = $request->password;
        if ( Auth::attempt(['name'=>$name,'password'=>$password]) ) {
          $msg = "登陆成功".$name;
        } else {
          $msg = "登录失败";
        }
          return view('person.auth',['msg'=>$msg]);
        }
      }
}
