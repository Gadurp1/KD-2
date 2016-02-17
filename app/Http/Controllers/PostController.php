<?php

namespace App\Http\Controllers;
use Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('posts.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('posts.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\PostRequest $request)
  {
    // Create new banner instance
    $post=new Post;
    // Save banner
    $post->title=$request->input('title');
    $post->slug=$request->input('slug');
    $post->content=$request->input('content');
    $post->category_id=$request->input('category_id');
    $post->status=$request->input('status');
    $post->comments=$request->input('comments');
    $post->featured=$request->input('featured');
    $post->summary=$request->input('summary');
    $post->save();
    // Set Flash Message
    session()->flash('flash_message','New Post Has Been Created!');
    // Redirect to new banner page
    return redirect('post/');
  }

  public function show($slug)
  {
    $more_posts=Post::where('slug','!=',$slug)
        ->latest()
        ->take(3)
        ->get();
    $post=Post::where('slug',$slug)->first();
    return view('posts.show')
        ->with('post',$post)
        ->with('more_posts',$more_posts);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($slug)
  {
    $post=Post::where('slug',$slug)->first();
    return view('posts.edit')
    ->with('post',$post);
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @param CouponRequest $request
   * @return Response
   */
  public function update(Requests\CouponRequest $request,$id){

    $post = Post::find($id);
    $post->slug=$request->input('slug');
    $post->title=$request->input('title');
    $post->content=$request->input('content');
    $post->category_id=$request->input('category_id');
    $post->comments=$request->input('comments');
    $post->featured=$request->input('featured');
    $post->status=$request->input('status');
    $post->summary=$request->input('summary');

    // Save New post
    $post->save();

    // Set Flash Message Success Text
    session()->flash('flash_message',''.$post->title.' Updated!');
    return redirect('post/'.$post->slug.'');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $post = Post::find($id);
      $post->delete();
      session()->flash('flash_message_error','Post Deleted');
      return redirect('post');

  }

}

?>
