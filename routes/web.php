<?php

use App\Livewire\Counter;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/counter", Counter::class);
