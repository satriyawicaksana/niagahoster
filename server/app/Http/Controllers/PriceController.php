<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

class PriceController extends Controller
{
    public function index(){
        return Price::all();
    }
    public function show($id){
        return Price::find($id);
    }
    public function store(Request $request){
        return Price::create($request->all());
    }
    public function update(Request $request, $id){
        $price = Price::findOrFail($id);
        $price->update($request->all());

        return $price;
    }
    public function delete($id){
        $price = Price::findOrFail($id);
        $price->delete();
        return 204;
    }
}
