<?php

namespace App\Livewire;

use App\Models\News\Post;
use Illuminate\Support\Js;
use Livewire\Component;

class NewsCarousel extends Component
{
    public $posts;
    public $images;

    public function mount()
    {
        $this->posts = Post::latest()->take(4)->get();

        if(count($this->posts)>0){
            $this->images = $this->getImages();
        }
    }

    public function getImages()
    {
        $images = [];

        foreach($this->posts as $post){
            array_push($images,$post->getFirstMediaUrl());
        }

        return $images;
    }
    public function render()
    {
        return view('components.news-carousel');
    }
}
