<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 10;
    public int $number;

    public function increment(int $i)
    {
        $this->count += $i;
    }

    public function render()
    {
        return view("livewire.counter");
    }
}
