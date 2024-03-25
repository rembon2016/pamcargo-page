@extends('adm.layout.master')

@section('title', 'Office')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Activities - Office</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Office</h6>
                    <a href="{{ route('admin.ua.office.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>
                        Add Office
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Office Name</th>
                                    <th>Country</th>
                                    <th>Continent</th>
                                    <th>Image</th>
                                    <th>Actions?</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Office Name</th>
                                    <th>Country</th>
                                    <th>Continent</th>
                                    <th>Image</th>
                                    <th>Actions?</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($offices as $office)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $office->name }}</td>
                                        <td>{{ $office->country->name }}</td>
                                        <td>{{ $office->continent->region }}</td>
                                        <td>
                                            <!-- Button trigger Image -->
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#officeImage{{ $loop->index }}">
                                                View Image
                                            </button>

                                            <!-- Show Detail Image -->
                                            <div class="modal fade" id="officeImage{{ $loop->index }}" tabindex="-1"
                                                aria-labelledby="officeImageLabel{{ $loop->index }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="officeImageLabel{{ $loop->index }}">
                                                                {{ $office->name.' - Image' }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="{{ $office->image_url }}" class="img-thumbnail"
                                                                alt="{{ $office->name.' - Image' }}"
                                                                style="width: 100%; height: 300px;" />
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.ua.office.edit', $office->id) }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <x-delete-btn :url="route('admin.ua.office.delete', $office->id)" />
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
