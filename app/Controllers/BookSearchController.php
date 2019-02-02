<?php

use App\Core\App;
use App\Mappers\BookMapper;

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
        $booksGroupedByGenres = $this->bookMapper->getBooks($_GET['q']);

        return view('partials/book-search-results', ['booksGroupedByGenres' => $booksGroupedByGenres]);
    }
}