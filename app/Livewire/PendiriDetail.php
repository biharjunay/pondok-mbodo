<?php

namespace App\Livewire;

use Livewire\Component;

class PendiriDetail extends Component
{
    public string $id;

    public function mount($id) {
        $this->id = $id;

    }
    public function render()
    {
        return view('livewire.pendiri-detail', [$id = $this->id]);
    }
}
