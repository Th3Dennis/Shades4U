<?php
include_once("model/Model.php");


class Controller {

    public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 

    public function invoke()
	{
		if (!isset($_GET['sunglasses']))
		{
			// no special book is requested, we'll show a list of all available books
			$sunglasses = $this->model->getSunglassesList();
			include 'view/Shop.php';
		}
		else
		{
			// show the requested book
			$sunglasses = $this->model->getBook($_GET['book']);
			include 'view/viewbook.php';
		}
	}


}


