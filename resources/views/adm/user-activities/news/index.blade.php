@extends('adm.layout.master')

@section('title', 'News')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Activities - News</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">News</h6>
                    <a href="{{ route('admin.ua.news.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>
                        Add News
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Caption</th>
                                    <th>Images</th>
                                    <th>Actions?</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Caption</th>
                                    <th>Images</th>
                                    <th>Actions?</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($news as $news)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $news->title }}</td>
                                        <td>{{ $news->caption }}</td>
                                        <td>
                                            <!-- Button trigger Image -->
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#newsImage{{ $loop->index }}">
                                                View Image
                                            </button>

                                            <!-- Show Detail Image -->
                                            <div class="modal fade" id="newsImage{{ $loop->index }}" tabindex="-1"
                                                aria-labelledby="newsImageLabel{{ $loop->index }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="newsImageLabel{{ $loop->index }}">
                                                                {{ $news->title }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div id="carouselExampleControls" class="carousel slide"
                                                                data-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    @foreach ($news->image_urls as $key => $url)
                                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                                            <img src="{{ $url }}" class="d-block"
                                                                                alt="{{ $news->title }}" style="width: 100%; height: 300px;">
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <button class="carousel-control-prev" type="button"
                                                                    data-target="#carouselExampleControls"
                                                                    data-slide="prev">
                                                                    <span class="carousel-control-prev-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button"
                                                                    data-target="#carouselExampleControls"
                                                                    data-slide="next">
                                                                    <span class="carousel-control-next-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </button>
                                                            </div>
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
                                            <a href="{{ route('admin.ua.news.edit', $news->id) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <x-delete-btn :url="route('admin.ua.news.delete', $news->id)" />
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
