<!-- $book->getUrl() returns a nice url to centralize it :) -->
<div class="genre-section-list">
<?php foreach ($books as $book): ?>
    <a href="show-book?book=<?=$book->getId()?>">
        <div class="genre-section-list-book">
            <?= $book->getName() . "  " . $book->getAuthor() ?>
        </div>
    </a>
<?php endforeach ?>
</div>






