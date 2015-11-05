<?php

Route::get('/', function () {
    return redirect('/guestbook');
});

Route::resource('/guestbook', 'GuestbookController');
