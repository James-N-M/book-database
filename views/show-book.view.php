<?php include 'partials/header.view.php'; ?>

<div class="container">
    <h1>Show Book View</h1>

    <h3>Book ID <?= $book->getId() ?></h3>
    <h3>Book Name <?= $book->getName() ?></h3>
    <h3> Book description <?= $book->getDescription()?></h3>
    <h3> Author: <?= $book->getAuthor() ?></h3>
    <h3> Genre: <?= $book->getGenre() ?> </h3>
    <h3> Page Count: <?= $book->getPageCount() ?></h3>
    <h3> Chapter Count: <?= $book->getChapterCount() ?></h3>
    <h3> Cover <?= $book->getCover() ?></h3>
    <h3> Wish List <?= $book->getWishList() ?></h3>
    <h3> Created at <?= $book->getCreatedAt() ?></h3>
    <h3> Updated at <?= $book->getUpdatedAt() ?></h3>

    <a href="delete-book?book=<?=$book->getId() ?>">
        DELETE BOOK </a>

    <a href="edit-book?book=<?=$book->getId() ?>">
        EDIT BOOK </a>