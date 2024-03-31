<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
      echo '<h2> Query Eloquent Model </h2>';
    //   $allPosts = Post::all();
    //   if ($allPosts->count()>0){
    //     foreach($allPosts as $item ){
    //         echo $item->title.'</br>';
    //     }
    //   }

    // $detail = Post::find(1);

    // Sử dụng query builder

    //$activePosts = DB::table('posts')->where('status',1)->get();
        // $activePosts = Post::where('status')->orderBy('id','DESC')->get();
        //    if ($activePosts->count()>0){
        // foreach($activePosts as $item ){
        //     echo $item->title.'</br>';
        // }
      //}

        // $allPosts = Post::all();
        // $activePosts = $allPosts->reject(function ($activePosts){
        //     return $activePosts->status==1;
        // });
        // dd($activePosts);

        // Post::chuck(2,function ($posts){
        //     foreach ($posts as $post) {
        //         echo $post->title."</br>";
        //     }
        //     echo  'Kết thúc';
        // });

        $allPosts = Post::where('status',1)->cursor();

        foreach($allPosts as $item) {
            echo $item->title.'</br>';
        }
    }
}
