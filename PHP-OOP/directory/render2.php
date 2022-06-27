<?php 

class Render {
	public static function displayRecipe($recipe) {
		$output = "";
		$output .=  $recipe -> getTitle() . " by " . $recipe -> getSource();
		$output .= "<br>";
		$output .= implode(", ", $recipe -> getTags());
		$output .= "<br>";
		foreach($recipe -> getIngredients() as $ing) {
			$output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
			$output .= "<br>"; 
		}
		$output .= "<br>";
		$output .= implode("<br>", $recipe -> getInstructions());
		$output .= "<br>";
		$output .= $recipe -> getYield();
		return $output;

	}
}

?>