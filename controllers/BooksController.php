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

class BooksController {

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

    }

    public function create() //display the form
    {

    }

    public function store() //store created book
    {

    }

    public function edit() //show form for editing
    {

    }

    public function update() //store edited book
    {

    }

    public function destroy() //delete the book
    {

        App::get('database')->delete("books", $_GET['id']);

        header('Location: /book');
    }
}
