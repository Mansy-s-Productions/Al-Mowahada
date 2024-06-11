@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Article: {{ $Blog->title }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('admin.blogs.postEdit', $Blog->id) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="col-form-label">Title</label>
                                    <input name="title" type="text" class="form-control" value="{{ $Blog->title }}" required >
                                </div>
                                <img src="{{ $Blog->imagePath }}" style="height: 150px;width: auto;">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Article Image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" cols="30" rows="10" maxlength="255" required>{{ $Blog->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Content:</label>
                                    <textarea name="content" class="editor" cols="30" rows="10">{!! $Blog->content !!}</textarea>
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
