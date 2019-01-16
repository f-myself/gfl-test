<?php

require "app/models/MainModel.php";

class AdminModel
{
	function getBooks()
	{
		$allBooks = new MainModel();
		$items = $allBooks -> getBooks();
		$allBooks = NULL;
		return $items;
	}

	function getGenres()
	{
		$allGenres = new MainModel();
		$items = $allGenres -> getGenres();
		$allGenres = NULL;
		return $items;
	}

	function getAuthors()
	{
		$allAuthors = new MainModel();
		$items = $allAuthors -> getAuthors();
		$allAuthors = NULL;
		return $items;
	}
}