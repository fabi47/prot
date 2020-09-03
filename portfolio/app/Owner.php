<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
  public function getData()
  {
      return '名前：'.$this -> name.'---車番：'.$this -> car_number;
  }
}
