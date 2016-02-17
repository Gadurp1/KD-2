<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BannerRequest extends Request {

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'img' => '',
      'description' => 'required',
      'title' => 'required',
      'button_url' => 'required|url',
      'button_text' => 'required',
    ];
  }

}
