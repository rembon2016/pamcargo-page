@extends('adm.layout.master')

@section('title', 'User')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Activities - User</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Form</h6>
                    <a href="{{ route('admin.ua.user.index') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ $actions['url'] }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="{{ $actions['method'] }}">

                        <div class="form-group">
                            <label for="name">Name <sup class="text-danger">*</sup></label>
                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                id="name"
                                required
                            >
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email <sup class="text-danger">*</sup></label>
                            <input
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                id="email"
                                required
                            >
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="user_type">User Type <sup class="text-danger">*</sup></label>
                            <select name="user_type" id="user_type" class="form-control @error('user_type') is-invalid @enderror">
                                <option value="" selected hidden></option>
                                <option value="">User News</option>
                                <option value="">User Uploader</option>
                            </select>
                            @error('user_type')
                                <div class="invalid-feedback">
                                    {{ $errors->first('user_type') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password <sup class="text-danger">*</sup></label>
                            <input
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                id="password"
                                required
                            >
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea rows="10" class="form-control summernotes" data-placeholder="5230 Penfield Ave, California State University, Los Angeles" name="address" required>{{ old('address') }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $errors->first('address') }}
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
