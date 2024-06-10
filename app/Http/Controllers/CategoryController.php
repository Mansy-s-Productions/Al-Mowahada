<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    // Admin
    public function getAdminAll() {
        $Categories = Category::latest()->get();

        return view('admin.categories.all', compact('Categories'));
    }

    public function getAdminNew() {
        return view('admin.categories.new');
    }

    public function postAdminNew(Request $r) {
        $r->validate([
            'title' => 'required',
            'lang' => 'required',
        ]);
        $CategoryData = $r->except(['_token']);
        // Generate the slug
        $CategoryData['user_id'] = auth()->user()->id;
        Category::create($CategoryData);

        return redirect()->route('admin.categories.all');
    }

    public function getAdminEdit(Category $Category) {
        return view('admin.categories.edit', compact('Category'));
    }

    public function postAdminEdit(Request $r, Category $Category) {
        $r->validate([
            'title' => 'required',
            'lang' => 'required',
        ]);
        $CategoryData = $r->except(['_token']);
        $Category->update($CategoryData);

        return redirect()->route('admin.categories.all');
    }

    public function delete(Category $Category) {
        $Category->delete();

        return redirect()->route('admin.categories.all');
    }
}
