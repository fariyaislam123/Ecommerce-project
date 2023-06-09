<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Index Method';
        $products= Product::paginate(3);
        //dd($product);
        return view('products',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // return $request->all();
       $product = new Product();
       $product->name=$request->has('name')? $request->get('name'):'';
       $product->price=$request->has('price')? $request->get('price'):'';
       $product->amount=$request->has('amount')? $request->get('amount'):'';
       $product->is_active=1;

       if($request->hasFile('images')){
        $i=0;
        $images= $request->file('images');
        $files = $request->file('images');
        $imageLocation= array();
        foreach($files as $file){
            $extension = $file->getClientOriginalExtension();
            $fileName= 'product_'.time() . ++$i . '.'. $extension;
            $location = '/images/uploads/';
            $file->move(public_path() . $location, $fileName);
            $imageLocation[]= $location . $fileName;


        }
         $product->image= implode('|',$imageLocation);
         $product->save();
        return back()->with('success','successfully added');
       }

       else {
        return back()->with('error','Product was not successfully added');
       }

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $images= explode('|',$product->image);
        $related_products= Product::where('category_id',$product->category_id)->where('id','!=',$product->id)->limit(3)->get();
        return view('product-details',compact('product','images','related_products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function addProduct(){
        $product= Product::all();
        $returnProducts= array();
        foreach($product as $product){
            $images= explode('|',$product->image);
            $returnProducts[]=[
                'name'=> $product->name,
                'price'=>$product->price,
                'amount'=>$product->amount,
                'image'=>$images[0]
            ];
        }

        return view ('add_product',compact('returnProducts'));
    }
}
