<?php

require "app/lib/Mysql.php";

class MainModel
{
	function getBooks()
	{
		$mysql = new Mysql();
		$link = $mysql -> dbConnect();
		$query = "SELECT b.id, title, description, price, genre, author FROM books b 
				  JOIN books_genres bg ON (bg.bookID=b.id) 
				  JOIN genres g ON (bg.genreID=g.id)
				  JOIN books_authors ba ON (ba.bookID=b.id)
				  JOIN authors a ON (ba.authorID=a.id)";
		if(!$result = mysqli_query($link, $query)){
			echo "Чет пошло не так...\n";
			echo mysqli_error($link);
			return false;
		}
		$mysql -> dbDisconnect();
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $items;
		
	}

	function getGenres()
	{
		$mysql = new Mysql();
		$link = $mysql -> dbConnect();
		$query = "SELECT id, genre FROM genres";
		if(!$result = mysqli_query($link, $query)){
			echo "Чет пошло не так...\n";
			echo mysqli_error($link);
			return false;
		}
		$mysql -> dbDisconnect();
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $items;
	}

	function getAuthors()
	{
		$mysql = new Mysql();
		$link = $mysql -> dbConnect();
		$query = "SELECT id, author FROM authors";
		if(!$result = mysqli_query($link, $query)){
			echo "Чет пошло не так...\n";
			echo mysqli_error($link);
			return false;
		}
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$mysql -> dbDisconnect();
		return $items;
	}

	function getBookByGenre($genre)
	{
		$mysql = new Mysql();
		$link = $mysql -> dbConnect();
		$query = "SELECT b.id, title, description, price, genre FROM books b
				  JOIN books_genres bg ON (bg.bookID=b.id) 
				  JOIN genres g ON (bg.genreID=g.id)
				  WHERE g.id=$genre";
		if(!$result = mysqli_query($link, $query)){
			echo "Чет пошло не так...\n";
			echo mysqli_error($link);
			return false;
		}
		$mysql -> dbDisconnect();
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $items;
	}

		function getBookByAuthor($author)
	{
		$mysql = new Mysql();
		$link = $mysql -> dbConnect();
		$query = "SELECT b.id, title, description, price, author FROM books b
				  JOIN books_authors ba ON (ba.bookID=b.id) 
				  JOIN authors a ON (ba.genreID=a.id)
				  WHERE g.id=$genre";
		if(!$result = mysqli_query($link, $query)){
			echo "Чет пошло не так...\n";
			echo mysqli_error($link);
			return false;
		}
		$mysql -> dbDisconnect();
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $items;
	}

		function getBookById($id)
	{
		$mysql = new Mysql();
		$link = $mysql -> dbConnect();
		$query = "SELECT b.id, title, description, price, genre, author FROM books b 
				  JOIN books_genres bg ON (bg.bookID=b.id) 
				  JOIN genres g ON (bg.genreID=g.id)
				  JOIN books_authors ba ON (ba.bookID=b.id)
				  JOIN authors a ON (ba.authorID=a.id)
				  WHERE (b.id=$id)";
		if(!$result = mysqli_query($link, $query)){
			echo "Чет пошло не так...\n";
			echo mysqli_error($link);
			return false;
		}
		$mysql -> dbDisconnect();
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $items;
	}
}