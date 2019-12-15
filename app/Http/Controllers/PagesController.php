<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'welcome to laravel';
        return view('pages.index')->with('title', $title);
        //return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);

        //return view('pages.about');
    }

    public function services()
    {
        //$title = 'Services';
        //return view('pages.about')->with('title', $title);

        $data = array(
            'title' => 'services',
            'services'=> ['Web Application Development','Mobile Application Development','Servers and Networking Services']
        );

        return view('pages.services')->with($data);


        //return view('pages.services');
    }
}
