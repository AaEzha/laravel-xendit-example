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

                    <p>
                        <a href="{{ route('instagram.id-finder') }}" class="btn btn-primary">ID Finder</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
