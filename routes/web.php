<?php
Route::get('/', 'PagesController@home');
Route::get('/about', 'Pagescontroller@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/finalizar', 'Pagescontroller@finalizar');
Route::get('/welcome', 'PagesController@welcome');
Route::get('/inicio','PagesController@inicio');
Route::get('/navegacion','PagesController@navegacion');
Route::get('/biografy','PagesController@biografy');
Route::get('/contacto','PagesController@contacto');
?>