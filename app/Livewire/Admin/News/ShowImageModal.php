<?php

namespace App\Livewire\Admin\News;

use App\Models\Media;
use Livewire\Component;

class ShowImageModal extends Component
{
    public $image;
    public $showImage = false;

    public function mount(Media $media)
    {
        $this->image = $media;
    }

    public function render()
    {
        return view('livewire.admin.news.show-image-modal');
    }
}
