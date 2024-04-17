<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $blogs = [
            ["title"=>"blog 1","content"=>"content 1","status"=>1],
            ["title"=>"blog 2","content"=>"content 2","status"=>1],
            ["title"=>"blog 3","content"=>"content 3","status"=>0],
        ];
        return view("home",["blogs"=>$blogs]);
    }
}
