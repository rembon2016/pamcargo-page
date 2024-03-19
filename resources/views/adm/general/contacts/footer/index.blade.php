@extends('adm.layout.master')

@section('title', 'Footer Contact')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">General - Footer Contact</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Footer Contact</h6>
                    <a href="{{ route('admin.general.contact.footer.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>
                        Add Footer Contact
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image/Icon</th>
                                    <th>Description</th>
                                    <th>Actions?</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image/Icon</th>
                                    <th>Description</th>
                                    <th>Actions?</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($footerContacts as $footer)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $footer->name }}</td>
                                        <td>
                                            @if (!is_null($footer->icon))
                                                <!-- Button trigger Image -->
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                    data-target="#footerContactImage{{ $loop->index }}">
                                                    View Image
                                                </button>

                                                <!-- Show Detail Image -->
                                                <div class="modal fade" id="footerContactImage{{ $loop->index }}"
                                                    tabindex="-1"
                                                    aria-labelledby="footerContactImageLabel{{ $loop->index }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="footerContactImageLabel{{ $loop->index }}">
                                                                    {{ $footer->name }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ $footer->icon }}" class="img-thumbnail"
                                                                    alt="{{ $footer->name }}"
                                                                    style="width: 100%; height: 300px;" />
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <button class="btn btn-danger btn-sm" disabled>No Image/Icon</button>
                                            @endif
                                        </td>
                                        <td>{!! Utilities::decodeHtmlEntity($footer->description) !!}</td>
                                        <td>
                                            <a href="{{ route('admin.general.contact.footer.edit', $footer->id) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <x-delete-btn :url="route('admin.general.contact.footer.delete', $footer->id)" />
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
