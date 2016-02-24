<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebTrack;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Goutte\Client;

class WebTrackController extends Controller
{

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    for($i=68;$i<=78;$i++){
      //$photos=Image::paginate(50);
      $client = new Client();
      $baseURL = 'http://www.cutecatgifs.com/page';
      $urlEndpoint = '/'.$i++;
      $crawler = $client->request('GET', $baseURL . $urlEndpoint);
      $photos = $crawler->filter('img.alignnone')->extract(array('src','alt'));
      foreach($photos as $photo){
        $url = $photo[0];
        $title =$photo[1];
        $extension = pathinfo($url, PATHINFO_EXTENSION);
        $filename = str_random(4).'-'.str_slug($title).'.'. $extension;
        // get file content from url and save in directory
        $file = file_get_contents($url);
        $save_file = file_put_contents('uploads/'.$filename, $file);
        // Create record in database
        $image=new \App\Image();
        $image->name=$photo[1];
        $image->url=$filename;
        $image->user_id=1;
        $image->description=$photo[1];
        $image->save();
     }
   }
  }
}
