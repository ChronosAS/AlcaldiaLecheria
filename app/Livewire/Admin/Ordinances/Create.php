<?php

namespace App\Livewire\Admin\Ordinances;

use App\Models\Ordinance;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $number;
    public $date;
    public $file;

    public function create()
    {   dd($this->file->getRealPath());
        tap(Ordinance::create([
            'number' => $this->number,
            'date' => $this->date,
        ]),function($ordinance){

        });
    }

    public function render()
    {
        return view('livewire.admin.ordinances.create')->layout('layouts.admin',['header'=>'Aregar Ordenanza']);
    }
}
