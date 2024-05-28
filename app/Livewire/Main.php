<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $ordinance006Modal = true;

    public function render()
    {
        return view('main', ['images' => [
            'assets/img/ordinances/N006-2024/frontpage.jpg',
            'assets/img/ordinances/N006-2024/1.jpg',
            'assets/img/ordinances/N006-2024/2.jpg',
            'assets/img/ordinances/N006-2024/3.jpg',
        ]])->layout('layouts.main');
    }
}
