@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Services ({{ $Services->count() }})</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display min-w850 table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Created By</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Services as $Service)
                                        <tr>
                                            <td>{{ $Service->id }}</td>
                                            <td>{{ $Service->title }}</td>
                                            <td>{{ $Service->User->name }}</td>
                                            <td>{{ $Service->created_at->format('Y-m-d h:i A') }}</td>											
                                            <td>
                                                <div class="d-flex">
                                                    <a title="Sub Services" href="{{ route('admin.subServices.all', $Service->id) }}" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-list"></i></a>
                                                    <a href="{{ route('admin.services.getEdit', $Service->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ route('admin.services.delete', $Service->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>												
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('external_scripts')
    <!-- Datatable -->
    <script src="{{ url('public/admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('public/admin/js/plugins-init/datatables.init.js') }}"></script>
@endsection