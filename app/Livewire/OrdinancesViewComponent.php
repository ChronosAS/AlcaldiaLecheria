<?php

namespace App\Livewire;

use Livewire\Component;

class OrdinancesViewComponent extends Component
{
    public $ordinance006Modal= false;

    public $images = [
        'assets/img/ordinances/N006-2024/frontpage.jpg',
        'assets/img/ordinances/N006-2024/1.jpg',
        'assets/img/ordinances/N006-2024/2.jpg',
        'assets/img/ordinances/N006-2024/3.jpg',
    ];

    public function render()
    {
        return view('livewire.ordinances-view-component')->layout('layouts.main');
    }
}
