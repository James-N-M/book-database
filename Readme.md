The point of this project was to practise php and create a project without the use of the laravel framework while following along with php practioner on laracasts. The process to push this to heroku with the simple router class setup was frustrating so I uploaded screen shots instead below in this readme. Also started using tailwind to get some basic practise using it. 

# Setup

In the root folder of the project run php -S localhost:8000 from the terminal or command line to start a simple php server 

```
  composer install -> setup autoloaded classes 
  npm install -> to setup tailwind 
  tailwind: npm run tw or just copy paste the original script from package.json
```

```
Create table books

CREATE TABLE `books` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `description` text,
  `author` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `page_count` int(4) DEFAULT NULL,
  `chapter_count` int(4) DEFAULT NULL,
  `cover` varchar(50) DEFAULT NULL,
  `wishlist` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
SELECT * FROM books.images;
```

```
Create table images 

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file_path` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
```


## List books currently added to the database 

![list-page-screenshot](https://raw.githubusercontent.com/James-N-M/book-database/master/public/images/list-page.png)

## Show book currently added to the database, Edit / Upload Image / Delete book 

![show-book-screen](https://raw.githubusercontent.com/James-N-M/book-database/master/public/images/show-book.png)

## Search books currently added to the database 

![search-books-screenshot](https://raw.githubusercontent.com/James-N-M/book-database/master/public/images/search-book.png)

## Add books to the databse

![add-books-screenshot](https://raw.githubusercontent.com/James-N-M/book-database/master/public/images/add-book.png)
