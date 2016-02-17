<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CouponRequest extends Request {

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'title' => 'required',
      'size'=>'',
      'settlement'=>'',
      'date'=>'',
      'judge'=>'',
      'date'=>'',
      'industry'=>'',
      'case-status'=>'',
      'case-number'=>'',
      'case-type'=>'',
    ];
  }
}
