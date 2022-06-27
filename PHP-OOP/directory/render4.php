<?php 

class Render {
    public function __toString() {
		$output = "The following methods are available for " . __CLASS__ . " objects: <br>";
		$output .= implode("<br>", get_class_methods(__CLASS__)); 
        return $output;
    }

    public static function listRecipes($titles) {
        asort($titles);
        return implode("<br>", $titles);
    }
    
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