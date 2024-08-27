<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class MainPageModal extends Component
{
    public $ordinanceModal = false;

    #[On('show-ordinance')]
    public function toggleModal()
    {
        $this->ordinanceModal = !$this->modalOpen;
    }

    public function render()
    {
        return view('livewire.main-page-modal');
    }
}
