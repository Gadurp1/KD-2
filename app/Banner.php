<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
  protected $fillable=[
      'img',
      'title' ,
      'button_text',
      'button_url' ,
      'description' ,

    ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

}
