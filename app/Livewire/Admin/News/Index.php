<?php

namespace App\Livewire\Admin\News;

use App\Concerns\LivewireCustomPagination;
use App\Enums\News\PostStatus;
use App\Models\News\Post;
use Livewire\Attributes\Computed;
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

    #[Computed]
    private function posts(){
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
        ->withTrashed()
        ->withAggregate('user','name')
        ->when($this->status, function ($query) {
            return $query->where('status', $this->status);
        })
        ->search($this->search)
        ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
        ->paginate($this->perPage);
    }

    public function delete($post)
    {
        (Post::withTrashed()->find($post))->forceDelete();
    }

    // public function restore($post)
    // {
    //     (Post::withTrashed()->find($post))->restore();
    // }

    // public function changeStatus($id)
    // {
    //     $post = Post::where('id',$id)->first();

    //     switch ($post->status) {
    //         case PostStatus::DRAFT->value:
    //             $post->status = PostStatus::PUBLISHED->value;
    //             break;

    //         case PostStatus::PUBLISHED->value:
    //             $post->status = PostStatus::DRAFT->value;
    //             break;

    //         default:
    //             # code...
    //             break;
    //     }

    //     $post->save();
    // }

    public function render()
    {
        return view('livewire.admin.news.index')->layout('layouts.admin',['header'=>'Noticias']);
    }
}
