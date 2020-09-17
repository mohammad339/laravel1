<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class postcontroller extends Controller
{
    public function index()
    {
     $pagetitle='صفحه خوش آمدگویی';
    // $posts=DB::table('posts')->select('id,title,description')->get(); 
    // $posts=DB::table('posts')->orderBy('id','DESC')->get();  این کدازمطالب جدیدتاقدیم ازبالا تاپایین ترتیب گذاری میکند//
   $posts=DB::table('posts')->orderBy('id','DESC')->paginate(1);  //دستورصفحه بندی ازجدیدترین مطلب تاقدیمیتر
   $maxid=DB::table('posts')->max('id');
   $postscount=DB::table('posts')->count();
    //$posts=DB::table('posts')->get();
     return view('posts',compact('pagetitle','posts','postscount','maxid'));
    }
}
