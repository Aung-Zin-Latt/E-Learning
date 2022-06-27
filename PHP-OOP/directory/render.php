<?php 

class Render {
	public static function displayRecipe($recipe) {
		return $recipe -> getTitle() . " by " . $recipe -> getSource();
	}
}

?>