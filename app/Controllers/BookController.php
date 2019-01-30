<?php

use App\Core\App;

class BookController
{
    protected $bookMapper;

    public function __construct()
    {
        $this->bookMapper = new BookMapper(App::get('database'));
    }

    public function index()
    {
        $booksGroupedByGenres = $this->bookMapper->getBooksGroupedByGenres();

        return
            view('partials/header') .
            view('book-list', ['booksGroupedByGenres' => $booksGroupedByGenres]);
    }

    public function show()
    {
        $bookId = $_GET['book'];

        $book = $this->bookMapper->findById($bookId);

        return view('show-book', ['book' => $book]);
    }

    public function edit()
    {
        $bookId = $_GET['book'];

        $book = $this->bookMapper->findById($bookId);

        return view('edit-book-form', ['book' => $book]);
    }

    public function create()
    {
        return
            view('partials/header') .
            view('insert-book-form');
    }

    public function store()
    {
        $book = new Book();

        $book->setName($_POST['name']);
        $book->setDescription($_POST['description']);
        $book->setAuthor($_POST['author']);
        $book->setGenre($_POST['genre']);
        $book->setPageCount($_POST['page_count']);
        $book->setChapterCount($_POST['chapter_count']);
        $book->setCover($_POST['cover']);
        $book->setWishList(0);

        $this->bookMapper->insert($book);

        return redirect('books');
    }

    public function update()
    {
        $book = new Book();

        $book->setId($_POST['id']);
        $book->setName($_POST['name']);
        $book->setDescription($_POST['description']);
        $book->setAuthor($_POST['author']);
        $book->setGenre($_POST['genre']);
        $book->setPageCount($_POST['page_count']);
        $book->setChapterCount($_POST['chapter_count']);
        $book->setCover($_POST['cover']);

        $this->bookMapper->update($book);

        return redirect('books');
    }

    public function destroy()
    {
        $this->bookMapper->delete($_GET['book']);

        return redirect('books');
    }
}