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
                    <h6 class="m-0 font-weight-bold text-primary">Customer Message</h6>
                    {{-- <a href="{{ route('admin.ua.news.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>
                        Add News
                    </a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Is Read?</th>
                                    <th>Actions?</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Is Read?</th>
                                    <th>Actions?</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($customerMessages as $customerMessage)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $customerMessage->firstname }}</td>
                                        <td>{{ $customerMessage->lastname }}</td>
                                        <td>{{ $customerMessage->email }}</td>
                                        <td>
                                            @if($customerMessage->is_read)
                                                <span class="badge badge-success">Has been read</span>
                                            @else
                                                <span class="badge badge-warning">Unread</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!$customerMessage->is_read)
                                                <a class="btn btn-success btn-sm" href="{{ route('admin.ua.customer_message.read', $customerMessage->id) }}">
                                                    <i class="fa fa-book-reader"></i>
                                                </a>
                                            @endif
                                            <a class="btn btn-primary btn-sm" href="{{ route('admin.ua.customer_message.show', $customerMessage->id) }}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <x-delete-btn :url="route('admin.ua.customer_message.delete', $customerMessage->id)" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
