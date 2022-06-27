<?php 

// $date = new DateTime('tomorrow');

$raw = '28. 09. 1998';
$date = DateTime::createFromFormat('d. m. Y', $raw);

 ?>
 <p>The output date is: <?php echo $date->format('m/d/y'); ?></p>