<?php

namespace App\Http\Controllers;

use App\Models\Tintuc;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TinController extends Controller
{
    function index() {
        return view('index');
    }


    function news() {
        $news = Tintuc::where('hidden', 1)->paginate(4);

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
        return view('admin.tin.themtin');
    }

    function themtin_(Request $request) {
        $imgPath = $request->file('img')->store('img', 'public');
        $t = new Tintuc;
        $t->title = $request->input('title');
        $t->img = '/storage/' . $imgPath;
        $t->summary = $request->input('summary');
        $t->content = $request->input('content');
        $t->hidden = $request->input('visibility',1);
        $t->save();
    
        return redirect()->route('listtintuc');
    }
    

    function xoa($id) {
        $t = Tintuc::find($id);
        $t->delete();
        return redirect()->route('listtintuc');
    }

    function suatin($id) {
        $tintuc = Tintuc::find($id);
        return view("admin.tin.suatin", compact('tintuc'));
    }    

    public function capnhat(Request $request, $id) {
        $tintuc = Tintuc::find($id);
        $imgPath = $request->file('img')->store('img', 'public');
        $tintuc->title = $request->input('title');
        $tintuc->img = '/storage/' . $imgPath;
        $tintuc->summary = $request->input('summary');
        $tintuc->content = $request->input('content');
        $tintuc->hidden = $request->input('visibility', 1);

    
        $tintuc->save();
    
        return redirect()->route('listtintuc');
    }
    
    
}
