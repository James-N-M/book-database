<div class="container">

<h1 class="page-header">Currently Uploaded Images</h1>

<?php foreach ($images as $image): ?>
    <img class="genre-section-list-book" src="<?=$image->getFilePath() ?>" alt="this is a book image">
<?php endforeach ?>
