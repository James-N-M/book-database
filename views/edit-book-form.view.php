<?php include 'partials/header.view.php'; ?>

<div class="container">
    <h1 class="page-header">Edit Book</h1>
    <form action="update-book" method="POST" class="form">
        <div class="input-box">
            <label class="input-box-label" for="name">Name</label>
            <input class="input-box-input" type="text" id="name" name="name" value="<?= $book->getName() ?>" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="author">Author</label>
            <input class="input-box-input" type="text" id="author" name="author" " value="<?= $book->getAuthor() ?>" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="description">Description</label>
            <input class="input-box-input" type="text" id="description" name="description" value="<?= $book->getDescription() ?>" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="genre">Genre</label>
            <input class="input-box-input" type="text" id="genre" name="genre" value="<?= $book->getGenre() ?>" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="page-count">Page Count</label>
            <input class="input-box-input" type="number" id="page-count" name="page_count" value="<?= $book->getPageCount() ?>" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="chapter-count">Chapter Count</label>
            <input class="input-box-input" type="number" id="chapter-count" name="chapter_count" value="<?= $book->getChapterCount() ?>" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="cover">Paper or Hard cover</label>
            <select class="input-box-input" name="cover" id="cover">
                <option value=""></option>
                <option value="hard cover" selected >Hard Cover</option>
                <option value="paper cover">Paper Cover</option>
            </select>
        </div>
        <input type="number" name="id" value="<?= $book->getId() ?>" hidden>
        <button class="btn-medium" type="submit">Update Book</button>
    </form>

</div>
