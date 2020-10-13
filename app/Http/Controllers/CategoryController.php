<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator(array $user)
    {
        return Validator::make($category, [
            'kategori' => ['required', 'string', 'max:2000'],
            'nomor_kategori' => ['required', 'string', 'max:255', 'unique:categories']
        ]);
    }
    public function index()
    {
        
        $categories = Category::all();
        return view ('layouts.category.index', compact('categories','categories'));
    }
    
    public function create()
    {
        
        return view ('layouts.category.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required|string|unique:categories',
            'nomor_kategori' => 'required|unique:categories',
        ]);

        $category = new Category([
            'kategori' => ucwords($request->get('kategori')),
            'nomor_kategori' => $request->get('nomor_kategori')
            ]);
        $category->save();
        return redirect('category')->with('success','Kategori baru berhasil ditambahkan!');
        
        
    }

    
    public function show(Category $category)
    {
        //
    }

    

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('layouts.category.edit', compact('category'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kategori' => 'required|string|unique:categories',
            'nomor_kategori' => 'required|unique:categories'
        ]);
        
        $update = Category::findOrFail($id);
        $update->update([
            'kategori' => ucwords($request->get('kategori')),
            'nomor_kategori' => $request->get('nomor_kategori')
        ]);
            
       return redirect('category')->with('update','Data kategori berhasil diperbarui!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Category::find($id);
        $del->delete();
        return back()->with('delete', 'Kategori berhasil dihapus');
    }   
}



