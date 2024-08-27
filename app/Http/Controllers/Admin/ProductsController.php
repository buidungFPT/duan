<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductsImage;

use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    public function listPro(){

        $listPro = Products::with('ProductsImage:id,products_id,image_url')->get();
        $listCategory = Category::all();
       return view('admin.products.list-AD')->with([
        'listPro' =>  $listPro,
        'Category'=>  $listCategory
       ]);
    }
    public function addPro(){
        $listCategory = Category::all();
        return view('admin.products.addPro',compact('listCategory'));
    }
    public function postaddPro(Request $req){
       $req ->validate([
        'NameSp' => 'required|min:5',
        'PriceSP' => 'required',
        'imageSP' => 'required',
        'imageCT' => 'required',
        'description' =>'required'
       ],[
         'NameSp.required' => 'Ban phai nhap ten ',
            'NameSp.min' => 'Ban can nhap lon hon 5 ki tu',
            'PriceSP.required' => 'ban can nhap gia',
            'imageSP.required' => 'ban can nhap anh ',
            
       
        
       ]);
      $product = new Products();
      $product-> name = $req ->NameSp;
      $product -> category_id = $req -> category_id;
      $product ->price = $req ->PriceSP;
      $product ->image = "";
      $product ->description = $req ->description;
      $product->save();
      if($req -> hasFile('imageSP')){
        $image = $req -> file('imageSP');
        $newName = time().'.'.$image ->getClientOriginalExtension();
        $linkStorage ='imagePRO/';
        $image -> move(public_path($linkStorage), $newName);
        $product ->image = $linkStorage .$newName;
        $product -> save();
    }
      if($req -> hasFile('imageCT')){
          $image = $req -> file('imageCT');
          foreach($image as $key => $imageS){
          $imageSName = time().'.'.$imageS ->getClientOriginalName();
          $imageS -> move(public_path('imagePRO'), $imageSName);
          ProductsImage::create([
        
        'products_id' => $product->id,
        'image_url' => 'imagePRO/'.$imageSName,
        'image_type' => $key == 0 ?'main' : 'secondary'
      
         
        ]);
        }
      } 
      
      return redirect()->route('admin.products.listPro')->with([ 'message' => ' ADD PRODUCT SUSSECCFULLY'

      ]);
     
    }
    public function detetePro($id, ){
        $product = Products::find($id);
        $product->delete();
        return redirect()->route('admin.products.listPro',compact('product'))->with([
           'message' => '  Delete PRODUCT SUSSECCFULLY'
        ]);
    }
  
    public function detailPro ($idproduct){
        $product = Products::where('id',$idproduct)->first();
        return view('admin.products.detail')->with([
            'product' =>  $product
        ]);
      
    }
    public function updatePro($idproduct){
        $listCategory = Category::all();
        $product = Products::where('id',$idproduct)->first();  // lấy thông tin sản phẩm theo id truyền vào
        return view('admin.products.updatePro',compact('listCategory','product'));
    }
    public function updateProduct(Request $req,$idproduct){
        $req ->validate([
            'NameSp' => 'required|min:5',
            'PriceSP' => 'required',
            'imageSP' => 'required',
            'imageCT' => 'required',
            'description' =>'required'
           ],[
             'NameSp.required' => 'Ban phai nhap ten ',
                'NameSp.min' => 'Ban can nhap lon hon 5 ki tu',
                'PriceSP.required' => 'ban can nhap gia',
                'imageSP.required' => 'ban can nhap anh ',
                
           
            
           ]);
        $product = new Products();
        $product = Products::where('id',$idproduct)->first();
        $product-> name = $req ->NameSp;
        $product -> category_id = $req -> category_id;
        $product ->price = $req ->PriceSP;
        $product ->image = "";
        $product ->description = $req ->description;
        $product -> save();
        if($req -> hasFile('imageSP')){
            $image = $req -> file('imageSP');
            $newName = time().'.'.$image ->getClientOriginalExtension();
            $linkStorage ='imagePRO/';
            $image -> move(public_path($linkStorage), $newName);
            $product ->image = $linkStorage .$newName;
            $product -> save();
        } 
        if($req -> hasFile('imageCT')){
            $image = $req -> file('imageCT');
            foreach($image as $key => $imageS){
            $imageSName = time().'.'.$imageS ->getClientOriginalName();
            $imageS -> move(public_path('imagePRO'), $imageSName);
            ProductsImage::create([
          
          'products_id' => $product->id,
          'image_url' => 'imagePRO/'.$imageSName,
          'image_type' => $key == 0 ?'main' : 'secondary'
        
           
          ]);
          }
        } 
        
        return redirect()->route('admin.products.listPro')->with([ 'message' => ' UPDATe PRODUCT SUSSECCFULLY'
  
        ]);
    }
    }
