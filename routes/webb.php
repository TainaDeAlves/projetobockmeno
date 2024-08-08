<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/',[SiteController::class, "home"])->name('site.home');
Route::get('/sobre-nos',[SiteController::class, "sobreNos"])->name('site.sobrenos');
Route::get('/contato',[SiteController::class, "contato"])->name('site.contato');
Route::get('/admin/usuarios',[UsuarioController::class,'index'])->name('usuario.index');
Route::get('/admin/usuarios/editar/{id}',[UsuarioController::class,'edit'])->name('usuario.edit');

Route::get('/admin/usuarios/cadastrar',[UsuarioController::class,'create'])->name('usuario.cadastrar');
Route::get('/admin/usuarios/visualizar/{id}',[UsuarioController::class,'show'])->name('usuario.visualizar');
Route::post('/admin/usuarios/cadastrar/salvar',[UsuarioController::class,'store'])->name('usuario.cadastrarsalvar');

Route::get('/admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboar');

Route::put('admin/usuarios/atualizar/{id}',[UsuarioController::class, 'update'])->name('usuario.update');

Route::delete('admin/usuarios/deletar/{id}',[UsuarioController::class, 'destroy'])->name('usuario.destroy'); 

