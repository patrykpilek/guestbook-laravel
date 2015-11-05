<h1>Write a new message</h1>
<div class="row">
    <div class="col-lg-6">
        <form action="{{ route('guestbook.store') }}" role="form" method="post" class="form-vertical">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @include('guestbook.form')
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Post</button>
            </div>
        </form>
    </div>
</div>