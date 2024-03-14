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
                    <h6 class="m-0 font-weight-bold text-primary">News Form</h6>
                    <a href="{{ route('admin.ua.news.index') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ $actions['url'] }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="{{ $actions['method'] }}">

                        <div class="form-group">
                            <label for="title">Title <sup class="text-danger">*</sup></label>
                            <input
                                type="text"
                                class="form-control @error('title') is-invalid @enderror"
                                name="title"
                                id="title"
                                required
                            >
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="caption_thumbnail">Caption Thumbnail <sup class="text-danger">*</sup></label>
                            <input
                                type="text"
                                class="form-control @error('caption_thumbnail') is-invalid @enderror"
                                name="caption_thumbnail"
                                id="caption_thumbnail"
                                required
                            >
                            @error('caption_thumbnail')
                                <div class="invalid-feedback">
                                    {{ $errors->first('caption_thumbnail') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image <sup class="text-danger">*</sup></label>
                            <input
                                type="file"
                                class="form-control @error('image') is-invalid @enderror"
                                name="image"
                                id="image"
                                multiple
                                required
                            >
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $errors->first('image') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">description</label>
                            <textarea rows="10" class="form-control summernotes" data-placeholder="" name="description" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button
                                type="submit"
                                class="btn btn-success"
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
