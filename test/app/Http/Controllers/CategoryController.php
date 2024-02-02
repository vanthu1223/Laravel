<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __construct()
    {
        
    }
    // hiển thị danh sách chuyên mục pt get
    public function index(){
        return view('clients/category/list');
    }
    // phương thức get
    public function getCategory($id){
        return view('clients/category/edit');
    }
    // cập nhật chuyên mục phương thức post
    public function updateCategory($id){
        return 'Submit sửa chuyên mục'.$id;
    }
    public function showCategory(){
    return 'submit chyueen mục';
    }
    // Thêm dữ liệu vào chuyên mục phương thức post
    public function addCategory(){
        return view('clients/category/add');
    }
    // Xóa dữ liệu bằng pt delete
    public function deleteCategory($id){

    }

}
