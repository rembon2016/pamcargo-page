@extends('adm.layout.master')

@section('title', 'Agents')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Activities - Agents</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Agents</h6>
                    <a href="{{ route('admin.ua.agent.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>
                        Add Agents
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions?</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions?</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($agents as $agent)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $agent->title }}</td>
                                        <td>{!! Utilities::decodeHtmlEntity($agent->description) !!}</td>
                                        <td>
                                            <a href="{{ route('admin.ua.agent.edit', $agent->id) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <x-delete-btn :url="route('admin.ua.agent.delete', $agent->id)" />
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
