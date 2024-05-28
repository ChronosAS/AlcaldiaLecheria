<?php

namespace App\Livewire\Admin\News;

use App\Models\Team;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $sub_title;
    public $user;
    public $date;
    public $content;

    public function render()
    {
        return view('livewire.admin.news.create',[
            'users' => (Team::where('name','Prensa')->first())->allUsers()->where('id','!=',auth()->user()->id)
        ])->layout('layouts.admin',['header'=>'Crear Noticia']);
    }
}
