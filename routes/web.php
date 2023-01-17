<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Models\Page;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page/create', [PageController::class, 'create'])->middleware('auth');
Route::post('/page/create', [PageController::class, 'store'])->middleware('auth');
Route::get('/page/{page:slug}', function(Page $page){
    return view('page.view', $page);
});
Route::get('/pages', function(){
    return view('page.list', ['pages' => Page::all()]);
});
