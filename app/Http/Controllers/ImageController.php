<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Goutte\Client;
use DB;
use Input;

class ImageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $photo='dude';
      $search_term=$request->input('name');
      $photos=Image::search($search_term)->latest()->simplePaginate(12);
      return view('images.index',compact('photos'))
          ->with('search_term', $search_term)
          ->with('photo', $photo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('images.create');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function embed($id)
    {
      $photo=Image::find($id);
      return view('images.embed')
          ->with('photo',$photo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $url = $request->input('url');
      $title =$request->input('name');
      $extension = pathinfo($url, PATHINFO_EXTENSION);
      $filename = str_random(4).'-'.str_slug($title).'.'. $extension;
      // get file content from url and save in directory
      $file = file_get_contents($url);
      $save_file = file_put_contents('uploads/'.$filename, $file);
      // Create record in database
      // Create new banner instance
      $image=new Image;
      // Save banner
      $image->name=$request->input('name');
      $image->user_id=1;
      $image->url=$filename;
      $image->description=$request->input('description');
      $image->save();
      // Set Flash Message
      session()->flash('flash_message','New Post Has Been Created!');
      // Redirect to new banner page
      return redirect('admin/photos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $photo=Image::find($id);
      return view('images.show')
          ->with('photo',$photo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $photo=Image::find($id);
      return view('images.edit')
          ->with('photo',$photo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $image = Image::find($id);
      // Save banner
      $image->id=$id;

      $image->name=$request->input('name');
      $image->user_id=1;
      $image->url=$request->input('url');
      $image->description=$request->input('description');
      $image->save();
      // Set Flash Message
      session()->flash('flash_message','Photo Updated!');
      // Redirect to new banner page
      return redirect('admin/photos/'.$image->id.'');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
