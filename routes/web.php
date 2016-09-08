<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 use App\Task;
 use App\Product;
  use Illuminate\Http\Request;

  /**
   * Вывести список всех задач
   */

Route::get('/', function () {
  $products = Product::orderBy('created_at', 'asc')->get();
  return view('products', [
    'products' => $products
  ]);
});
  /**
   * Добавить новую задачу
   */

 Route::post('/product', function (Request $request) {
//  $validator = Validator::make(product$request->all(), [
//    'name' => 'required|max:255',
//  ]);
//  if ($validator->fails()) {
//    return redirect('/')
//      ->withInput()
//      ->withErrors($validator);
//  }
$product = new Product();
$product->name = $request->name;
$product->price = $request->price;
$product->discription = $request->discription;
$product->category = $request->category;
$product->save();
return redirect('/');
  // Создание задачи...
});

  /**
   * Удалить существующую задачу
   */

   Route::delete('/product/{id}', function ($id) {
  Product::findOrFail($id)->delete();

  return redirect('/');
  
});

Route::post('/edit/{id}', function ($id) {
  $product = Product::find($id);
  return view('editProduct', [
    'editProduct' => $product
  ]);
});
