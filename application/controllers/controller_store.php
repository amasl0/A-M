<?php

class Controller_Store extends Controller
{
	
	function action_index()
	{
		$this->view->generate('store_view.php', 'template_view.php');
	}
}
