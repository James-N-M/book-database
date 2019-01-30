<div class="container">
    <h1 class="page-header">Add Image To Database</h1>
    <form action="insert-image" method="POST" class="form" enctype="multipart/form-data">
        <input type="text" value="<?=$book->getId()?>" name="bookId" hidden>
        <div class="input-box">
            <label class="input-box-label" for="image">Image</label>
            <input class="input-box-input" type="file" id="image" name="image" required>
        </div>
        <button class="btn-medium" type="submit">Insert Image</button>
    </form>
</div>
