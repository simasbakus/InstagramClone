<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPhoto extends Model
{
  protected $fillable = [
      'photo', 'caption',
  ];
}
