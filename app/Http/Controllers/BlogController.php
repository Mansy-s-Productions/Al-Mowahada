<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blog_Local;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller {
    public function getAll() {
        $Blogs = Blog::latest()->get();

        return view('blogs.all', compact('Blogs'));
    }

    public function getSingle(Blog $Blog) {
        return view('blogs.single', compact('Blog'));
    }

    // Admin
    public function getAdminAll() {
        $Blogs = Blog::latest()->get();

        return view('admin.blogs.all', compact('Blogs'));
    }

    public function getAdminNew() {
        return view('admin.blogs.new');
    }

    public function postAdminNew(Request $r) {
        $r->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);
        $BlogData = $r->except(['_token', 'image']);
        // Generate the slug
        $BlogData['user_id'] = auth()->user()->id;
        $BlogData['slug'] = Str::slug($r->title, '-');
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = $BlogData['slug'] . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/blogs', $filename);
            $BlogData['image'] = $filename;
        }
        Blog::create($BlogData);

        return redirect()->route('admin.blogs.all');
    }

    public function getAdminEdit(Blog $Blog) {
        return view('admin.blogs.edit', compact('Blog'));
    }

    public function postAdminEdit(Request $r, Blog $Blog) {
        $r->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $BlogData = $r->except(['_token']);
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = $Blog['slug'] . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/blogs', $filename);
            $BlogData['image'] = $filename;
        }
        $Blog->update($BlogData);

        return redirect()->route('admin.blogs.all');
    }


    public function getLocalize(Blog $Blog) {
        $LocalBlog = Blog_Local::where('blog_id', $Blog->id)->first();
        if ($LocalBlog) {
            return view('admin.blogs.localize', compact('Blog', 'LocalBlog'));
        }else{
            return view('admin.blogs.localize', compact('Blog'));
        }
    }

    public function postLocalize(Request $r, Blog $Blog) {
        $r->validate([
            'title_value' => 'required',
            'description_value' => 'required',
            'content_value' => 'required',
        ]);
        $LocalData = $r->except(['_token']);
        $TheLocal = Blog_Local::where('blog_id' , $Blog->id)->first();
        $LocalData['blog_id'] = $Blog->id;
        if($TheLocal){
            //Update
            $TheLocal->update($LocalData);
        }else{
            //Create
            Blog_Local::create($LocalData);
        }
        return redirect()->route('admin.blogs.all');
    }

    public function delete(Blog $Blog) {
        $Blog->delete();

        return redirect()->route('admin.blogs.all');
    }
}
