@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Projects ({{ $Projects->count() }})</h4>
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
                                        <th>Added</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Projects as $Project)
                                        <tr>
                                            <td>{{ $Project->id }}</td>
                                            <td>{{ $Project->title }}</td>
                                            <td>{{ $Project->User->name }}</td>
                                            <td>{{ $Project->date->format('Y-m-d h:i A') }}</td>											
                                            <td>{{ $Project->created_at->format('Y-m-d h:i A') }}</td>											
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.projects.getEdit', $Project->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ route('admin.projects.delete', $Project->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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