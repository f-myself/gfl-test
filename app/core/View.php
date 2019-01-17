<?php

class View
{
	function generate($content, $template, $data, $genres=NULL, $authors=NULL)
	{
		include "app/views/".$template;
		$this -> allGenres = $genres;
		$this -> allAuthors = $authors;
	}

	function thanks()
	{
		echo "<script type='text/javascript'>alert('Спасибо за заявку!');</script>";
	}
}