<?php

namespace App\Livewire\Admin\News;

use App\Concerns\LivewireCustomPagination;
use App\Models\News\Post;
use Livewire\Component;

class Index extends Component
{
    use LivewireCustomPagination;


    public $status = null;
    public $sortField = null;

    protected $queryString = [
        'status' => ['except'=>''],
        'sortField' => ['except' => ''],
        'perPage' => ['except' => 10],
        'sortAsc' => ['except' => false]
    ];

    private function loadPosts(){
        return Post::query()
        ->select([
            'id',
            'title',
            'subtitle',
            'slug',
            'content',
            'date',
            'user_id',
            'status',
            'created_at',
            'updated_at',
            'deleted_at'
        ])
        ->withAggregate('user','name')
        ->when($this->status, function ($query) {
            return $query->where('status', $this->status);
        })
        ->search($this->search)
        ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
        ->paginate($this->perPage);
    }

    public function delete(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.admin.news.index',[
            'posts' => $this->loadPosts()
        ])->layout('layouts.admin',['header'=>'Noticias']);
    }
}
