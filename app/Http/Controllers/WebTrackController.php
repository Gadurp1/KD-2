<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebTrack;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Goutte\Client;

class WebTrackController extends Controller
{

    public function index()
    {
        //
        //$photos=WebTrack::paginate(50);
        //$photos=WebTrack::paginate(50);
        $client = new Client();
        $baseURL = 'http://www.cutecatgifs.com/';
        $urlEndpoint = '/page/74/';
        $crawler = $client->request('GET', $baseURL . $urlEndpoint);
        $photos = $crawler->filter('img.alignnone')->extract(array('src','alt'));
        return var_dump($photos);
      }

}
