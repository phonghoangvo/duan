<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
use App\Models\Cuahang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TimkiemController extends Controller
{
    public function timkiem(Request $request)
    {
        $query = $request->input('timkiem');
        $page = 24;

        // Thực hiện tìm kiếm dựa trên $query và phân trang kết quả
        $results = Cuahang::where('name', 'like', '%' . $query . '%')->paginate($page)->withQueryString();

        return view('timkiem', ['results' => $results]);
    }
}
