<?php

namespace App\Livewire\News;

use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.news.index')->layout('layouts.admin',['header'=>'Noticias']);
    }
}
