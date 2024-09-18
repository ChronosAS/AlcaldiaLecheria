<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Main extends Component
{

    #[Layout('layouts.main')]
    public function render()
    {
        return view('main');
    }
}
