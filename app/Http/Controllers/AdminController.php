<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class AdminController extends Controller
{
  public function index()
  {
    $pages = \App\Page::count();
    $banners = \App\Banner::count();
    $coupons = \App\Coupons::count();
    $posts =\App\Post::count();
    $users =\App\User::count();
    $images =\App\Image::count();
    return view('home')
        ->with('pages',$pages)
        ->with('banners',$banners)
        ->with('coupons',$coupons)
        ->with('posts',$posts)
        ->with('users',$users)
        ->with('images',$images);
  }

}
