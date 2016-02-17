<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banner::all();
        return view('banners.index')
                ->with('banners',$banners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\BannerRequest $request)
    {
      // upload path
      //$destinationPath = 'uploads';
      // Name the image
      //$fileName = $request->input('title').'.jpg';
      // Upload file to the given path
      //Input::file('image')->move($destinationPath, $fileName);

      // Create new banner instance
      $new=new Banner($request->all());
      // Save banner
      \Auth::user()->banners()->save($new);
      // Set Flash Message
      session()->flash('flash_message','New Banner Has Been Created!');
      // Redirect to new banner page
      return redirect('admin/Banners/'.$new->id.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $banners=Banner::findOrFail($id); // Select Resource
      $pages=\App\Page::lists('title','id');
      return view('banners.edit')
          ->with('banners',$banners)
          ->with('pages',$pages);
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
      // Get form data and find banner associated with record
      $banner = Banner::find($id);
      $page=\App\Page::find($request->input('button_url'));
      // Set banner column values
      $banner->img = $request->input('img');

      $banner->title = $request->input('title');
      $banner->description =  $request->input('description');
      $banner->button_url='pages/'.$page->slug;
      $banner->button_text =  $request->input('button_text');
      $banner->save();
      // Set Flash Message
      session()->flash('flash_message','Banner Updated');
      // Display our view with data
      return redirect('admin/Banners');
    }
    public function destroy($id){
      $banner = Banner::find($id);
      $banner->delete();
      return redirect('admin/Banners/');
    }
}
