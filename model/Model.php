<?php

include_once("model/Sunglasses.php");

class Model {

    public function getSunglassesList()
	{
		// here goes some hardcoded values to simulate the database
		return array(new Sunglasses("Rayban Sonnenbrille SS21", "img/sunglasses/carouselNew/sunglasses_1.png"),new Sunglasses("Rayban Sonnenbrille mit blauen Gläser", "img/sunglasses/carouselNew/sunglasses_2.png"),new Sunglasses("Rayban Sonnenbrille mit blauen Gläser", "img/sunglasses/carouselNew/sunglasses_2.png"),new Sunglasses("Rayban Sonnenbrille mit blauen Gläser", "img/sunglasses/carouselNew/sunglasses_2.png"));
	}

    public function getBook($title)
	{
		// we use the previous function to get all the books and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		$allSunglasses = $this->getSunglassesList();
		return $allSunglasses[$title];
	}



}



?>