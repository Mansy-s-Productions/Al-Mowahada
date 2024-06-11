@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card h-auto">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Default Data (EN)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <b>Title:</b> <br>  {{$Blog->title}}
                    </div>
                    <div class="card-body">
                        <b>Description:</b> <br>  {{$Blog->description}}
                    </div>
                    <div class="card-body">
                        <b>Content:</b> <br> {!!$Blog->content !!}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Localize BLog (AR)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('admin.blogs.postLocalize', $Blog->id) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="col-form-label">Title <span class="text-danger">*</span></label>
                                    <input name="title_value" type="text" class="form-control" required value="@if (isset($LocalBlog)){{$LocalBlog->title_value}}@endif">
                                </div>
                                <div class="from-group">
                                    <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                    <textarea name="description_value" class="form-control" cols="30" rows="10" maxlength="255" required>@if (isset($LocalBlog)){{$LocalBlog->description_value}}@endif</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Content: <span class="text-danger">*</span></label>
                                    <textarea name="content_value" class="editor" cols="30" rows="10" type="text">@if (isset($LocalBlog)){{$LocalBlog->content_value}}@endif</textarea>
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
