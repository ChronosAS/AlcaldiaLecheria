<?php

namespace App\Livewire;

use App\Models\News\Post;
use Livewire\Component;

class NewsCarousel extends Component
{
    public $posts = [];
    public $indexes = [];

    public function mount()
    {
        $this->posts = Post::latest()
            ->where('is_draft',0)
            ->take(4)
            ->get()
            ->map(function($post){
                $post->image = $post->getFirstMediaUrl('post-image');
                $post->imageAlt = $post->tile.'-img';
                return $post;
            })->toJson();
    }

    public function getImages()
    {
        $images = [];

        foreach($this->posts as $post){
            array_push($images,$post->getFirstMediaUrl('post-image'));
        }

        return $images;
    }
    public function render()
    {

        return view('components.news-carousel');
    }
}
