@extends('adm.layout.master')

@section('title', 'Email Carbon')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">General - Email Carbon</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Email Carbon</h6>
                    <a href="{{ route('admin.general.email_carbon.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>
                        Add Email Carbon
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Actions?</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Actions?</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($emailCarbons as $carbon)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $carbon->email }}</td>
                                        <td>
                                            <a href="{{ route('admin.general.email_carbon.edit', $carbon->id) }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <x-delete-btn :url="route('admin.general.email_carbon.delete', $carbon->id)" />
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
