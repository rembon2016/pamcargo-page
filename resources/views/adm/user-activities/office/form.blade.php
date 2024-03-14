@extends('adm.layout.master')

@section('title', 'Office')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Activities - Office</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Office Form</h6>
                    <a href="{{ route('admin.ua.office.index') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ $actions['url'] }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="{{ $actions['method'] }}">

                        <div class="form-group">
                            <label for="country_name">Country Name <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control @error('country_name') is-invalid @enderror"
                                name="country_name" id="country_name" required>
                            @error('country_name')
                                <div class="invalid-feedback">
                                    {{ $errors->first('country_name') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="continent">Continent <sup class="text-danger">*</sup></label>
                            <select name="continent" id="continent"
                                class="form-control @error('continent') is-invalid @enderror">
                                <option value="" selected hidden></option>
                                <option value="">User News</option>
                                <option value="">User Uploader</option>
                            </select>
                            @error('continent')
                                <div class="invalid-feedback">
                                    {{ $errors->first('continent') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="office_name">Office Name <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control @error('office_name') is-invalid @enderror"
                                name="office_name" id="office_name" required>
                            @error('office_name')
                                <div class="invalid-feedback">
                                    {{ $errors->first('office_name') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image <sup class="text-danger">*</sup></label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                id="image" multiple required>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $errors->first('image') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea rows="10" class="form-control summernotes" data-placeholder="" name="address" required>{{ old('address') }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="longitude">Longitude <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control @error('longitude') is-invalid @enderror"
                                name="longitude" id="longitude" required>
                            @error('longitude')
                                <div class="invalid-feedback">
                                    {{ $errors->first('longitude') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="latitude">Latitude <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control @error('latitude') is-invalid @enderror"
                                name="latitude" id="latitude" required>
                            @error('latitude')
                                <div class="invalid-feedback">
                                    {{ $errors->first('latitude') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="contact_name">Contact Name <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('contact_name') is-invalid @enderror"
                                        name="contact_name[0]" id="contact_name" required>
                                    @error('contact_name')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('contact_name') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('contact_name') is-invalid @enderror"
                                        name="contact_name[1]" id="contact_name">
                                    @error('contact_name')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('contact_name') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telp_num">Telp <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('telp_num') is-invalid @enderror"
                                        name="telp_num[0]" id="telp_num" required>
                                    @error('telp_num')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('telp_num') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('telp_num') is-invalid @enderror"
                                        name="telp_num[1]" id="telp_num">
                                    @error('telp_num')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('telp_num') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fax">Fax <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('fax') is-invalid @enderror"
                                        name="fax[0]" id="fax" required>
                                    @error('fax')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('fax') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('fax') is-invalid @enderror"
                                        name="fax[1]" id="fax">
                                    @error('fax')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('fax') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mob">Mob <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('mob') is-invalid @enderror"
                                        name="mob[0]" id="mob" required>
                                    @error('mob')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('mob') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('mob') is-invalid @enderror"
                                        name="mob[1]" id="mob">
                                    @error('mob')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('mob') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email[0]" id="email" required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email[1]" id="email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="website">Website <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('website') is-invalid @enderror"
                                        name="website[0]" id="website" required>
                                    @error('website')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('website') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('website') is-invalid @enderror"
                                        name="website[1]" id="website">
                                    @error('website')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('website') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                {{ $actions['act'] }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
