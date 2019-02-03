<?php

namespace App\Mappers;
use App\Models\Book;
use PDO;

class BookMapper
{
    private $db;
    private $table = "books";

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findById($id)
    {
        $result = $this->db->query("SELECT * FROM books WHERE id = $id")
            ->fetch(PDO::FETCH_ASSOC);

        $book = new Book();
        $book->setName($result['name']);
        $book->setGenre($result['genre']);
        $book->setDescription($result['description']);
        $book->setPageCount($result['page_count']);
        $book->setChapterCount($result['chapter_count']);
        $book->setCover($result['cover']);
        $book->setUpdatedAt($result['updated_at']);
        return $book;
    }

    public function insert(Book $book)
    {
        $handle = $this->db->prepare("INSERT INTO $this->table " .
          "(name, description, author, genre, page_count, chapter_count, " .
          "cover, wishlist, created_at, updated_at) " .
          "values (:name, :description, :author, :genre, :page_count, :chapter_count, " .
          ":cover,:wishlist, :created_at, :updated_at)");

        $handle->bindValue(':name', $book->getName(), PDO::PARAM_STR);
        $handle->bindValue(':description', $book->getDescription(), PDO::PARAM_STR);
        $handle->bindValue(':author', $book->getAuthor(), PDO::PARAM_STR);
        $handle->bindValue(':genre', $book->getGenre(), PDO::PARAM_STR);
        $handle->bindValue(':page_count',$book->getPageCount(),PDO::PARAM_INT);
        $handle->bindValue(':chapter_count',$book->getChapterCount(), PDO::PARAM_INT);
        $handle->bindValue(':cover', $book->getCover(), PDO::PARAM_STR);
        $handle->bindValue(':wishlist',$book->getWishList(), PDO::PARAM_INT);
        $handle->bindValue(':created_at', $book->getCreatedAt());
        $handle->bindValue(':updated_at', $book->getUpdatedAt());

        $handle->execute();
    }

    public function update(Book $book)
    {
        $sql = "UPDATE $this->table SET name=?, description=?, author=? 
                WHERE id=?";
        $this->db->prepare($sql)->execute([$book->getName(), $book->getDescription(),
            $book->getAuthor(), $book->getId()]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id=$id";
        $this->db->prepare($sql)->execute();
    }

    public function getBooks($query = null)
    {
        if(!empty($query)) {
            $handle = $this->db->prepare("SELECT genre, id, name, author FROM books WHERE name LIKE '%$query%' OR author LIKE '%$query%' ");
        } else {
            $handle = $this->db->prepare("SELECT genre, id, name, author FROM books");
        }

        $handle->execute();
        $result = $handle->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_CLASS, Book::class);
        return $result;
    }

    public function getWishListBooks()
    {
        $handle = $this->db->prepare('SELECT * FROM books WHERE wishlist = 1');
        $handle->execute();
        $result = $handle->fetchAll(PDO::FETCH_CLASS, Book::class);
        return $result;
    }

    public function getBooksGroupedByGenres() {
        $handle = $this->db->prepare('SELECT genre, id, name, author FROM books');
        $handle->execute();
        $result = $handle->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_CLASS, Book::class);
        return $result;
    }
}