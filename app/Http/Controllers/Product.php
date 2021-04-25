<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;

class Product extends Controller
{
    public function create(Request $request){
        
   
        ModelsProduct::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'purchase' => $request['purchase'],
            'sale' => $request['sale'],
            'amount' => $request['amount'],
        ]);  
            return redirect('products/list');
    }
        public function store(){
             $products = ModelsProduct::all();
             return view('products.list', ['products'=>$products]);
        }

        public function destroy($id){
           ModelsProduct::find($id)->delete();
           return redirect('/products/list');
            
        }
        public function edite($id){
            $product = ModelsProduct::find($id);
            return view('products.edite', ['product'=>$product]);
        
        }
        public function update($id, Request $request){
            $product = ModelsProduct::find($id);
            $product->update($request->all());
            return redirect('/products/list');
        }

}

