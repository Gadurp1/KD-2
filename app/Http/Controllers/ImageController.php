<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Goutte\Client;
use DB;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $photos=Image::latest()->simplePaginate(9);
      return view('images.index',compact('photos'));
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function scrape()
    {
      for($i=2;$i<=3;$i++){
        //$photos=Image::paginate(50);
        $client = new Client();
        $baseURL = 'http://www.cat-gifs.com/page';
        $urlEndpoint = '/'.$i++;
        $crawler = $client->request('GET', $baseURL . $urlEndpoint);
        $photos = $crawler->filter('img.size-full')->extract(array('src','title','alt'));
          foreach($photos as $photo){
            $image=new \App\Image();
            $image->name=$photo[1];
            $image->url=$photo[0];
            $image->description=$photo[2];
            $images->save();
         }
      }
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
