<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class SearchController extends Controller
{
  public function search(Request $request)
  {
    $name = empty($request->name) ? "" : $request->name;
    $min = empty($request->min) ? "" : $request->min;
    $max = empty($request->max) ? "" : $request->max;

    $people = Person::search($request);







    return view("find.search",["items"=>$people,"name" =>$name, "min"=> $min, "max"=>$max]);
  }
}
