<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $products = DB::table('products')->get();
        return view('products.index',compact('products')); 
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $req){
       $data = array();
       $data['product_name']=$req->product_name;
       $data['product_code']=$req->product_code;
       $data['details']=$req->details;

        $image = $req->file('logo');
        if($image){
            $image_name = date('dmy_H_s_i');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $image->move($upload_path,$image_full_name);
            $data['logo']=$image_url;
            DB::table('products')->insert($data);
            return redirect('index')->with('success','Product Created Successfylly');
        }
    }

    public function edit($id){
        $products = DB::table('products')->where('id',$id)->first();
        return view('products.edit',compact('products'));
        
    }

    public function update(Request $req ,$id){
        $oldlogo = $req->old_logo;


        $data = array();
        $data['product_name']=$req->product_name;
        $data['product_code']=$req->product_code;
        $data['details']=$req->details;
 
         $image = $req->file('logo');
         if($image){
             unlink($oldlogo);
             $image_name = date('dmy_H_s_i');
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name = $image_name.'.'.$ext;
             $upload_path = 'public/media/';
             $image_url = $upload_path.$image_full_name;
              $image->move($upload_path,$image_full_name);
             $data['logo']=$image_url;
         }

         DB::table('products')->where('id',$id)->update($data);
        return redirect('index')->with('success','Product Editted Successfully');
    }

    public function delete($id){
        $data=DB::table('products')->where('id',$id)->first();
        $image=$data->logo;
        unlink($image);
         DB::table('products')->where('id',$id)->delete();
        return redirect('index')->with('success','Product Deleted Successfully');
    }

    public function show($id){
        $data = DB::table('products')->where('id',$id)->first();
        return view('products.show',compact('data')); 
    }
}
