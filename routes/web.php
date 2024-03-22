<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cost_intra', [App\Http\Controllers\CostController::class, 'cost_intra'])->name('cost_intra');
Route::post('/cost_info', [App\Http\Controllers\CostController::class, 'cost_info'])->name('cost_info');
Route::get('/edit_cast_info_{id}', [App\Http\Controllers\CostController::class, 'edit_cast_info'])->name('edit_cast_info');
Route::Post('/update_cost_info', [App\Http\Controllers\CostController::class, 'update_cost_info'])->name('update_cost_info');

Route::get('/name_info', [App\Http\Controllers\NameController::class, 'name_info'])->name('name_info');
Route::post('/person_name_info', [App\Http\Controllers\NameController::class, 'person_name_info'])->name('person_name_info');
Route::get('/edit_name_info_{id}', [App\Http\Controllers\NameController::class, 'edit_name_info'])->name('edit_name_info');
Route::get('/delete_name_info_{id}', [App\Http\Controllers\NameController::class, 'delete_name_info'])->name('delete_name_info');
Route::post('/person_name_info_update', [App\Http\Controllers\NameController::class, 'person_name_info_update'])->name('person_name_info_update');



Route::get('/personal_cost', [App\Http\Controllers\PersonalCostController::class, 'personal_cost'])->name('personal_cost');
Route::post('/person_cost_info', [App\Http\Controllers\PersonalCostController::class, 'person_cost_info'])->name('person_cost_info');
Route::get('/personal_cost_view', [App\Http\Controllers\PersonalCostController::class, 'personal_cost_view'])->name('personal_cost_view');
Route::get('/per_person_view_cost_info_{id}', [App\Http\Controllers\PersonalCostController::class, 'per_person_view_cost_info'])->name('per_person_view_cost_info');
Route::get('/edit_value_person_{id}', [App\Http\Controllers\PersonalCostController::class, 'edit_value_person'])->name('edit_value_person');
Route::post('/personal_cost_update', [App\Http\Controllers\PersonalCostController::class, 'personal_cost_update'])->name('personal_cost_update');



