<?php

namespace App\Http\Controllers;

use Request;
use App\Page;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Regulus\ActivityLog\Models\Activity;
use DB;

class PagesController extends Controller
{
    public function contact(){
      return view('pages.contact');
    }

    public function index(){
      $pages = Page::all();
      return view('pages.pages', compact('pages'));
    }

    public function create(){
      return view('pages.create');
    }

    public function store(Requests\PageRequest $request){
      $input = Request::all();
      Page::create($input);
      return redirect('pages/');
    }

    public function delete($id){

      $page = Page::find($id);
      $page->delete();
      return redirect('pages/');
    }

    public function show($slug){
      $page = Page::whereSlug($slug)->firstOrFail();
      $related_pages=Page::where('slug','!=',$slug)->take(5)->get();
      return view('pages.show')
          ->with('page',$page)
          ->with('related_pages',$related_pages);
    }

    public function edit($id){
      $page = Page::findOrFail($id);
      $activity=DB::table('activity_log')->get();
      return view('pages.edit', compact('page'))
          ->with('activity',$activity);
    }

    public function update(Requests\PageRequest $request){
      $input = Request::all();
      $page  = Page::find($input['id']);
      $page->body =  $input['body'];
      $page->title =  $input['title'];
      $page->slug =  $input['slug'];
      $page->save();

      // Log Update in Activity Table
      Activity::log([
          'contentId'   => $page->id,
          'contentType' => 'Page',
          'action'      => 'Update',
          'description' => 'Update a Page',
          'details'     => \Auth::user()->id,
          'updated'     => '',
      ]);

      // Set Flash Message
      session()->flash('flash_message',''.$page->title.' Updated!');
      return redirect('pages/'.$page->slug.'');
    }
}
