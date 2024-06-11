@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Project: {{ $Project->title }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('admin.projects.postEdit', $Project->id) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="col-form-label">Title</label>
                                    <input name="title" type="text" class="form-control" value="{{ $Project->title }}" required >
                                </div>
                                <img src="{{ $Project->imagePath }}" style="height: 150px;width: auto;">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Project Image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Category</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="">Choose Category</option>
                                        @forelse($AllCategories as $Category)
                                            <option @if($Project->category_id == $Category->id) selected @endif value="{{ $Category->id }}">{{ $Category->title }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Project Gallery</label>
                                    <div id="gallery-upload" class="dropzone"></div>
                                </div>
                                <div class="mr-4 row">
                                    @foreach ($Project->Gallery as $key => $Gallerys )
                                        <div class="">
                                            <img class="preview-images" src="{{$Gallerys->ImagePath}}" width="100px" alt="">
                                            <a href="{{ route('admin.projectImage.delete', $Gallerys->id) }}" class="text-danger d-block">Delete image</a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-grop">
                                    <label class="col-form-label">Description</label>
                                    <textarea name="description" class="form-control" cols="20" rows="10" maxlength="255" required>{!! $Project->description !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Content:</label>
                                    <textarea name="content" class="editor" cols="30" rows="10">{!! $Project->content !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Clients</label>
                                    <input name="clients" type="text" class="form-control" value="{{ $Project->clients }}">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Date</label>
                                    <input name="date" type="date" class="form-control" value="{{ $Project->date->format('Y-m-d') }}">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Location</label>
                                    <input name="location" type="text" class="form-control" value="{{ $Project->location }}">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">BUA</label>
                                    <input name="bua" type="text" class="form-control" {{ $Project->bua }}>
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
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tiny.cloud/1/qjf6pr8mycegjxz2i8pb1n9qh36mw3ysf8upxl72jjw6252c/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea.editor'
        });
        const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        console.log(csrfToken);
        let myDropzone = new Dropzone("div#gallery-upload", {
            url: "{{ route('admin.projects.uploadGallery' , $Project->id) }}",
            method: 'POST',
            paramName: 'file',
            maxFilesize: 10,
            maxFiles: 5,
            acceptedFiles: 'image/*',
            headers: {
            'X-CSRF-TOKEN': csrfToken
        }
        });

    </script>
@endsection
