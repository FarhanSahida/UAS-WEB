<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories', ['categories' => $categories]);
    }

    public function add()
    {
        return view('category-add');
    }

    public function send(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);

        $category = Category::create($request->all());
        return redirect('categories')->with('status', 'Kategori Berhasil Ditambahkan');
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('category-edit', ['category' => $category]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);

        $category = Category::where('slug', $slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('categories')->with('status', 'Kategori Berhasil Diganti');       
    }

    public function delete($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('categories')->with('status', 'Kategori Berhasil Dihapus');
    }

    public function deleted()
    {
        $deleted = Category::onlyTrashed()->get();
        return view('category-deleted', ['deleted' => $deleted]);
    }

    public function restore($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->restore();
        return redirect('categories')->with('status', 'Kategori Berhasil Dipulihkan');
    }
}
