<?php

class RecipeCollection {
    private $title;
    private $recipes = array();

    public function __construct($title = null) {
        $this -> setTitle($title);
    }

    public function setTitle($title) {
        if(empty($title)) {
            $this -> title = null;
        }else {
            $this->title = ucwords($title);
        }	
    
    }

    public function getTitle() {
        return $this->title;
    }

    public function addRecipe($recipe) {
        $this -> recipes[] = $recipe;
    }

    public function getRecipes() {
        return $this -> recipes;
    }
}



?>