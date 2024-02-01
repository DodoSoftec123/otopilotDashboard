<?php

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

Route::get('/', function () {
    return redirect()->route('auth.register');
});

Route::view('/admin', 'admin.home')->name('admin.home');
Route::view('/admin/company/profile', 'admin.company-profile')->name('admin.company.profile');
Route::view('/admin/team/members', 'admin.team-members')->name('admin.team.members');
Route::view('/admin/my/documents', 'admin.my-documents')->name('admin.my.documents');
Route::view('/admin/leads', 'admin.leads')->name('admin.leads');
Route::view('/admin/resources', 'admin.resources')->name('admin.resources');

Route::view('login', 'admin.auth.login')->name('auth.login');
Route::view('register', 'admin.auth.register')->name('auth.register');
