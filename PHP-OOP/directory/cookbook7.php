<?php

include "magic_constants.php";
include "render4.php";
include "recipecollection1.php";
include "inc/recipes.php";


$lemon_chicken = new Recipe("Italian Lemon Chicken");

$lemon_chicken->addIngredient("Pasta", 1 ,"lb");
$lemon_chicken->addIngredient("Chicken Breast", 2 ,"lb");
$lemon_chicken->addIngredient("olive oli", 1 ,"lb");
$lemon_chicken->addIngredient("garlic, chopped", 2 ,"tbsp");
$lemon_chicken->addIngredient("lemon juice", 25 ,"cup");
$lemon_chicken->addIngredient("sugar", 5 ,"tsp");
$lemon_chicken->addIngredient("parsley", 2 ,"tsp");
$lemon_chicken->addIngredient("oregano", 2 ,"tsp");
$lemon_chicken->addIngredient("basil", 1 ,"tbsp");
$lemon_chicken->addIngredient("parnesian cheese to taste");
$lemon_chicken->addInstructions("Cook pasta according to package directions");
$lemon_chicken->addInstructions("In a large skillet on medium high heat, asute garlic in olive oil for 3 minutes.Cut Chicken into bite sized pieces");
$lemon_chicken->addInstructions("Add additional items to sauce pan and cover for 5 minutes or until chicken is almost completely white.");
$lemon_chicken->addInstructions("Remove lid and cook until reduced to a thick sauce.");
$lemon_chicken->addInstructions("Serve over pasta with parmesian cheese to taste.");
$granola_muffins = new Recipe("Granola Muffins");
$granola_muffins->addIngredient("egg" ,2);
$granola_muffins->addIngredient("sugar" ,.25,"Cup");
$granola_muffins->addIngredient("oli" ,5,"cup");
$granola_muffins->addIngredient("nilk" ,1, "cup");
$granola_muffins->addIngredient("vanilla" ,1, "tso");
		
// echo Render::displayRecipe($granola_muffins);
echo Render::listRecipes($lemon_chicken -> getRecipeTitles());
//var_dump($lemon_chicken);


?>