<?php

use App\Livewire\Main;
use Illuminate\Support\Facades\Route;

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

Route::get('/ordenanzas', App\Livewire\OrdinancesViewComponent::class)->name('app.ordinances');

Route::get('/informacion', function (){
    return view('info');
})->name('app.info');


Route::get('/noticias', App\Livewire\News\Index::class)->name('app.news');
Route::get('/noticias/{post}', App\Livewire\News\Show::class)->name('app.news.show');

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
        Route::get('/crear', App\Livewire\Admin\News\create::class)->name('admin.news.create');
        Route::get('/editar/{$post}', App\Livewire\Admin\News\create::class)->name('admin.news.edit');
    });

    Route::prefix('ordinances')->group(function(){
        Route::get('/',App\Livewire\Admin\Ordinances\Index::class)->name('admin.ordinance.index');
        Route::get('/crear',App\Livewire\Admin\Ordinances\Create::class)->name('admin.ordinance.create');
        Route::get('/editar',App\Livewire\Admin\Ordinances\Edit::class)->name('admin.ordinance.edit');
    });
});
