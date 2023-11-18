<?php

namespace App\Http\Controllers;
use App\Models\Tintuc;
use DB;
use Illuminate\Http\Request;

class TinController extends Controller
{
    function index(){   
        return view('index');
    }
    function news(){
        $news = Tintuc::all();
        return view('news',['news'=>$news]);
    }
    
    function lienhe(){
        return view('lienhe');
    }

    function gioithieu(){
        return view('gioithieu');
    }

    function listtintuc(){
        $listtintuc = tintuc::all();
        return view('listtintuc',compact('listtintuc'));
    }

    function admin(){
        return view('admin.admin');   
    }

    function themtin(){
        return view('tin/themtin');
    }

    function themtin_(){
        $t = new Tintuc;
        $t->title = $_POST['title'];
        $t->img = $_POST['img'];
        $t->description = $_POST['description'];
        $t->save();
        return redirect('listtintuc');
    }
    
    function xoa($id){
        $t = Tintuc::find($id);
        if ($t==null) return redirect('/thongbao');
        $t->delete();
        return redirect('listtintuc');
    }
    
   
    function suatin($id){
        $fix = Tintuc::find($id);
        return view("/tin/suatin",['Tintuc'=>$fix]);
    }

    function capnhat($id){
        $fix = Tintuc::find($id);
        $fix->title = $_POST['title'];
        $fix->img = $_POST['img'];
        $fix->description = $_POST['description'];
        $fix->update();
        return redirect('listtintuc');
    }
}
