<?php

Class Recipe {
    public $title;
    //public $ingredients = array();
    //public $instructions = array();
    //public $yield;
    //public $tag = array();
    public $source = "Alena Holligan";
    public function displayRecipe() {
        return $this -> title . " by " . $this -> source;
    }
}

$recipe1 = new Recipe();
$recipe1 -> source = "Grandma Holligan";
$recipe1 -> title = "My First Recipe";

$recipe2 = new Recipe();
$recipe2 -> source = "Betty Crocker";
$recipe2 -> title = "My Second Recipe";

echo $recipe1 -> displayRecipe();
echo "<br>";
echo $recipe2 -> displayRecipe();


?>