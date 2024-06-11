<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Category_Local;
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
        ]);
        $CategoryData = $r->except(['_token']);
        $Category->update($CategoryData);

        return redirect()->route('admin.categories.all');
    }

    public function getLocalize(Category $Category) {
        $LocalCategory = Category_Local::where('category_id', $Category->id)->first();
        if ($LocalCategory) {
            return view('admin.categories.localize', compact('Category', 'LocalCategory'));
        }else{
            return view('admin.categories.localize', compact('Category'));
        }
    }

    public function postLocalize(Request $r, Category $Category) {
        $r->validate([
            'title_value' => 'required',
        ]);
        $LocalData = $r->except(['_token']);
        $TheLocal = Category_Local::where('category_id' , $Category->id)->first();
        $LocalData['category_id'] = $Category->id;
        if($TheLocal){
            //Update
            $TheLocal->update($LocalData);
        }else{
            //Create
            Category_Local::create($LocalData);
        }
        return redirect()->route('admin.categories.all', $Category->id);
    }

    public function delete(Category $Category) {
        $Category->delete();

        return redirect()->route('admin.categories.all');
    }
}
