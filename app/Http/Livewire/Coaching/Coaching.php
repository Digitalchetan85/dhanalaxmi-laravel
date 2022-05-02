<?php

namespace App\Http\Livewire\Coaching;

use Livewire\Component;

class Coaching extends Component
{
    public function render()
    {
        return view('livewire.coaching.coaching')->layout('layouts.page');
    }
}
