<?php


namespace App\Livewire\News;

use App\Concerns\LivewireCustomPagination;
use App\Enums\News\PostStatus;
use App\Models\News\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    use LivewireCustomPagination;

    public $date = null;
    public $status = null;
    public $sortField = null;

    protected $queryString = [
        'status' => ['except'=>''],
        'sortField' => ['except' => ''],
        'sortAsc' => ['except' => false],
    ];

    #[Computed]
    private function posts()
    {
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
        ->where('status',PostStatus::PUBLISHED->value)
        ->when($this->date, function ($query) {
            return $query->where('date', $this->date);
        })
        ->withAggregate('user','name')
        ->search($this->search)
        ->orderBy('date','DESC')
        ->paginate(9);
    }

    #[Layout('layouts.main')]
    public function render()
    {
        return view('livewire.news.index');
    }
}
