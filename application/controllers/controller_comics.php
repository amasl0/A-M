<?php


class Controller_Comics extends Controller
{
    function action_index(){
        $this->view->generate('comics_view.php', 'template_view.php');
    }
}