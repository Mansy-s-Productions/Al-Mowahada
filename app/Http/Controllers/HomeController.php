<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;

class HomeController extends Controller {
    public function getHome() {
        $FeaturedProjects = Project::Language()->latest()->limit(3)->get();
        $FeaturedArticles = Blog::Language()->latest()->limit(2)->get();
        return view('home', compact('FeaturedProjects', 'FeaturedArticles'));
    }
}
