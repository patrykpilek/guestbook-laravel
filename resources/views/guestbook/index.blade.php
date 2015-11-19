@extends('app')

@section('content')

    @include('errors.list')
    @include('partials.success')
    @include('guestbook.create')

    <hr />
    @foreach($entries as $entry)
        <blockquote>
            <p><a href="{{action('GuestbookController@show', [$entry->id])}}">{{ $entry->content }}</a></p>
            <footer>Posted on {{ $entry->created_at->format('F j, Y') }} by <cite title="Source Title">{{ $entry->name }}</cite></footer>
            <a href="guestbook/{{ $entry->id }}/edit" class="btn btn-xs btn-info">
                <i class="fa fa-edit"></i> Edit
            </a>
            <a href="{{action('GuestbookController', [$entry->id])}}" class="btn btn-xs btn-danger">
                <i class="fa fa-edit"></i> Delete
            </a>
        </blockquote>
    @endforeach
@endsection