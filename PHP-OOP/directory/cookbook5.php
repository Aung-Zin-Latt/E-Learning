<?php

    include "magic_constants.php";
    include "render3.php";

	$recipe1 = new Recipe("my first recipe");
	$recipe1 -> setSource = "Grandma Holligan";
	$recipe1 -> addIngredient("egg", 1); 
	$recipe1 -> addIngredient("flour", 2, "cup"); 


	$recipe2 = new Recipe("my second recipe");
	$recipe2 -> setSource = "Betty Crocker";

				
	
	$recipe1->addInstruction("This is my first instruction.");
	$recipe1 -> addInstruction("This is my second instruction.");


	$recipe1 -> addTag("Breakfast");
	$recipe1 -> addTag("Main Course");


	$recipe1 -> setYield("G servings");
	
    echo $recipe1;
    echo new Render();
	//echo Render::displayRecipe($recipe1);
 
?>