@extends('adm.layout.master')

@section('title', 'Slider')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">General - Slider</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Slider</h6>
                    <a href="{{ route('admin.general.slider.create') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>
                        Add Slider
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
                                    <th>Image</th>
                                    <th>Actions?</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions?</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{!! Utilities::decodeHtmlEntity($slider->description) !!}</td>
                                        <td>
                                            <!-- Button trigger Image -->
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#sliderImage{{$loop->index}}">
                                                View Image
                                            </button>

                                            <!-- Show Detail Image -->
                                            <div class="modal fade" id="sliderImage{{$loop->index}}" tabindex="-1"
                                                aria-labelledby="sliderImageLabel{{$loop->index}}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="sliderImageLabel{{$loop->index}}">{{ $slider->title }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="{{ $slider->image_url }}" class="img-thumbnail"
                                                                alt="{{ $slider->title }}" style="width: 100%; height: 300px; object-fit: cover;" />
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
                                            @if ($slider->is_active)
                                                <a href="{{ route('admin.general.slider.set_usage_status', ['id' => $slider->id, 's' => 'inactive']) }}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('admin.general.slider.set_usage_status', ['id' => $slider->id, 's' => 'active']) }}" class="btn btn-warning btn-sm">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            @endif
                                            <a href="{{ route('admin.general.slider.edit', $slider->id) }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <x-delete-btn :url="route('admin.general.slider.delete', $slider->id)" />
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
