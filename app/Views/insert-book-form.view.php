<div class="container">
    <h1 class="page-header">Add Book To Database</h1>
    <form action="insert-book" method="POST" class="form">
        <div class="input-box">
            <label class="input-box-label" for="name">Name</label>
            <input class="input-box-input" type="text" id="name" name="name" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="author">Author</label>
            <input class="input-box-input" type="text" id="author" name="author" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="description">Description</label>
            <input class="input-box-input" type="text" id="description" name="description" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="genre">Genre</label>
            <input class="input-box-input" type="text" id="genre" name="genre" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="page-count">Page Count</label>
            <input class="input-box-input" type="text" id="page-count" name="page_count" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="chapter-count">Chapter Count</label>
            <input class="input-box-input" type="text" id="chapter-count" name="chapter_count" required>
        </div>

        <div class="input-box">
            <label class="input-box-label" for="cover">Paper or Hard cover</label>
            <select class="input-box-input" name="cover" id="cover">
                <option value=""></option>
                <option value="hard cover">Hard Cover</option>
                <option value="paper cover">Paper Cover</option>
            </select>
        </div>
        <button class="btn-medium" type="submit">Create Book</button>
    </form>
</div>
