@extends('app')

@section('content')

    @include('guestbook.create')
    <hr />
    @foreach($entries as $entry)
        <blockquote>
            <p>{{ $entry->content }}</p>
            <footer>Name: <cite title="Source Title">{{ $entry->name }}</cite></footer>
            <a href="guestbook/{{ $entry->id }}/edit"
               class="btn btn-xs btn-info">
                <i class="fa fa-edit"></i> Edit
            </a>
            <a href="#"
               class="btn btn-xs btn-danger">
                <i class="fa fa-edit"></i> Delete
            </a>
        </blockquote>
    @endforeach
@stop