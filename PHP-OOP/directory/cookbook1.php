<?php

    include "adding_getter_setter.php";
	$recipe1 = new Recipe();
	$recipe1 -> setSource = "Grandma Holligan";
	$recipe1->setTitle ( "my first recipe" );
	$recipe1 -> addIngredient("egg", 1); 
	$recipe1 -> addIngredient("flour", 2, "cup"); 


	$recipe2 = new Recipe();
	$recipe2 -> setSource = "Betty Crocker";
	$recipe2->setTitle ( "my second recipe" ) ;

				
	echo $recipe1->getTitle();
	foreach ($recipe1 -> getIngredients() as $ing) {
		echo "<br>";
		echo $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
	}

	$recipe1->addInstruction("This is my first instruction.");
	$recipe1 -> addInstruction("This is my second instruction.");

	echo "<br>";
	echo implode("<br>", $recipe1 -> getInstructions());

	$recipe1 -> addTag("Breakfast");
	$recipe1 -> addTag("Main Course");

	echo "<br>";
	echo implode(", ", $recipe1 -> getTags());

	$recipe1 -> setYield("G servings");
	echo "<br>";
	echo $recipe1 -> getYield();
	echo $recipe1 -> getSource();
 //    echo $recipe1->displayRecipe();
 //    echo "<br>";
	// echo $recipe2->displayRecipe();

?>