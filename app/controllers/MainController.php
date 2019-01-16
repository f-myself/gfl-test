<?php

require "app/models/MainModel.php";
require "app/views/MainView.php";
require "app/views/TemplateView.php";

class MainController extends Controller
{
	function indexAction()
	{
		$newModel = new MainModel();
		//$newView = new MainView();
		$arr = $newModel -> getBooks();
		/*if($arr)
		{
			$newView -> showBooks($arr);
		} else {
			echo "Архив книг недоступен";
		}*/

		$this->view->generate('MainView.php', 'TemplateView.php');
		
		$newModel = NULL;
		$newView = NULL;

	}

		function showGenresAction()
	{
		$newModel = new MainModel();
		$newView = new MainView();
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

	function showAuthorsAction()
	{
		$newModel = new MainModel();
		$newView = new MainView();
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

	function genreAction($genre="All")
	{
		echo "Showing by genre\n";
		echo "You're want $genre";
	}

	function authorAction($author="All")
	{
		echo "Showing by author";
		echo "\n$author";
	}

	function viewAction($id=1)
	{
		echo "Showing book page";
	}
}