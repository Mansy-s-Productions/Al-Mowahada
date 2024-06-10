@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Service: {{ $Service->title }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('admin.services.postEdit', $Service->id) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="col-form-label">Title</label>
                                    <input name="title" type="text" class="form-control" value="{{ $Service->title }}" required >
                                </div>
                                <div class="form-grop">
                                    <label class="col-form-label">Description</label>
                                    <textarea name="description" class="form-control" cols="20" rows="10" maxlength="255" required>{{ $Service->description }}</textarea>
                                </div>
                                <img src="{{ $Service->imagePath }}" style="height: 150px;width: auto;">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Service Image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Upper Content:</label>
                                    <textarea name="upper_content" class="editor" cols="30" rows="10">{!! $Service->upper_content !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Lower Content:</label>
                                    <textarea name="lower_content" class="editor" cols="30" rows="10">{!! $Service->lower_content !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Language <span class="text-danger">*</span></label>
                                    <select class="form-control" name="lang" required>
                                        <option @if($Service->lang == 'ar') selected @endif  value="ar">Arabic</option>
                                        <option @if($Service->lang == 'en') selected @endif value="en">English</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" @if($Service->is_featured) checked @endif class="mr-2" name="is_featured">
                                    <label class="col-form-label">Featured?</label>
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
@section('external_scripts')
    <script src="https://cdn.tiny.cloud/1/qjf6pr8mycegjxz2i8pb1n9qh36mw3ysf8upxl72jjw6252c/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: 'textarea.editor'
        });
    </script>
@endsection
