<?php

use App\Livewire\Main;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', App\Livewire\Main::class)->name('app');

Route::get('/telegram/log/test', function(){
    $test = ['a','b','c'];
    Log::debug('test',$test);
});

// Route::get('/ordenanzas', App\Livewire\OrdinancesViewComponent::class)->name('app.ordinances');
// Route::get('/ordenanzas', App\Livewire\OrdinancesViewComponent::class)->name('app.ordinances');

Route::prefix('registro-civil')->group(function(){

    Route::get('/buena-conducta',function(){
        return view('civil-registry.conducta');
    })->name('app.civil-reg.conducta');

    Route::get('/fe-de-vida',function(){
        return view('civil-registry.fe-de-vida');
    })->name('app.civil-reg.fe-de-vida');

    Route::get('/matrimonio',function(){
        return view('civil-registry.matrimonios');
    })->name('app.civil-reg.matri');

    Route::get('/matrimonios-art-70',function(){
        return view('civil-registry.matrimonios-70');
    })->name('app.civil-reg.matri-70');

    Route::get('/nacimientos',function(){
        return view('civil-registry.nacimientos');
    })->name('app.civil-reg.nacimientos');

    Route::get('/constancia-de-residencia',function(){
        return view('civil-registry.residencia');
    })->name('app.civil-reg.residencia');

    Route::get('/solteria',function(){
        return view('civil-registry.solteria');
    })->name('app.civil-reg.solteria');

    Route::get('/permiso-de-mudanza',function(){
        return view('civil-registry.mudanza');
    })->name('app.civil-reg.mudanza');

    Route::get('/union-estable-de-hecho',function(){
        return view('civil-registry.union');
    })->name('app.civil-reg.union');

    Route::get('/defunciones',function(){
        return view('civil-registry.defunciones');
    })->name('app.civil-reg.defunciones');
});

Route::get('/directorio', function (){
    return view('directive.directive-team');
})->name('app.directives');

Route::get('/alcalde', function (){
    return view('directive.mayor-bio');
})->name('app.mayor');

Route::get('/informacion', function (){
    return view('info');
})->name('app.info');

Route::get('/registro-civil', function (){
    return view('civil-registry');
})->name('app.civil-registry');
Route::get('/noticias', App\Livewire\News\Index::class)->name('app.news');
Route::get('/noticias/{post}', App\Livewire\News\Show::class)->name('app.news.show');

Route::get('/virgendelvalle2024', function (){
    return view('vdv');
})->name('app.vdv');



    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {

        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::prefix('admin/noticias')->group(function(){
            Route::get('/', App\Livewire\Admin\News\Index::class)->name('admin.news.index');
            Route::get('/crear', App\Livewire\Admin\News\Create::class)->name('admin.news.create');
            Route::get('/editar/{post}', App\Livewire\Admin\News\Edit::class)->name('admin.news.edit');
        });
    });

    // Route::prefix('ordinances')->group(function(){
    //     Route::get('/',App\Livewire\Admin\Ordinances\Index::class)->name('admin.ordinance.index');
    //     Route::get('/crear',App\Livewire\Admin\Ordinances\Create::class)->name('admin.ordinance.create');
    //     Route::get('/editar',App\Livewire\Admin\Ordinances\Edit::class)->name('admin.ordinance.edit');
    // });
