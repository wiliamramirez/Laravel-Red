<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', "InicioController@index");

// Route::get('/recetas', "RecetaController");

Route::get('/recetas', "RecetaController@index")->name("recetas.index");
Route::get('/recetas/create', "RecetaController@create")->name("recetas.create");
Route::post('/recetas', "RecetaController@store")->name("recetas.store");
Route::get('/recetas/{receta}', "RecetaController@show")->name("recetas.show");
Route::get('/recetas/{receta}/edit', "RecetaController@edit")->name("recetas.edit");
Route::put('/recetas/{receta}/edit', "RecetaController@update")->name("recetas.update");
Route::delete('/recetas/{receta}', "RecetaController@destroy")->name("recetas.destroy");

Route::get('/categoria/{categoriaReceta}', "CategoriasController@show")->name("categorias.show");

// Buscador de Recetas
Route::get("/buscar", "RecetaController@search")->name("buscar.show");

// Route::resource('recetas', 'RecetaController');

Route::get('/perfiles/{perfil}', "PerfilController@show")->name("perfiles.show");
Route::get('/perfiles/{perfil}/edit', "PerfilController@edit")->name("perfiles.edit");
Route::put('/perfiles/{perfil}', "PerfilController@update")->name("perfiles.update");

// Almacena los likes de las recetas

Route::post("/recetas/{receta}", "LikesController@update")->name("likes.update");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
