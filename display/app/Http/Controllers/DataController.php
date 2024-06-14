<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function index()
    {
        $rss = Http::get('https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json')->json();
        $json = json_encode($rss);
        $array = json_decode($json, true);
        $info=$array['channel'];
        $newsItems=$array['channel']['item'];
        return view('welcome', compact('newsItems','info'));
    }
}
?>