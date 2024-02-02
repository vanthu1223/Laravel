<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $title = "Hoc Lap Trinh";
        $content = "Hoc Lap Trinh tai unicode";
        $dataView = [
            'title' => $title,
            'content' => $content
        ];
        return view('home',$dataView); // Load
    }
    public function getNews(){
        return 'Danh sách tin tức';
    }
    
}
