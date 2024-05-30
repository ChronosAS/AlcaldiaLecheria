<?php

namespace App\Livewire\News;

use App\Models\News\Post;
use Livewire\Component;

class Show extends Component
{

    public $post;

    public function main(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.news.show')->layout('layouts.main');
    }
}
