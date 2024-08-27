<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Category;
use App\Models\Products;
class ClientController extends Controller
{
    public function home(){
        $category = Category::all();
        $products = Products::all();
        return view('USERS.layouts.default')->with(['category' => $category
        ,'products'=>$products]);
    }
    public function Cateid($id){
        $category = Category::all();
        $products = Products::where('category_id',$id)->get();
        return view('USERS.layouts.default')->with(['category' => $category
        ,'products'=>$products]);
    }
    public function search(Request $req){
        $category = Category::all();
        $search = $req->search;
        $products = Products::where('name','LIKE','%'.$search.'%')->get();
        if($products->isEmpty()){
                          return redirect()->back()->with(['error'=>'không tìm thấy sản phẩm ']);
        }
        return view('USERS.layouts.default')->with(['category' => $category
        ,'products'=>$products]);
        
    }
    public function detail($id){
        $category = Category::all();
        $products = Products::where($id);
        $listPro = Products::with('ProductsImage:id,products_id,image_url')->find($id);
        return view('USERS.detail')->with(['category' => $category,
        'products' => $products 
     , 'listPro' => $listPro]);
    }
}   
