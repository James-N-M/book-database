function helloWorld() {
    console.log("Hello World !");
}

function searchBooks(query) {
    $.get("/search-book?q=" + query, function(data) {
        document.getElementById('book-search-results').innerHTML = data;
    });
}