<h1>Add book to Wish List</h1>
<form action="../add-wishlist-book.php" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="author">Author</label>
        <input type="text" id="author" name="author" required>
    </div>

    <div>
        <label for="author">Description</label>
        <input type="text" id="author" name="description" required>
    </div>

    <div>
        <label for="genre">Genre</label>
        <input type="text" id="genre" name="genre" required>
    </div>

    <div>
        <label for="page-count">Page Count</label>
        <input type="text" id="page-count" name="page_count" required>
    </div>

    <div>
        <label for="chapter-count">Chapter Count</label>
        <input type="text" id="chapter-count" name="chapter_count" required>
    </div>

    <div>
        <label for="cover">Paper or Hard cover</label>
        <select name="cover" id="cover">
            <option value=""></option>
            <option value="hard cover">Hard Cover</option>
            <option value="paper cover">Paper Cover</option>
        </select>
    </div>
    <input type="submit">
</form>