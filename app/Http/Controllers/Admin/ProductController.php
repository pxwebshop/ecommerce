<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
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
        return view('admin.product.list', [
            'products' => Product::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.product.add', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $product = new Product();

        if($request->hasFile('thumb')){
            $request->validate([
              'thumb' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            // $file = $request->file('image')->getClientOriginalName();
            $path = $request->file('thumb')->storeAs(
                'public/images/products', $request->file('thumb')->getClientOriginalName()
            );
            $product->thumb = $path;
        }
        // dd($request->input());
        $product->fill($request->input())->save();
        Toastr::success('Added successful');
        return redirect()->route('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        $category = Category::where('id',$product->category_id);
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, Request $request, $id)
    {
        $product = Product::find($id);
        if($request->hasFile('thumb')){
            $request->validate([
              'thumb' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            // $file = $request->file('image')->getClientOriginalName();
            $path = $request->file('thumb')->storeAs(
                'public/images/products', $request->file('thumb')->getClientOriginalName()
            );
            $product->thumb = $path;
        }

        // $this->validate($request, [
        //     'images' => 'required',
        //     'images.*' => 'mimes:png,jpeg,jpg'
        // ]);

        // if($request->hasfile('images')) {
        //     foreach($request->file('images') as $file) {
        //         $filename = $file->getClientOriginalName();
        //         $file->storeAs('public/images/products', $filename);
        //         $data[] = $filename;
        //     }
        // }

        // $file= new Uplo;
        // $file->images = json_encode($data);

        // $input = $request->all();
        $product->fill($request->input())->save();
        Toastr::success('Updated successful');
        return redirect()->route('product');
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
    public function destroy(Product $product, $id)
    {
        $product = Product::find($id);
        Toastr::success('Deleted successful');
        $product->delete();
        return redirect()->route('product');
    }
}
