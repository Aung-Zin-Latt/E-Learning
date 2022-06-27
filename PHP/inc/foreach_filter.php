<?php

$filter = array();
$status = 'all';


$list[] = [
    'title' => 'Laundry',
    'priority' => 1,
    'due' => '07/11/2016',
    'complete' => true,
];

$list[] = [
    'title' => 'Dishes',
    'priority' => 1,
    'due' => '07/11/2016',
    'complete' => false,
];

$list[] = [
    'title' => 'Dust',
    'priority' => 1,
    'due' => '07/11/2016',
    'complete' => true,
];

foreach($list as key => $item) {
    if($status === 'all' || $item['complete'] === $status) {
        $filter[] = $key;
    }
    //var_dump($item['complete']);
}
//var_dump($status, boolval('all'), $status === 'all');
//var_dump($filter);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Title</th>";
echo "<th>Priority</th>";
echo "<th>Complete</th>";
echo "</tr>";

foreach($filter as $id) {
    echo "<tr>";
    echo "<td>" . $list[$id]['title'] . "</td>";
    echo "<td>" . $list[$id]['priority'] . "</td>";
    echo "<td>";
    if($list[$id]['complete']) {
        echo "Yes";
    }else {
        echo "No";
    }
    echo "</td>";
    echo "</tr>";
}
echo "</table>";


?>