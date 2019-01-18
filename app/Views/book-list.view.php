<div class="container">

    <h1 class="page-header">Currently Owned Books</h1>

    <?php foreach ($booksGroupedByGenres as $group => $books): ?>
        <section class="genre-section">
            <div class="genre-section-header">
                <h2 class="genre-section-header-text"><?= $group ?></h2>
            </div>
            <div class="genre-section-list">
                <?php foreach ($books as $book): ?>
                    <a href="show-book?book=<?=$book->getId()?>">
                        <div class="genre-section-list-book">
                            <?= $book->getName() . "  " . $book->getAuthor() ?>
                        </div>
                    </a>
                <?php endforeach ?>
            </div>
        </section>
    <?php endforeach ?>

</div>






