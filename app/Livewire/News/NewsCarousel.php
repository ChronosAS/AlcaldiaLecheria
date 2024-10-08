<?php

namespace App\Livewire\News;

use Livewire\Attributes\Locked;
use Livewire\Component;

class NewsCarousel extends Component
{
    #[Locked]
    public $posts;

    public function mount($posts)
    {
        $this->posts = $posts;
    }

    public function show($post)
    {
        return redirect()->route('app.news.show',$post);
    }

    public function render()
    {
        return view('components.news.news-carousel');
    }

}
