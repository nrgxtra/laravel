<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category',['categories'=>$categories]);
    }
    public function create(){

        return view('admin.cat-create');
    }
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
        ]);
        if ($formFields){
            $category = new Category($formFields);
            $category->save();
            return redirect('/admin/category')->with('success', 'Category Created');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }
    public function edit(Category $category){
        return view('admin.cat-edit', ['category'=>$category]);
    }
    public function save(Request $request, $id){
        $category = Category::find($id);
        $formFields = $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
        ]);
        if ($formFields){
            $category->update($formFields);
            return redirect('/admin/category')->with('success', 'Category Updated');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }
    public function destroy(Request $request, $id){
        $category = Category::find($id);
        $category->delete();
        return back()->with('success', 'Deleted');
    }
}
