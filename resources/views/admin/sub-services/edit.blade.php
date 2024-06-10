@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update {{ $SubService->title }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('admin.subServices.postEdit', $SubService->id) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="col-form-label">Title</label>
                                    <input name="title" type="text" class="form-control" value="{{ $SubService->title }}" required >
                                </div>
                                <img src="{{ $SubService->imagePath }}" style="height: 150px;width: auto;">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Image Description</label>
                                    <input name="image_description" type="text" value="{{ $SubService->image_description }}" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Description:</label>
                                    <textarea name="description" class="form-control" cols="30" rows="10">{{ $SubService->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Language <span class="text-danger">*</span></label>
                                    <select class="form-control" name="lang" required>
                                        <option @if($SubService->lang == 'ar') selected @endif  value="ar">Arabic</option>
                                        <option @if($SubService->lang == 'en') selected @endif value="en">English</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
