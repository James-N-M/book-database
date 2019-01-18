<?php

class BookSearchController
{
    protected $bookMapper;

    public function __construct()
    {
        $this->bookMapper = new BookMapper(App::get('database'));
    }

    public function index()
    {
        return view('partials/header', []) .
            view('search-book', []) .
            view('partials/footer');
    }

    public function search()
    {
        $books = $this->bookMapper->getBooks($_GET['q']);
        // TODO: set up a view that involves the books
        return view('partials/book-search-results', ['books' => $books]);
    }
}