function helloWorld() {
    console.log("Hello World !");
}

function searchBooks() {
    $(document).ready(function() {
        $.get("test.php", function(data, status) {
            alert("Data:" + data + status);
        });
    });
}