<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Service_Local;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller {
    public function getAll() {
        $Services = Service::where('type', 'main')->latest()->get();
        return view('services.all', compact('Services'));
    }

    public function getSingle(Service $Service) {
        return view('services.single', compact('Service'));
    }

    // Admin
    public function getAdminAll() {
        $Services = Service::latest()->get();
        return view('admin.services.all', compact('Services'));
    }

    public function getAdminNew() {
        $MainServices = Service::where('type', 'main')->get();
        return view('admin.services.new', compact('MainServices'));
    }

    public function postAdminNew(Request $r) {
        $r->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required|max:255',
            'main_category' => 'required',
        ]);

        $ServiceData = $r->except(['_token', 'image', 'is_featured']);
        // Generate the slug
        $ServiceData['user_id'] = auth()->user()->id;
        $ServiceData['slug'] = Str::slug($r->title, '-');
        $ServiceData['is_featured'] = $r->has('is_featured');
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = $ServiceData['slug'] . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/services', $filename);
            $ServiceData['image'] = $filename;
        }
        Service::create($ServiceData);

        return redirect()->route('admin.services.all');
    }

    public function getAdminEdit(Service $Service) {
        $MainServices = Service::where('type', 'main')->get();
        return view('admin.services.edit', compact('Service', 'MainServices'));
    }

    public function postAdminEdit(Request $r, Service $Service) {
        $r->validate([
            'title' => 'required',
            'description' => 'required|max:255',
            'main_category' => 'required',
        ]);

        $ServiceData = $r->except(['_token', 'image', 'is_featured']);
        // Generate the slug
        $ServiceData['slug'] = Str::slug($r->title, '-');
        $ServiceData['is_featured'] = $r->has('is_featured');
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = $Service['slug'] . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/services', $filename);
            $ServiceData['image'] = $filename;
        }
        $Service->update($ServiceData);

        return redirect()->route('admin.services.all');
    }


    public function getLocalize(Service $Service) {
        $LocalService = Service_Local::where('service_id', $Service->id)->first();
        if ($LocalService) {
            return view('admin.services.localize', compact('Service', 'LocalService'));
        }else{
            return view('admin.services.localize', compact('Service'));
        }
    }

    public function postLocalize(Request $r, Service $Service) {
        $r->validate([
            'title_value' => 'required',
            'description_value' => 'required',
            'content_value' => 'required',
        ]);
        $LocalData = $r->except(['_token']);
        $TheLocal = Service_Local::where('service_id' , $Service->id)->first();
        $LocalData['service_id'] = $Service->id;
        if($TheLocal){
            //Update
            $TheLocal->update($LocalData);
        }else{
            //Create
            Service_Local::create($LocalData);
        }
        return redirect()->route('admin.services.all');
    }
    public function delete(Service $Service) {
        $Service->delete();

        return redirect()->route('admin.services.all');
    }
}
