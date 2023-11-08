<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Models\Cuahang;
Paginator::useBootstrap();

use Illuminate\Http\Request;

class Tincontroller extends Controller
{
    function index()
    {
        $giamgia = DB::table('product')
            ->where('giamgia', 1)
            ->where('hidden', 1)
            ->orderBy('ngayDang', 'desc')
            ->limit(6)
            ->get();

        $hot = DB::table('product')
            ->where('hot', 1)
            ->where('hidden', 1)
            ->orderBy('ngayDang', 'desc')
            ->limit(6)
            ->get();

        $vanphongpham = DB::table('product')
            ->where('idCategory', 28)
            ->where('hidden', 1)
            ->orderBy('ngayDang', 'desc')
            ->limit(6)
            ->get();

        $lich = DB::table('product')
            ->where('idCategory', 29)
            ->where('hidden', 1)
            ->orderBy('ngayDang', 'desc')
            ->limit(6)
            ->get();

        $tap = DB::table('product')
            ->where('idCategory', 30)
            ->where('hidden', 1)
            ->orderBy('ngayDang', 'desc')
            ->limit(6)
            ->get();

        $danhmucsach = DB::table('category')
            ->select('id', 'name')
            ->orderby('thutu', 'asc')
            ->where('name', 'LIKE', '%Sách%')
            ->where('hidden', '=', '1')
            ->get();

        $danhmucvpp = DB::table('category')
            ->select('id', 'name')
            ->orderby('thutu', 'asc')
            ->where('name', 'LIKE', '%Sách%')
            ->where('hidden', '=', '1')
            ->get();

        $danhmuclich = DB::table('category')
            ->select('id', 'name')
            ->orderby('thutu', 'asc')
            ->where('name', 'LIKE', '%Sách%')
            ->where('hidden', '=', '1')
            ->get();

        $danhmuctap = DB::table('category')
            ->select('id', 'name')
            ->orderby('thutu', 'asc')
            ->where('name', 'LIKE', '%Sách%')
            ->where('hidden', '=', '1')
            ->get();

        return view('index', [
            'giamgia' => $giamgia,
            'hot' => $hot,
            'vanphongpham' => $vanphongpham,
            'lich' => $lich,
            'tap' => $tap,
            'danhmucsach' => $danhmucsach,
        ]);
    }

    public function cuahangtheoloai($id)
    {
        $perpage=24;
        // $data = Cuahang::paginate($page)->withQueryString();
        $products = Cuahang::where('idCategory', $id)->paginate($perpage)->withQueryString();

        return view('cuahangtheoloai', ['products' => $products]);
    }

    function cuahang()
    {
        $page=24;
        $data = Cuahang::paginate($page)->withQueryString();
        return view("cuahang",['data'=>$data]);
    }
}
