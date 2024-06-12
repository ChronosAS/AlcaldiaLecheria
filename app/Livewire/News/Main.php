<?php

namespace App\Livewire\News;

use App\Models\News\Post;
use Livewire\Component;

class Main extends Component
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
                $post->imageAlt = $post->title.'-img';
                return $post;
            })->toArray();
    }

    public function show($post)
    {
        return redirect()->route('app.news.show',$post);
    }

    public function render()
    {
        return view('components.news.main');
    }
}
