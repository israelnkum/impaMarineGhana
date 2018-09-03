<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcomePage(){
        $data = scandir('images/gallery/');
        $newData =[];
        for ($i = 2; $i<9;$i++){
            if ($data[$i] != '.' || $data[$i] != '..'){

                array_push($newData,$data[$i]);
            }
        }
        // dd ($newData);
        return view('welcome1')->with('newData',$newData);
    }
    public function about(){
        return view('pages.about-us');
    }

    public function contact(){
        return view('pages.contact-us');
    }

    public function product(){
        return view('pages.product');
    }
}
