<div class="container">

    <h1 class="page-header">Currently Owned Books</h1>

    <?php foreach ($booksGroupedByGenres as $group => $books): ?>
        <section class="flex flex-col">
            <div class="text-2xl">
                <h2><?= $group ?></h2>
            </div>
            <div class="flex flex-wrap">
                <?php foreach ($books as $book): ?>
                    <a href="show-book?book=<?=$book->getId()?>">
                        <div class="bg-orange-lighter border-2 border-black flex h-64 items-center justify-center m-8 w-64">
                            <?= $book->getName() . "  " . $book->getAuthor() ?>
                        </div>
                    </a>
                <?php endforeach ?>
            </div>
        </section>
    <?php endforeach ?>

</div>






