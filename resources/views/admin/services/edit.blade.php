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
                                    <label class="col-form-label">Content:</label>
                                    <textarea name="content" class="editor" cols="30" rows="10">{!! $Service->content !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Category <span class="text-danger">*</span></label>
                                    <select class="form-control" name="main_category" required>
                                        <option @if($Service->main_category == 'contracting-service') selected @endif value="contracting-service">Contracting Service</option>
                                        <option @if($Service->main_category == 'trading-service') selected @endif value="trading-service">Trading Service</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Type <span class="text-danger">*</span></label>
                                    <select class="form-control" name="type" id="type" required>
                                        <option @if($Service->type == 'main') selected @endif value="main">Main Service</option>
                                        <option @if($Service->type == 'sub') selected @endif value="sub">Sub Service</option>
                                    </select>
                                </div>
                                <div class="form-group main-services" @if($Service->type == 'main')  style="display: none" @endif>
                                    <label class="form-control-label">Main Service <span class="text-danger">*</span></label>
                                    <select class="form-control" name="parent_id">
                                        <option value="">Select main</option>
                                        @forelse ($MainServices as $MainService)
                                            <option @if($Service->parent_id == $MainService->id) selected @endif value="{{$MainService->id}}">{{$MainService->title}}</option>
                                        @empty
                                            <p>Add main services</p>
                                        @endforelse
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

        $('#type').change(function() {
            if ($(this).val() === 'sub') {
                    $('.main-services').slideDown('fast');
                    $('[name="parent_id"]').val('');
                } else if ($(this).val() === 'main') {
                    $('.main-services').slideUp('fast');
                    $('[name="parent_id"]').val('');  // Corrected selector for name attribute
                }
            });
    </script>
@endsection
