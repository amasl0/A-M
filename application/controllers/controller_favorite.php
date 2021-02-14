<?php

class Controller_Favorite extends Controller
{

	function action_index()
	{
		$this->view->generate('favorite_view.php', 'template_view.php');
	}
}
