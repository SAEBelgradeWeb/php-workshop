<?php



$router->get('', 'PagesController@home');

//BOOKS
$router->get('book', 'BooksController@index');
$router->get('book/show', 'BooksController@show'); //book/show?id=1
$router->get('book/create', 'BooksController@create');
$router->post('book/create', 'BooksController@store');
$router->get('book/edit', 'BooksController@edit'); //book/edit?id=1
$router->post('book/edit', 'BooksController@update'); //book/edit?id=1
$router->get('book/delete', 'BooksController@destroy'); //book/delete?id=1



