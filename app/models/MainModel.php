<?php

require "app/lib/Mysql.php";

class MainModel
{
	function getBooks()
	{
		$mysql = new Mysql();
		$link = $mysql -> dbConnect();
		$query = "SELECT title, description, price, genre, author FROM books b 
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
		$query = "SELECT genre FROM genres";
		if(!$result = mysqli_query($link, $query)){
			echo "Чет пошло не так...\n";
			echo mysqli_error($link);
			return false;
		}
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $items;
		$mysql -> dbDisconnect();
	}

	function getAuthors()
	{
		$mysql = new Mysql();
		$link = $mysql -> dbConnect();
		$query = "SELECT author FROM authors";
		if(!$result = mysqli_query($link, $query)){
			echo "Чет пошло не так...\n";
			echo mysqli_error($link);
			return false;
		}
		$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $items;
		$mysql -> dbDisconnect();
	}
}