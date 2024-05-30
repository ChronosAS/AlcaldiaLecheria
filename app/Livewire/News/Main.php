<?php

namespace App\Livewire\News;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.news.main')->layout('layouts.main');
    }
}
