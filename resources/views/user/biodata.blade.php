@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $title }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('biodata.store') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                            aria-describedby="name" placeholder="Your name"
                                            value="{{ old('name', $data->name ?? '') }}" required>
                                        @error('name')
                                            <small id="name" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                            aria-describedby="email" placeholder="Your email address"
                                            value="{{ old('email', $data->email ?? '') }}" required>
                                        @error('email')
                                            <small id="email" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number"
                                            aria-describedby="phone_number" placeholder="Your phone number or WhatsApp"
                                            value="{{ old('phone_number', $data->biodata->phone_number ?? '') }}" required>
                                        @error('phone_number')
                                            <small id="phone_number" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="date_of_birth">Date of Birth</label>
                                        <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" id="date_of_birth"
                                            aria-describedby="date_of_birth"
                                            value="{{ old('date_of_birth', $data->biodata->date_of_birth ?? '') }}" required>
                                        @error('date_of_birth')
                                            <small id="date_of_birth" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="religion_id">Religion</label>
                                        <select class="form-control @error('religion_id') is-invalid @enderror" name="religion_id" id="religion_id"
                                            aria-describedby="religion_id" required>
                                            <option value="">Choose your religion</option>
                                            @foreach ($religions as $religion)
                                                <option value="{{ $religion->getKey() }}"
                                                    @if ($religion->getKey() == old('religion_id', $data->biodata->religion_id ?? '')) selected @endif>
                                                    {{ $religion->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('religion_id')
                                            <small id="religion_id" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="zip_code">Zip Code</label>
                                        <input type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" id="zip_code"
                                            aria-describedby="zip_code" placeholder="Your zip code"
                                            value="{{ old('zip_code', $data->biodata->zip_code ?? '') }}" required>
                                        @error('zip_code')
                                            <small id="zip_code" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
