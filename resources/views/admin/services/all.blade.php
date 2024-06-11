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
                                        <th>Type</th>
                                        <th>Main Service</th>
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
                                            <td>{{ ucfirst($Service->type) }}</td>
                                            <td>{{ $Service->Parent->title  ?? "N/A"}}</td>
                                            <td>{{ $Service->User->name }}</td>
                                            <td>{{ $Service->created_at->format('Y-m-d h:i A') }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a title="Translate" href="{{ route('admin.services.getLocalize', $Service->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-language"></i></a>
                                                    <a title="Edit" href="{{ route('admin.services.getEdit', $Service->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a title="Delete" type="button" class="btn btn-danger shadow btn-xs sharp" data-toggle="modal" data-target="#exampleModal-{{$Service->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                    <div class="modal fade" id="exampleModal-{{$Service->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Service</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are You Sure For Delete This Service
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <a href="{{ route('admin.services.delete', $Service->id) }}" class="btn btn-danger ">Delete</i></a>
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
