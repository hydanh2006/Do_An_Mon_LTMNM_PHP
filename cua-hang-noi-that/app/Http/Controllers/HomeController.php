<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy 8 sản phẩm mới nhất từ CSDL
        $san_pham = Product::latest()->take(8)->get(); 
        
        // Trả về View và ném dữ liệu sang
        return view('trang-chu.index', compact('san_pham')); 
    }
}
