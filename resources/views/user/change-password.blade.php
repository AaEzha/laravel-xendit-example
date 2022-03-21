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

                        <form action="{{ route('update-password.store') }}" method="post">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="old_password">Current Password</label>
                                <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                    name="old_password" id="old_password" placeholder="Your current password"
                                    value="{{ old('old_password') }}" required>
                                @error('old_password')
                                    <small id="old_password" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="Your new password"
                                    required>
                                @error('password')
                                    <small id="password" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" id="password_confirmation"
                                    placeholder="Confirm your new password" required>
                                @error('password_confirmation')
                                    <small id="password_confirmation" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
