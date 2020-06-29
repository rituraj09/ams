<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('official')->user();

    //dd($users);

    return view('official.home');
})->name('home');

