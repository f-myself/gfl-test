<?php

require "app/admin/models/AdminModel.php";
require "app/admin/views/AdminView.php";

class AdminController
{
	function indexAction()
	{
		echo "Login!\n";
	}

	function showBooksAction()
	{
		$newModel = new AdminModel();
		$newView = new AdminView();
		$arr = $newModel -> getBooks();
		if($arr)
		{
			$newView -> showBooks($arr);
		} else {
			echo "Архив книг недоступен.";
		}
		$newModel = NULL;
		$newView = NULL;
	}

	function addBookAction()
	{
		echo "Add Book!";
	}

	function showGenresAction()
	{
		$newModel = new AdminModel();
		$newView = new AdminView();
		$arr = $newModel -> getGenres();
		if($arr)
		{
			$newView -> showGenres($arr);
		} else {
			echo "Жанры недоступны.";
		}
		$newModel = NULL;
		$newView = NULL;
	}

	function addGenreAction($genre="horror")
	{
		echo "Add genre!";
	}

	function showAuthorsAction()
	{
		$newModel = new AdminModel();
		$newView = new AdminView();
		$arr = $newModel -> getAuthors();
		if($arr)
		{
			$newView -> showAuthors($arr);
		} else {
			echo "Архив книг недоступен.";
		}
		$newModel = NULL;
		$newView = NULL;
	}

	function addAuthorAction($author="Steven King")
	{
		echo "Add Author!";
	}

	function editAction($id=1)
	{
		echo "editing book";
	}
}