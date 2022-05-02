<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class FreeCounselling extends Component
{
    public function render()
    {
        return view('livewire.services.free-counselling')->layout('layouts.page');
    }
}
