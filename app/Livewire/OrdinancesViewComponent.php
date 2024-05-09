<?php

namespace App\Livewire;

use Livewire\Component;

class OrdinancesViewComponent extends Component
{
    public function render()
    {
        return view('livewire.ordinances-view-component')->layout('layouts.main');
    }
}
