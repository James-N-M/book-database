<?php include 'partials/header.view.php'; ?>

<div class="container">
    <h1 class="page-header"><?= $book->getName() ?></h1>
    <section class="flex">
        <div class="mr-16">
            <p><?= $book->getDescription()?></p>
            <h3> Author: <?= $book->getAuthor() ?></h3>
            <h3> Genre: <?= $book->getGenre() ?> </h3>
            <h3> Page Count: <?= $book->getPageCount() ?></h3>
            <h3> Chapter Count: <?= $book->getChapterCount() ?></h3>
            <h3> Cover <?= $book->getCover() ?></h3>
            <h3> Updated at <?= $book->getUpdatedAt() ?></h3>
        </div>

        <div>
            <img class="w-1/3" src="<?=$image->getFilePath()?>" alt="">
        </div>

    </section>

    <section class="flex justify-around items-center mt-16">
        <a href="edit-book?book=<?=$book->getId() ?>">
            <button class="bg-yellow-dark font-bold hover:bg-blue-dark px-4 py-2 rounded text-white text-4xl">
                Edit
            </button>
        </a>


        <a href="insert-image?book=<?=$book->getId() ?>">
            <button class="bg-green-dark font-bold hover:bg-blue-dark px-4 py-2 rounded text-white text-4xl">
                Upload Image
            </button>
        </a>

        <a href="delete-book?book=<?=$book->getId() ?>">
            <button class="bg-red-dark font-bold hover:bg-blue-dark px-4 py-2 rounded text-white text-4xl">
                Delete
            </button>
        </a>

    </section>
</div>