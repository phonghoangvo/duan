<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Models\Cuahang;
use App\Models\Category;
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
            ->select('id', 'name','slug')
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

    public function cuahang($id = null)
{
    $perpage = 24;
    $danhmucsach = null;

    // Kiểm tra xem có $id được truyền vào hay không
    if ($id !== null) {
        // Nếu có $id được truyền vào, thực hiện tìm kiếm theo thể loại
        $products = Cuahang::where('idCategory', $id)->paginate($perpage)->withQueryString();
    } else {
        // Ngược lại, hiển thị tất cả sản phẩm
        $products = Cuahang::paginate($perpage)->withQueryString();
    }

    // Lấy danh mục sách từ tất cả sản phẩm (lấy một lần, không cần lặp)
    $idCategories = $products->pluck('idCategory')->unique()->toArray();

    // Lọc và sắp xếp theo
    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'none';

    switch ($sort_by) {
        case 'giagiamdan':
            $products = Cuahang::with('category')->whereIn('idCategory', $idCategories)->orderBy('price', 'DESC')->paginate($perpage)->appends(request()->query());
            break;
        case 'giatangdan':
            $products = Cuahang::with('category')->whereIn('idCategory', $idCategories)->orderBy('price', 'ASC')->paginate($perpage)->appends(request()->query());
            break;
        case 'tuadenz':
            $products = Cuahang::with('category')->whereIn('idCategory', $idCategories)->orderBy('name', 'DESC')->paginate($perpage)->appends(request()->query());
            break;
        case 'tuzdena':
            $products = Cuahang::with('category')->whereIn('idCategory', $idCategories)->orderBy('name', 'ASC')->paginate($perpage)->appends(request()->query());
            break;
        default:
            // Mặc định sắp xếp theo id giảm dần
            $products = Cuahang::with('category')->whereIn('idCategory', $idCategories)->orderBy('id', 'DESC')->paginate($perpage)->appends(request()->query());
            break;
    }

    // Trả về view 'cuahang.blade.php' với dữ liệu sản phẩm
    return view('cuahang', ['products' => $products, 'danhmucsach' => $danhmucsach]);
}

    
    public function timkiem(Request $request)
    {
        $searchTerm = $request->input('timkiem');
        $page = 24;
    
        // Thực hiện tìm kiếm dựa trên $searchTerm
        $query = Cuahang::where('name', 'like', '%' . $searchTerm . '%');

        // Lọc theo
        if ($sortBy = $request->input('sort_by')) {
            $validSortOptions = ['giagiamdan', 'giatangdan', 'tuadenz', 'tuzdena'];
            if (in_array($sortBy, $validSortOptions)) {
                $direction = $sortBy === 'giatangdan' ? 'ASC' : 'DESC';
                $query->orderBy('name', $direction)->orderBy('price', $direction);
            }
        }
    
        $products = $query->paginate($page)->withQueryString();
    
        return view('cuahang', ['products' => $products]);
    }
    public function chitiet($id){ 
        $hot = DB::table('product')
            ->where('hot', 1)
            ->where('hidden', 1)
            ->orderBy('ngayDang', 'desc')
            ->limit(7)
            ->get();
        $products = cuahang::where('id','=',$id)->get();
        return view('chitiet',compact('products','hot'));
    }

   


    
}
