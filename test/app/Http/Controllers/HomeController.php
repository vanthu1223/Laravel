<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public $data =[];
    public function index(){
        $this->data['welcome']= 'Lập trình tại unicode';
        $this->data['content'] = '<h3>Chương trình học </h3>';

        $this->data['index']=1;
        $this->data['dataArr'] = [];
        $this->data['check'] = true;
        $this->data['number'] =10;
        
        return view('client.home',$this->data);
    }
    
}
