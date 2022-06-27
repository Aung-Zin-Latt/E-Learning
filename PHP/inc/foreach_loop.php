<?php

$list[] = [
    'title' => 'Ko Ko',
    'priority' => 1,
    'due' => '07/11/2016',
    'complete' => 1,
];

$list[] = [
    'title' => 'Dishes',
    'priority' => 4,
    'due' => '07/11/2016',
    'complete' => 0,
]

$list[] = [
    'title' => 'Dust',
    'priority' => 6,
    'due' => '07/11/2016',
    'complete' => 0,
]

foreach($list as $key => $item) {
    echo $key . ' = ' . $item['title'] . "<br>";
}

echo "<table>";
echo "<tr>";
echo "<th>Title</th>";
echo "<th>Priority</th>";
echo "<th>Due Date</th>";
echo "<th>Complete</th>";
echo "</tr>";

foreach($list as $item) {
    echo "<tr>";
    echo "<td>" . $item['title'] . "</td>";
    echo "<td>" . $item['priority'] . "</td>";
    echo "<td>" . $item['due'] . "</td><br>";
    echo "<td>";
    if($item['complete']) {
        echo "Yes";
    }else {
        echo "No";
    }
    echo "</td>";
    echo "</tr>";
}
echo "</table>";


?>