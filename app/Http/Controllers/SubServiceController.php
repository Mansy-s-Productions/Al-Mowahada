<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SubService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubServiceController extends Controller {
    // Admin
    public function getAdminAll(Service $Service) {
        return view('admin.sub-services.single', compact('Service'));
    }

    public function getAdminNew(Service $Service) {
        return view('admin.sub-services.new', compact('Service'));
    }

    public function postAdminNew(Request $r, Service $Service) {
        $r->validate([
            'title' => 'required',
            'image' => 'required',
            'lang' => 'required',
        ]);
        $SubServiceData = $r->except(['_token', 'image']);
        // Generate the slug
        $SubServiceData['user_id'] = auth()->user()->id;
        $SubServiceData['service_id'] = $Service->id;
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = Str::slug($r->title, '-') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/sub-services', $filename);
            $SubServiceData['image'] = $filename;
        }
        SubService::create($SubServiceData);

        return redirect()->route('admin.subServices.all', $Service->id);
    }

    public function getAdminEdit(SubService $SubService) {
        return view('admin.sub-services.edit', compact('SubService'));
    }

    public function postAdminEdit(Request $r, SubService $SubService) {
        $r->validate([
            'title' => 'required',
            'lang' => 'required',
        ]);

        $SubServiceData = $r->except(['_token', 'image']);
        // Generate the slug
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = Str::slug($SubService->title, '-') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/sub-services', $filename);
            $SubServiceData['image'] = $filename;
        }
        $SubService->update($SubServiceData);

        return redirect()->route('admin.subServices.all', $SubService->Service->id);
    }

    public function delete(SubService $SubService) {
        $SubService->delete();

        return redirect()->route('admin.subServices.all', $SubService->Service->id);
    }
}
