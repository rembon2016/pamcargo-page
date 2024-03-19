@extends('adm.layout.master')

@section('title', 'Widget Quick Access')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">General - Widget Quick Access</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Widget Quick Access</h6>
                    <a href="{{ route('admin.general.widget.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>
                        Add Widget Quick Access
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Url</th>
                                    <th>Description</th>
                                    <th>Actions?</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Url</th>
                                    <th>Description</th>
                                    <th>Actions?</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($widgets as $widget)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $widget->title }}</td>
                                        <td>{{ $widget->url }}</td>
                                        <td>{!! Utilities::decodeHtmlEntity($widget->description) !!}</td>
                                        <td>
                                            @if ($widget->is_active)
                                                <a href="{{ route('admin.general.widget.set_usage_status', ['id' => $widget->id, 's' => 'inactive']) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('admin.general.widget.set_usage_status', ['id' => $widget->id, 's' => 'active']) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            @endif
                                            <a href="{{ route('admin.general.widget.edit', $widget->id) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <x-delete-btn :url="route('admin.general.widget.delete', $widget->id)" />
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
