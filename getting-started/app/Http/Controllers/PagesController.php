<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!';
        return view('page.index')->with('title',$title);
    }

    public function about(){
        $title = 'About Us';
        return view('page.about')->with('title',$title);
    }

    public function services(){
        $data=array(
          'title' => 'Services',
            'services' => ['Web Design','Programming','SEO']
        );
        return view('page.services')->with($data);
    }

}
