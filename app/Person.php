<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Person extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'name' => 'required',
      'mail' => 'email',
      'sub' => 'required',
      'age' => 'integer|min:0|max:150'
    );

    public static $message = array(
      'name.required' => '请填写名字',
      'mail.email' => '请输入正确的email',
      'sub.required' => '请输入科目',
      'age.integer' => '填写年纪',
      'age.min' => '最小0',
      'age.max' => '最大150'
    );

    public function scopeAgeMin($query,$n){
      return $query->where('age','>=',$n);
    }

    public function scopeAgeMax($query,$n){
      return $query->where('age','<=',$n);
    }

    public static function search($request)
    {

      $query = DB::table("people");

      $name = empty($request->name) ? "" : $request->name;
      $min = empty($request->min) ? "" : $request->min;
      $max = empty($request->max) ? "" : $request->max;

      if($name != "") {
        $query = $query->where("name", "=" , $name);
      }

      if($min != "") {
        $query = $query->where("age" , ">=", $min);
      }

      if($max != "") {
        $query = $query->where("age" , "<=" , $max);
      }

      $people = $query->get();

      return $people;

    }

    

}
