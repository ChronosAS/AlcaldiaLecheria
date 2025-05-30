<?php

namespace App\Livewire\Admin\News;

use App\Concerns\LivewireCustomPagination;
use App\Enums\News\PostStatus;
use App\Models\News\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Telegram\Bot\Laravel\Facades\Telegram;

class Index extends Component
{
    use LivewireCustomPagination;


    public $date = null;
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
            'iso_date',
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
        ->when($this->date, function ($query) {
            return $query->where('date', $this->date);
        })
        ->search($this->search)
        ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
        ->paginate($this->perPage);

    }

    public function test()
    {
        Telegram::sendMessage([
            'chat_id' => -1002325072014,
            'text' => 'Hello World',
        ]);

        dd('message sent');
    }

    public function delete($post)
    {
        (Post::withTrashed()->find($post))->forceDelete();
    }

    // public function restore($post)
    // {
    //     (Post::withTrashed()->find($post))->restore();
    // }

    public function toggleStatus($id)
    {
        $post = Post::where('id',$id)->first();

        switch ($post->status->value) {
            case PostStatus::DRAFT->value:
                $post->status = PostStatus::PUBLISHED->value;
                break;

            case PostStatus::PUBLISHED->value:
                $post->status = PostStatus::DRAFT->value;
                break;

            default:
                # code...
                break;
        }

        $post->save();


    }

    #[Layout('layouts.admin',['header'=>'Noticias'])]
    public function render()
    {
        return view('livewire.admin.news.index');
    }
}
