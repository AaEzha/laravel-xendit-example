@extends('instagram.id-finder')

@section('hasil')
    <hr class="mx-3">
    <p>Instagram ID: <strong>{{ $hasil->graphql->user->id }}</strong></p>
    <p>Username: <strong>{{ $hasil->graphql->user->username }}</strong></p>
    <p>Full name: <strong>{{ $hasil->graphql->user->full_name }}</strong></p>
    <p>Biography: <strong>{{ $hasil->graphql->user->biography }}</strong></p>
@endsection
