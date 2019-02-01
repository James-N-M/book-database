<div class="container">

    <h1 class="page-header">Search Currently Owned Books</h1>

    <div class="sub-container">
        <input type="text" id="search-book-input" class="text-5xl mb-4 border-2 h-16">
        <button class="bg-green-dark font-bold hover:bg-green-darker px-4 py-2 rounded text-white text-3xl"
                onclick="searchBooks(document.getElementById('search-book-input').value)" id="search-book-btn">
            Search Books
        </button>
        <div class="sub-container" id="book-search-results">
            
        </div>
    </div>
    
    
    

</div>