<?php

require "app/models/MainModel.php";
require "app/lib/Send.php";

class MainController extends Controller
{
	function indexAction()
	{
		$newModel = new MainModel();
		$books = $newModel -> getBooks();
		$genres = $newModel -> getGenres();
		$authors = $newModel -> getAuthors();

		$this->view->generate('MainView.php', 'TemplateView.php', $books, $genres, $authors);
		
		$newModel = NULL;

	}

		function showGenresAction()
	{
		$newModel = new MainModel();
		$arr = $newModel -> getGenres();
		$newModel = NULL;
		$newView = NULL;
		return $arr;
	}

	function showAuthorsAction()
	{
		$newModel = new MainModel();
		$arr = $newModel -> getAuthors();
		$newModel = NULL;
		$newView = NULL;
		return $arr;
	}

	function getGenreAction($genre)
	{
		$newModel = new MainModel();
		$byGenre = $newModel -> getBookByGenre($genre);
		$genres = $newModel ->getGenres();
		$authors = $newModel -> getAuthors();

		$this->view->generate('MainView.php', 'TemplateView.php', $byGenre, $genres, $authors);
	}

	function getAuthorAction($author)
	{
		$newModel = new MainModel();
		$byAuthor = $newModel -> getBookByAuthor($author);
		$genres = $newModel -> getGenres();
		$authors = $newModel -> getAuthors();

		$this->view->generate('MainView.php', 'TemplateView.php', $byAuthor, $genres, $authors);
	}

	function viewAction($id)
	{
		$newModel = new MainModel();
		$byId = $newModel -> getBookById($id);
		$genres = $newModel -> getGenres();
		$authors = $newModel -> getAuthors();
		$this->view->generate('BookView.php', 'TemplateView.php', $byId, $genres, $authors);
	}
}