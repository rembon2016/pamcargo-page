@extends('adm.layout.master')

@section('title', 'Continent')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Activities - Continent</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Continent</h6>
                    <a href="{{ route('admin.ua.continent.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>
                        Add Continent
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Region</th>
                                    <th>Description</th>
                                    <th>Actions?</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Region</th>
                                    <th>Description</th>
                                    <th>Actions?</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($continents as $continent)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $continent->region }}</td>
                                        <td>{!! Utilities::decodeHtmlEntity($continent->description) !!}</td>
                                        <td>
                                            <a href="{{ route('admin.ua.continent.edit', $continent->id) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <x-delete-btn :url="route('admin.ua.continent.delete', $continent->id)" />
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
