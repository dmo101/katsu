<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auther extends Model
{
    public function messages(){
      return $this->hasMany('\App\Message');
    }

    public function getData(){
      return $this->id.':'.$this->name.'('.$this->age.')';
    }
}
