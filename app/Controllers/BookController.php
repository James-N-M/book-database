<?php

use App\Core\App;
use App\Mappers\BookMapper;
use App\Mappers\ImageMapper;
use App\Models\Book;

class BookController
{
    protected $bookMapper;

    public function __construct()
    {
        $this->bookMapper = new BookMapper(App::get('database'));
        $this->imageMapper = new ImageMapper(App::get('database'));
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
        $image = $this->imageMapper->findByBookId($bookId);
        return view('show-book', ['book' => $book, 'image' => $image]);
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