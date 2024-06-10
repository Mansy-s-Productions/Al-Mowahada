@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="post-details">
                            <ul>
                                <li>From: {{ $ContactRequest->name }}</li>
                                <li>Email: <a href="mailto:{{ $ContactRequest->email }}">{{ $ContactRequest->email }}</a></li>
                                <li>Phone Number: {{ $ContactRequest->phone_number }}</li>
                                @if($ContactRequest->Service)
                                    <li>Related Service: {{ $ContactRequest->Service->title }}</li>
                                @else
                                    <li>Service: No related service</li>
                                @endif
                                <li>Date: {{ $ContactRequest->created_at->format('Y-m-d h:i A') }}</li>
                            </ul>
                            <hr>
                            <h3 class="mb-2 text-black">Message content</h3>
                            <div>{{ $ContactRequest->message }}</div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection