<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'RecipeController@index')->name('recipe.home');
Route::post('/', 'RecipeController@searchRecipes')->name('recipe.search');
Route::get('/recettes', 'RecipeController@recipes')->name('recipe.show');
Route::get('/recettes/categories/{id}', 'RecipeController@recipesWithCategory')->name('recipe.category');
