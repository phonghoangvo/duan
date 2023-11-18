<?php

namespace App\Http\Controllers;

use App\Models\Tintuc;
use Illuminate\Http\Request;

class TinController extends Controller
{
    function index() {
        return view('index');
    }

    function news() {
        $news = Tintuc::all();
        return view('news', ['news' => $news]);
    }

    function lienhe() {
        return view('lienhe');
    }

    function gioithieu() {
        return view('gioithieu');
    }

    public function listtintuc() {
        $listtintuc = Tintuc::all();
        return view('admin.listtintuc', compact('listtintuc'));
    }

    function admin() {
        return view('admin.admin');
    }

    function themtin() {
        return view('admin.tin/themtin');
    }

    function themtin_(Request $request) {
        $imgPath = $request->file('img')->store('img', 'public');
        $t = new Tintuc;
        $t->title = $request->input('title');
        $t->img = '/storage/' . $imgPath;
        $t->summary = $request->input('summary');
        $t->content = $request->input('content');
        $t->hidden = $request->input('hidden');
        $t->save();
    
        return redirect()->route('listtintuc');
    }
    

    function xoa($id) {
        $t = Tintuc::find($id);
        $t->delete();
        return redirect()->route('listtintuc');
    }

    function suatin($id) {
        $fix = Tintuc::find($id);
        return view("admin.tin/suatin", ['Tintuc' => $fix]);
    }

    function capnhat($id) {
        $fix = Tintuc::find($id);
        $fix->title = $_POST['title'];
        $fix->img = $_POST['img'];
        $fix->description = $_POST['description'];
        $fix->update();
        return redirect('listtintuc');
    }
}
