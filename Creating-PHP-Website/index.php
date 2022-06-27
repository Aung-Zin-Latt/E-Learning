<?php
include("Includes/functions.php");
include("Includes/data.php");

$pageTitle = "Personal Media Library";
$section = null;

include('Includes/header.php');

 ?>

    <div class="section catalog random">
        <div class="wrapper">
            <h2>May we suggest Something?</h2>
            <ul class="items">
                <?php

                //Random Fun with Arrays
                $random = array_rand($catalog, 4);

                foreach ($random as $id) {
                    echo get_item_html($id, $catalog[$id]);
                }
                ?>
            </ul>

        </div>

    </div>

<?php include('Includes/footer.php'); ?>