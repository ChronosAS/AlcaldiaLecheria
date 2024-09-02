<?php

namespace App\Livewire\VDV;

use Livewire\Component;

class Gallery extends Component
{
    public $galleryModal = false;
    public $currentImage;

    public function openModal($index)
    {
        $this->currentImage = $index;
        $this->galleryModal = !$this->galleryModal;
    }

    public function render()
    {
        return view('livewire.v-d-v.gallery');
    }
}
