@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create new category</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('admin.categories.postNew') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="col-form-label">Title</label>
                                    <input name="title" type="text" class="form-control" required>
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
