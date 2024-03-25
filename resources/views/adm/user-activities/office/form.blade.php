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
                            <select name="country_id" id="country_id"
                                class="form-control @error('country_id') is-invalid @enderror">
                                <option value="" selected hidden></option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" @selected(old('country_id', @$office->country_id) == $country->id)>
                                        {{ $country->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('country_id')
                                <div class="invalid-feedback">
                                    {{ $errors->first('country_id') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="continent_id">Continent <sup class="text-danger">*</sup></label>
                            <select name="continent_id" id="continent_id"
                                class="form-control @error('continent_id') is-invalid @enderror">
                                <option value="" selected hidden></option>
                                @foreach ($continents as $continent)
                                    <option value="{{ $continent->id }}" @selected(old('continent_id', @$office->continent_id) == $continent->id)>
                                        {{ $continent->region }}
                                    </option>
                                @endforeach
                            </select>
                            @error('continent_id')
                                <div class="invalid-feedback">
                                    {{ $errors->first('continent_id') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Office Name <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" id="name" value="{{ old('name', @$office->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image_file">
                                @if(@$office)
                                    Image
                                @else
                                    Image <sup class="text-danger">*</sup>
                                @endif
                            </label>
                            <input type="file" class="form-control @error('image_file') is-invalid @enderror" name="image_file"
                                id="image_file" {{ @$office ? '' : 'required' }}>
                            @error('image_file')
                                <div class="invalid-feedback">
                                    {{ $errors->first('image_file') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea rows="10" class="form-control summernotes" data-placeholder="" name="address" required>{{ old('address', @$office->address) }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="longitude">Longitude <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control @error('longitude') is-invalid @enderror"
                                name="longitude" id="longitude" value="{{ old('longitude', @$office->longitude) }}" required>
                            @error('longitude')
                                <div class="invalid-feedback">
                                    {{ $errors->first('longitude') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="latitude">Latitude <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control @error('latitude') is-invalid @enderror"
                                name="latitude" id="latitude" value="{{ old('latitude', @$office->latitude) }}" required>
                            @error('latitude')
                                <div class="invalid-feedback">
                                    {{ $errors->first('latitude') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="first_contact_name">Contact Name <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('first_contact_name') is-invalid @enderror"
                                        name="first_contact_name" id="first_contact_name" value="{{ old('first_contact_name', @$office->first_contact_name) }}" required>
                                    @error('first_contact_name')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('first_contact_name') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('second_contact_name') is-invalid @enderror"
                                        name="second_contact_name" value="{{ old('second_contact_name', @$office->second_contact_name) }}" id="second_contact_name">
                                    @error('second_contact_name')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('second_contact_name') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="first_telp_num">Telp <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('first_telp_num') is-invalid @enderror"
                                        name="first_telp_num" id="first_telp_num" value="{{ old('first_telp_num', @$office->first_telp_num) }}" required>
                                    @error('first_telp_num')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('first_telp_num') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('second_telp_num') is-invalid @enderror"
                                        name="second_telp_num" value="{{ old('second_telp_num', @$office->second_telp_num) }}" id="second_telp_num">
                                    @error('second_telp_num')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('second_telp_num') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="first_fax">Fax <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('first_fax') is-invalid @enderror"
                                        name="first_fax" id="first_fax" value="{{ old('first_fax', @$office->first_fax) }}" required>
                                    @error('first_fax')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('first_fax') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('second_fax') is-invalid @enderror"
                                        name="second_fax" value="{{ old('second_fax', @$office->second_fax) }}" id="second_fax">
                                    @error('second_fax')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('second_fax') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="first_mob">Mob <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('first_mob') is-invalid @enderror"
                                        name="first_mob" id="first_mob" value="{{ old('first_mob', @$office->first_mob) }}" required>
                                    @error('first_mob')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('first_mob') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('second_mob') is-invalid @enderror"
                                        name="second_mob" value="{{ old('second_fax', @$office->second_fax) }}" id="second_mob">
                                    @error('second_mob')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('second_mob') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="first_email">Email <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="email" class="form-control @error('first_email') is-invalid @enderror"
                                        name="first_email" id="first_email" value="{{ old('first_email', @$office->first_email) }}" required>
                                    @error('first_email')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('first_email') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('second_email') is-invalid @enderror"
                                        name="second_email" value="{{ old('second_email', @$office->second_email) }}" id="second_email">
                                    @error('second_email')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('second_email') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="first_website">Website <sup class="text-danger">* (max 2 field)</sup></label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('first_website') is-invalid @enderror"
                                        name="first_website" id="first_website" value="{{ old('first_website', @$office->first_website) }}" required>
                                    @error('first_website')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('first_website') }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('second_website') is-invalid @enderror"
                                        name="second_website" value="{{ old('second_website', @$office->second_website) }}" id="second_website">
                                    @error('second_website')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('second_website') }}
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
