<?php

use App\Livewire\Counter;
use App\Livewire\BirdForm;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/counter", Counter::class);

Route::get("/bird-form", BirdForm::class);
