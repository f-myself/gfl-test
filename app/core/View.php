<?php

class View
{
	function genreate($content, $template, $data=null)
	{
		include "app/views/".$template;
	}
}