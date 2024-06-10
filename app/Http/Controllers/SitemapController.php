<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;

class SitemapController extends Controller {
    public function sitemap(){
        $Services = Service::all();
        $Projects = Project::all();
        $Articles = Blog::all();
        return response()->view('sitemap.index' , compact('Services' , 'Projects'  , 'Articles'))->header('Content-Type', 'text/xml');
    }
}
