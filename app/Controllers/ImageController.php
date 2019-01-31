<?php

use App\Core\App;
use App\Mappers\BookMapper;
use App\Mappers\ImageMapper;

class ImageController
{
    protected $imageMapper;
    protected $bookMapper;

    public function __construct()
    {
        $this->imageMapper = new ImageMapper(App::get('database'));
        $this->bookMapper = new BookMapper(App::get('database'));
    }

    public function index()
    {
        $images = $this->imageMapper->getImages();

        return view('partials/header') .
            view('image-list', ['images' => $images]) .
            view('partials/footer');
    }

    public function create()
    {
        $bookId = $_GET['book'];
        $book = $this->bookMapper->findById($bookId);
        return view('partials/header') .
            view('insert-image-form', ['book' => $book]) .
            view('partials/footer');
    }

    public function store()
    {
        $bookId = $_POST['bookId'];
        $image = new Image();
        $name = $_FILES['image']['name'];
        $target_dir = "public/images/";

        $image->setName($name);
        $image->setBookId($bookId);
        $image->setFilePath('../../' . $target_dir . '/' . $name);

        $this->imageMapper->insert($image);

        move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);

        return redirect('images');
    }
}