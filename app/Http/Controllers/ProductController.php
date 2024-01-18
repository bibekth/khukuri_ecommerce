<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Dotenv\Validator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Psy\CodeCleaner\ReturnTypePass;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = Auth::user();
        $data['products'] = Product::all();
        return view('admin.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = Auth::user();
        return view('admin.product.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        // dd($request);
        $data['user'] = Auth::user();
        $this->validate($request, [
            'name' => 'required|max:200',
            'price' => 'required',
            'description' => 'nullable',
            'weight' => 'nullable',
            'size' => 'nullable',
            'image' => 'required|max:10000',
            // 'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        try{
            DB::beginTransaction();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->weight = $request->weight;
            $product->size = $request->size;
            // $product->image = $request->image;
            $filecontent = File::get($request->image);
            $path = time() . $request->image->getClientOriginalName();
            $name = $request->image->getClientOriginalName();
            Storage::disk('public')->put("/images/$path", $filecontent);
            $product->image = $path;
            $product->save();

            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            Session::flash('error', "Product entry failed due to internal error!!");
            return back();
        }
        Session::flash('success', "Product added successfully");
        return back();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = Auth::user();
        $data['product'] = Product::find($id);
        return view('admin.product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['user'] = Auth::user();
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->weight = $request->weight;
        $product->size = $request->size;
        $product->image = $product->image;
        $product->save();

        Session::flash('success','Updated successfully');
        return redirect(route('product.index'));
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
}
