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
                                                    <a href="{{ route('admin.projects.getLocalize', $Project->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-language"></i></a>
                                                    <a href="{{ route('admin.projects.getEdit', $Project->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a type="button" class="btn btn-danger shadow btn-xs sharp" data-toggle="modal" data-target="#exampleModal-{{$Project->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                    <div class="modal fade" id="exampleModal-{{$Project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Project</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are You Sure For Delete This Project
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <a href="{{ route('admin.projects.delete', $Project->id) }}" class="btn btn-danger ">Delete</i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
