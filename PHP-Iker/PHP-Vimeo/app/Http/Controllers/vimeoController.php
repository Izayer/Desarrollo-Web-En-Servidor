<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Vimeo\Facades\Vimeo;

class vimeoController extends Controller
{
    /**
     *
     */
    function show(){
        $response = Vimeo::request('/me/videos', ['per_page' => 10], 'GET');
        $response = var_dump($response['body']);
        return view('vimeo')->with('response',$response);
    }

}
