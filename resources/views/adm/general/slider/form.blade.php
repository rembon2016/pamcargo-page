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
                    <h6 class="m-0 font-weight-bold text-primary">Slider Form</h6>
                    <a href="" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ $actions['url'] }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="{{ $actions['method'] }}">

                        <div class="form-group">
                            <div>
                                <img src="{{ $banner->fileStorage->url ?? asset('admin/img/1280x601.png') }}" class="img-thumbnail mb-3" alt="Image Placeholder" id="showImage" style="width: 300px; height: 150px">
                            </div>
                            <input
                                type="file"
                                class="form-control @error('thumbnail') is-invalid @enderror"
                                name="thumbnail"
                                id="image"
                            >
                            @error('thumbnail')
                                <div class="invalid-feedback">
                                    {{ $errors->first('thumbnail') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                {{ $actions['act'] }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result).css({
                        'width': '300px',
                        'height': '150px'
                    });
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endpush
