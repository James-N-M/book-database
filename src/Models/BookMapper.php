<?php

class BookMapper implements BookMapperInterface
{
    private $db;
    private $table = "books";

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findById($id)
    {
        $book = $this->db->query("SELECT * FROM books WHERE id = $id")
            ->fetchObject('Book');

        return $book;
    }

    public function insert(BookInterface $book)
    {
        $handle = $this->db->prepare("INSERT INTO $this->table 
          (name, description, author, genre, page_count, chapter_count, 
          cover, wishlist, created_at, updated_at)
          values (:name, :description, :author, :genre, :page_count, :chapter_count,
          :cover,:wishlist, :created_at, :updated_at)");

        $date = new \DateTime('now');

        $handle->bindValue(':name', $book->getName(), PDO::PARAM_STR);
        $handle->bindValue(':description', $book->getDescription(), PDO::PARAM_STR);
        $handle->bindValue(':author', $book->getAuthor(), PDO::PARAM_STR);
        $handle->bindValue(':genre', $book->getGenre(), PDO::PARAM_STR);
        $handle->bindValue(':page_count',$book->getPageCount(),PDO::PARAM_INT);
        $handle->bindValue(':chapter_count',$book->getChapterCount(), PDO::PARAM_INT);
        $handle->bindValue(':cover', $book->getCover(), PDO::PARAM_STR);
        $handle->bindValue(':wishlist',$book->getWishList(), PDO::PARAM_INT);
        $handle->bindValue(':created_at', $date->getTimestamp());
        $handle->bindValue(':updated_at', $date->getTimestamp());

        $handle->execute();
    }

    public function update(BookInterface $book)
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

    public function getBooks()
    {
        $handle = $this->db->prepare('SELECT * FROM books');
        $handle->execute();
        $result = $handle->fetchAll(PDO::FETCH_CLASS, 'Book');
        return $result;
    }

    public function getWishListBooks()
    {
        $handle = $this->db->prepare('SELECT * FROM books WHERE wishlist = 1');
        $handle->execute();
        $result = $handle->fetchAll(PDO::FETCH_CLASS, 'Book');
        return $result;
    }

    public function getBooksGroupedByGenres() {
        $handle = $this->db->prepare('SELECT genre, id, name, author FROM books');
        $handle->execute();
        $result = $handle->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_CLASS, 'Book');
        return $result;
    }
}