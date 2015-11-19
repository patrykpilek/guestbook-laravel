@extends('app')

@section('content')

    <h1>{{ $entries->content }}</h1>
    <h5>Posted by - {{ $entries->name }}</h5>

@endsection