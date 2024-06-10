<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Storage;

class ProjectController extends Controller {
    public function getAll() {
        $Categories = Category::latest()->get();
        $Projects = Project::latest()->get();

        return view('projects.all', compact('Categories', 'Projects'));
    }

    public function getSingle(Project $Project) {
        return view('projects.single', compact('Project'));
    }

    // Admin
    public function getAdminAll() {
        $Projects = Project::latest()->get();

        return view('admin.projects.all', compact('Projects'));
    }

    public function getAdminNew() {
        $AllCategories = Category::latest()->get();
        if ('local' === env('APP_ENV')) {
            $nextProjectId = DB::table('projects')->max('id') + 1;
        } else {
            $nextProjectId = DB::select("SHOW TABLE STATUS LIKE 'projects'")[0]->Auto_increment;
        }
        return view('admin.projects.new', compact('AllCategories', 'nextProjectId'));
    }

    public function postAdminNew(Request $r) {
        $r->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'lang' => 'required',
            'location' => 'required',
        ]);
        $ProjectData = $r->except(['_token', 'image']);
        // Generate the slug
        $ProjectData['user_id'] = auth()->user()->id;
        $ProjectData['slug'] = Str::slug($r->title, '-');
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = $ProjectData['slug'] . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/projects', $filename);
            $ProjectData['image'] = $filename;
        }
        Project::create($ProjectData);

        return redirect()->route('admin.projects.all');
    }

    public function getAdminEdit(Project $Project) {
        $AllCategories = Category::latest()->get();

        return view('admin.projects.edit', compact('Project', 'AllCategories'));
    }

    public function postAdminEdit(Request $r, Project $Project) {
        $r->validate([
            'title' => 'required',
            'content' => 'required',
            'lang' => 'required',
        ]);
        $ProjectData = $r->except(['_token']);
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = $Project['slug'] . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/projects', $filename);
            $ProjectData['image'] = $filename;
        }
        $Project->update($ProjectData);

        return redirect()->route('admin.projects.all');
    }

    public function delete(Project $Project) {
        $Project->delete();

        return redirect()->route('admin.projects.all');
    }

    public function uploadGallery(Request $r, $project_id) {
        $r->validate([
            'file' => 'required|image',
        ]);

        if ($r->hasFile('file')) {
            $file = $r->file('file');
            $filename = $project_id . '_' . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/projects_gallery', $filename);
            // Create a DB recorod with this information
            ProjectImage::create([
                'project_id' => $project_id,
                'image' => $filename,
            ]);

            return response()->json(['success' => 'File uploaded successfully', 'filename' => $filename]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);

    }
    public function deleteProjectImage($id){
        //Validate the product
        $TheProject = ProjectImage::find($id);
        if($TheProject){
            // dd($TheProject);
            $ProjectImage = $TheProject->image;
            // dd('projects_gallery/'.$ProjectImage);
                    #Delete the files
                    Storage::disk('local')->delete('projects_gallery/'.$ProjectImage);
                    #Delete the DB records
                    $TheProject->delete();
                return back()->withSuccess('The image has been deleted');
        }else{
            return back()->withErrors('This Image already deleted');
        }
    }
}
