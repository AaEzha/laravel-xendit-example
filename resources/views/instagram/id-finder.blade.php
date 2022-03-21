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

                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="{{ route('instagram.index') }}">Instagram</a>
                            <span class="breadcrumb-item active">ID Finder</span>
                        </nav>

                        <form action="{{ route('instagram.id-finder-post') }}" method="post">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="Instagram username">
                            </div>

                            <button type="submit" class="btn btn-primary">Find ID</button>
                        </form>

                        <div class="mb-3">
                            @yield('hasil')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
