<?php

use App\Http\Controllers\CounterController;
use App\Livewire\Student;
use App\Livewire\StudentCreate;
use App\Livewire\StudentEdit;
use Illuminate\Support\Facades\Route;

Route::get('/', Student::class)->name('student.index');
Route::get('/student/create', StudentCreate::class)->name('student.create');
Route::get('/student/edit/{id}', StudentEdit::class)->name('student.edit');