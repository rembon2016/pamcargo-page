@extends('adm.layout.master')

@section('title', 'Customer Message')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Activities - Customer Message</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Customer Message Detail Form</h6>
                    <a href="{{ route('admin.ua.customer_message.index') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Firstname</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $customerMessage->firstname }}"
                                disabled
                            >
                        </div>

                        <div class="form-group">
                            <label>Lastname</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $customerMessage->lastname }}"
                                disabled
                            >
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $customerMessage->email }}"
                                disabled
                            >
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $customerMessage->phone }}"
                                disabled
                            >
                        </div>

                        <div class="form-group">
                            <label for="description">Message</label>
                            <textarea rows="10" class="form-control" disabled>{{ $customerMessage->message }}</textarea>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
