<?php

namespace App\Http\Livewire\Certifications;

use Livewire\Component;

class Certifications extends Component
{
    public function render()
    {
        return view('livewire.certifications.certifications')->layout('layouts.page');
    }
}
