<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'auther_id' => 'required',
      'title' => 'required',
      'comment' => 'required'
    );

    public static $messages = array(
      'auther_id.required' => '作者id是必须的',
      'title.required' => '标题是必须的',
      'comment.required' => '内容是必须的'
    );

    public function getData(){
      return $this->id.':'.$this->title.":".$this->comment;
    }

    public function auther(){
      return $this->belongsTo('\App\Auther');
    }

    public function auther_name(){
      return $this->auther->name;
    }
}
