<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public $data =[];
    public function index(){
        $this->data['title']= 'Lập trình tại unicode';
        return view('client.home',$this->data);
    }
    public function product(){
        $this->data['title'] = 'Sản phẩm';
        return view('client.products',$this->data);
    }
    public function getAdd(){
        $this->data['title'] = 'Thêm sản phẩm';
        return view('client.add',$this->data);
    }
    public function postAdd(Request $request){
        dd($request);
    }
    public function putAdd(Request $request){
        dd($request);
    }
}
