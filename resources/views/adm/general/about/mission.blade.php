@extends('adm.layout.master')

@section('title', 'Mission')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">General - Mission</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mission Form</h6>
                    {{-- <a href="{{ route('admin.general.slider.index') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i>
                    </a> --}}
                </div>
                <div class="card-body">
                    <form action="{{ $actions['url'] }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="{{ $actions['method'] }}">

                        <div class="form-group">
                            <label for="title">Description <sup class="text-danger">*</sup></label>
                            <textarea rows="10" class="form-control summernotes" data-placeholder="" name="description" required>{{ old('description', @$about->mission_content) }}</textarea>
                            @error('title')
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
