<?php

namespace App\Livewire\News;

use Livewire\Component;

class NewsCarousel extends Component
{
   public $posts;

    public function mount($posts)
    {
        $this->posts = collect($posts);
    }

    public function render()
    {
        return view('components.news.news-carousel');
    }

}