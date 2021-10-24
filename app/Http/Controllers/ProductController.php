<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewProduct()
    {
        $product=Product::all();
        $arr= array('product' => $product );
        return view('product.view',$arr);
    }

    public function insertProduct(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request , [
                'name'=>'required|max:25|unique:products',
                'price'=>'required|min:4|max:7'
            ]);

            $fmm = new Product();
            $fmm->name=$request->input('name');
            $fmm->price=$request->input('price');
            $fmm->save();
        }
        return view('product.insert');
    }
    public function deleteProduct($id)
    {
            $product=Product::find($id);
            $product->delete();
            return redirect("product");
    }
    public function editProduct(Request $request ,$id)
    {
        if ($request->isMethod('post')) {
            $fmm =Product::find($id);;
            $fmm->name=$request->input('name');
            $fmm->price=$request->input('price');
            $fmm->save();
            return redirect('product');
        }
        else {
            $product=Product::find($id);
            $arr= array('product' => $product );
            return view('product.edit',$arr);
        }

    }

}
