<?php

namespace App\Controllers;

//CRUD
//C
//1. display a form
//2. submit creatin form
//R
//3. list all books
//4. show one book (single)
//U
//5. form for update
//6. submit the form
//D
//7. delete


use App\Core\App;

class BooksController
{

    public function index() //list all the books
    {
        $fields = [
            "books.id", "books.title", "books.year", "authors.name", "authors.lastname"
        ];

        $books = App::get('database')->selectAll('books', 'authors', $fields, 'author_id');

        return view('books-index', compact('books'));
    }

    public function show() // show slingle book
    {

        $fields = [
            "books.id", "books.title", "books.year", "authors.name", "authors.lastname"
        ];

        $book = App::get('database')->selectAll('books', 'authors', $fields, 'author_id', ['books.id' => $_GET['id']]);

        return view('books-show', compact('book'));
    }

    public function create() //display the form
    {
        $authors = App::get('database')->selectAll('authors');

        return view('books-create', compact('authors'));
    }

    public function store() //store created book
    {
        App::get('database')->insert('books', $_POST);

        header('Location: /book');
    }

    public function edit() //show form for editing
    {

        $authors = App::get('database')->selectAll('authors');

        $book = App::get('database')->selectAll('books', '', [], '', $_GET);

        return view('books-edit', compact('book', 'authors'));
    }

    public function update() //store edited book
    {
        App::get('database')->update('books', $_POST);

        header('Location: /book');
    }

    public function destroy() //delete the book
    {

        App::get('database')->delete("books", $_GET['id']);

        header('Location: /book');
    }
}
