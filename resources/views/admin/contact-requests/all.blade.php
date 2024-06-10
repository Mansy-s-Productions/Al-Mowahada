@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Patient</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display min-w850 table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Service</th>
                                        <th>Source</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($ContactRequests as $ContactRequest)
                                        <tr>
                                            <td><a href="{{ route('admin.contactRequests.single' , $ContactRequest->id) }}">{{ $ContactRequest->id }}</a></td>
                                            <td>{{ $ContactRequest->name }}</td>
                                            <td>{{ $ContactRequest->email }}</td>
                                            <td>{{ $ContactRequest->phone_number }}</td>
                                            <td>{{ $ContactRequest->Service->title ?? 'No Service' }}</td>
                                            <td>{{ $ContactRequest->source }}</td>
                                            <td>{{ $ContactRequest->shortMessage }}</td>
                                            <td>{{ $ContactRequest->created_at->format('Y-m-d h:i A') }}</td>
                                            <td><a class="btn btn-sm" href="{{ route('admin.contactRequests.single' , $ContactRequest->id) }}">Details</a></td>										
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