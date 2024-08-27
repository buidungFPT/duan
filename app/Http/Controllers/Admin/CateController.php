<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CateController extends Controller
{
    public function listCate(){
        $listCate = Category::all();
        return view('admin.category.listCate')->with([
            'listCate' => $listCate,
        ]);
   }

   public function addCate(){
  
    return view('admin.category.addCate');
}
    public function postaddCate(Request $req){
        $req ->validate([
            'name' => 'required|min:5',
          
   
          ],[
            'name.required' => 'Ban phai nhap ten ',
           
           
          ]);
      
            $category = new Category();
            $category->name = $req->name;
            $category->save();
        
        return redirect()->route('admin.category.listCate')->with([ 'message' => ' ADD CATEGORY SUSSECCFULLY' ]);
       
    }
    public function deleteCate($id){
        $deleteCate = Category::find($id);
        
        $deleteCate->delete();
        
        return redirect()->route('admin.category.listCate')->with([ 'message' => ' Delete CATEGORY SUSSECCFULLY' ]);

    }
    public function updateCate($idcate){
       
        $listCategory = Category::where('id',$idcate)->first();  // lấy thông tin sản phẩm theo id truyền vào
        return view('admin.category.updateCate',compact('listCategory'));
    }
   
    public function updateCategory(Request $req,$idcate){
        $req ->validate([
            'name' => 'required|min:5',
          
   
          ],[
            'name.required' => 'Ban phai nhap ten ',
           
           
          ]);
      
        $category = new Category();
        $category = Category::where('id',$idcate)->first();
        $category->name = $req->name;
        $category->save();
    
    return redirect()->route('admin.category.listCate')->with([ 'message' => ' Update  CATEGORY SUSSECCFULLY' ]);
   
    }
}
