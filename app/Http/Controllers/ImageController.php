<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Goutte\Client;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$photos=Image::paginate(50);
        $client = new Client();
        $baseURL = 'https://www.tumblr.com';
        $urlEndpoint = '/search/cat+gifs';
        $crawler = $client->request('GET', $baseURL . $urlEndpoint);
        $photos = $crawler->filter('img.photo')->extract(array('src','data-pin-url'));
        return view('images.index')
            ->with('photos',$photos);

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Create new banner instance
      $image=new Image;
      // Save banner
      $image->name=$request->input('name');
      $image->user_id=1;
      $image->url=$request->input('url');
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
        //
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
        //
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
