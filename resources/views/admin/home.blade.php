@extends('admin.layout.master')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="row">
                        <div class="col-xl-4 col-xxl-6 col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <p class="fs-14 mb-1">Projects</p>
                                            <span class="fs-35 text-black font-w600">{{ $ProjectsCount }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-6 col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <p class="fs-14 mb-1">Services</p>
                                            <span class="fs-35 text-black font-w600">{{ $ServicesCount }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-6 col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-end">
                                        <div>
                                            <p class="fs-14 mb-1">Contact Requests</p>
                                            <span class="fs-35 text-black font-w600">{{ $ContactRequestsCount }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 pb-sm-0 pb-5">
                                    <h4 class="fs-20">Recent Contact Requests</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Source</th>
                                            <th>Service</th>
                                        </thead>
                                        <tbody>
                                            @forelse($ContactRequests as $ContactRequest)
                                                <tr>
                                                    <td>{{ $ContactRequest->id }}</td>
                                                    <td>{{ $ContactRequest->name }}</td>
                                                    <td>{{ $ContactRequest->email }}</td>
                                                    <td>{{ $ContactRequest->phone_number }}</td>
                                                    <td>{{ $ContactRequest->source }}</td>
                                                    <td>{{ $ContactRequest->Service->title ?? 'No Service' }}</td>
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
    </div>
@endsection