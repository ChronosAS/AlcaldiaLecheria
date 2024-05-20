<?php

namespace App\Livewire\Admin\Ordinances;

use App\Concerns\LivewireCustomPagination;
use App\Models\Ordinance;
use Livewire\Component;

class Index extends Component
{
    use LivewireCustomPagination;

    public $sortField = null;

    protected $queryString = [
        'sortField' => ['except' => ''],
        'perPage' => ['except' => 10],
        'sortAsc' => ['except' => false]
    ];

    private function loadOrdinances(){
        return Ordinance::query()
            ->select([
                'id',
                'number',
                'date',
                'created_at',
                'updated_at',
                'deleted_at'
            ])
            ->search($this->search)
            ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.admin.ordinances.index',[
            'ordinances' => $this->loadOrdinances()
        ])->layout('layouts.admin',['header'=>'Ordenanzas']);
    }
}
