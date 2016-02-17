<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// More appropriate name for this class is probably case

//title = title of the coupons case
//date = when event occurred
//size = class size
//settlement = total value of the case
//p1 = body
//p2 = excerpt
//industry = slug

class Coupons extends Model
{
    //
    protected $fillable =
    [
      'title',
      'date',
      'size',
      'settlement',
      'p1',
      'p2',
      'industry',
      'slug',
      'case-type',
      'case-number',
      'case-status',
      'jurisdiction ',

    ];

}
