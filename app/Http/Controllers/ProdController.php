<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prod;

class ProdController extends Controller
{
    public function index(){
        $products = Prod::all();
    
      return view('prods.index', ['products'=>$products]);
    }

    public function create(){
        return view('prods.create'); 
    }
    public function store(Request $request) {
        $data =$request->validate([
            'name'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'date'=>'required'
        ]);

        $newProd = Prod::create($data);
        return redirect(route('prod.index'));
    }
    public function edit(Prod $product){
        return view('prods.edit',['product'=>$product]);
    }
    public function update(Prod $product, Request $request){
        $data =$request->validate([
            'name'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'date'=>'required'
        ]);
        $product->update($data);
        return redirect(route('prod.index'))->with('success','Product updated successfully');
    }
    public function destroy(Prod $product){
        $product->delete();
        return redirect(route('prod.index'))->with('success','Product deleted successfully');

    }
}
