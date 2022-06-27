<?php

include "recipe_details.php";
include "render1.php";

$recipe1 = new Recipe();
$recipe1 -> setSource = "Grandma Holligan";
$recipe1 -> setTitle("my first recipe");
$recipe1 -> addIngredient("egg", 1);
$recipe1 -> addIngredient("flour", 2, "cup");

$recipe1 -> addInstruction("This is my first instruction.");
$recipe1 -> addInstruction("This is my second instruction.");

$recipe1 -> addTag("Breakfast");
$recipe1 -> addTag("Main Course");

$recipe1 -> setYield("G servings");

echo Render::displayRecipe($recipe1);
//echo $recipe1 -> displayRecipe();
//echo "<br>";
//echo $recipe2 -> displayRecipe();


>