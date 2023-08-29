<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        // $product = Product::get();
        return view('products.index',['products'=> Product::latest()->paginate(5)]);
    }
    public function create(){
        return view('products.create');
    }
    public function about(){
        return view('products.about');
    }
    public function store(Request $request){
        // validate data 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        // upload image 
        // dd($request->all());
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'),$imageName);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $imageName;

        $product->save();

        return back()->withSuccess('Product Created Successfully!!');
        
    }

    public function edit($id){
        $product = Product::where('id',$id)->first();

        return view('products.edit',['product' => $product]);
    }

    public function update(Request $request, $id){
        // validate data 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        // upload image 
        // dd($request->all());
        $product = Product::where('id',$id)->first();

        if(isset($request->image)){

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'),$imageName);
            $product->image = $imageName;
        }
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();

        return back()->withSuccess('Product Updated Successfully!!');
    }
    public function destroy($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product deleted !!');
    }
    public function show($id){
        $product = Product::where('id',$id)->first();
        return view('products.show',['product'=>$product]);
    }
}
