@extends('twitter.id-finder')

@section('hasil')
    <hr class="mx-3">
    <p>Twitter ID: <strong>{{ $hasil->data->id }}</strong></p>
    <p>Username: <strong>{{ $hasil->data->username }}</strong></p>
    <p>Full name: <strong>{{ $hasil->data->name }}</strong></p>
@endsection
