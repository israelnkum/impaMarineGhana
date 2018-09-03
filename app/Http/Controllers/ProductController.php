<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function gallery()
    {
        //lectures
        $lectures = scandir('public/images/products');
        $newLectures = [];
        for ($i = 2; $i < count($lectures); $i++) {
            if ($lectures[$i] != '.' || $lectures[$i] != '..') {

                array_push($newLectures, $lectures[$i]);
            }
        }
    }
}
