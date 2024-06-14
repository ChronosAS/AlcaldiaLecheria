<?php

namespace App\Livewire\News;

use App\Enums\News\PostStatus;
use App\Models\News\Post;
use Livewire\Component;

class Main extends Component
{
    public $posts = [];
    public $indexes = [];

    public function render()
    {
        $this->posts = Post::latest()
        ->where('status',PostStatus::PUBLISHED->value)
        ->take(4)
        ->get()
        ->map(function($post){
            $post->image = $post->getFirstMediaUrl('post-image');
            $post->imageAlt = $post->title.'-img';
            return $post;
        })->toArray();

        return view('components.news.main');
    }
}
