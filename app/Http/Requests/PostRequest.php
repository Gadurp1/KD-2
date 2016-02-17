<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request {

  public function authorize()
  {

      return true;

  }

  public function rules()
  {
    return [
      'category_id'=>'required',
      'title' => 'required',
      'slug' => 'required',
      'summary' => 'required',
      'content' => 'required',
      'status'=>'required',
      'comments'=>'required',
      'featured'=>'required',
    ];
  }

}
