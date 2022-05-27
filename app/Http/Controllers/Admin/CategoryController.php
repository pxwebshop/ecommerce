<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        $parent_id = 0;
        return view('admin.category.list', [
            'categories' => $categories,
            'parent_id' => $parent_id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add', [
            'categories' => Category::where('parent_id', 0)->get(),
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
        $category = new Category();
        try {
            $category->fill($request->input())->save();
            Toastr::success(trans('common.added_success'));
            return redirect()->route('category');
        }
        catch (Exception $e) {
            Toastr::error(trans('common.added_error'));
            return redirect()->route('category.add');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', [
            'category' => $category,
            'categories' => Category::where('parent_id', 0)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $category = Category::find($id);
        try {
            $category->fill($request->input())->save();
            Toastr::success(trans('common.updated_success'));
            return redirect()->route('category');
        }
        catch (Exception $e) {
            Toastr::error(trans('common.updated_error'));
            return redirect()->route('category.edit');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $category = Category::find($id);
        Toastr::success(trans('common.deleted_success'));
        $category->delete();
        return redirect()->route('category');
    }
}
