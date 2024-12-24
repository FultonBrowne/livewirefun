<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{
    public int $count = 0;
    public string $notes = '';
    
    public function render()
    {
        return view("livewire.bird-form", [
            'entries' => Entry::latest()->get()
        ]);
    }

    public function submit()
    {
        Entry::create([
            "notes" => $this->notes,
            "bird_count" => $this->count,
        ]);
    }
}
