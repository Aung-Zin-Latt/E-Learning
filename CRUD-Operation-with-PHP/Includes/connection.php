<?php

// try {
//     $db = new PDO("sqlite:" . __DIR__ . "/database.db");
//     $db->exec("CREATE TABLE groups (id INT PRIMARY KEY, user TEXT, email TEXT)");
//     $db->exec("INSERT INTO groups (id, user, email) VALUES (1, 'mg mg', 'aa@gmail.com');");
//     $db->exec("INSERT INTO groups (id, user, email) VALUES (2, 'su su', 'susu@gmail.com');");
//     $db->exec("INSERT INTO groups (id, user, email) VALUES (3, 'kyaw kyaw', 'kyaw@gmail.com');");

//     print "<table border=1>";
//     print "<tr><td>Id</td><td> User Name</td><td> Email</td></tr>";

//     $result = $db->query('SELECT * FROM groups');

//     foreach ($result as $row) {
//         print "<tr><td>" . $row['id'] . "</td>";
//         print "<td>" . $row['user'] . "</td>";
//         print "<td>" . $row['email'] . "</td></tr>";
//     }
//     print "</table>";

// } catch (Exception $e) {
//     //echo "Unable to connect";
//     echo $e->getMessage();
// }

try {
    $db = new PDO("sqlite:" . __DIR__ . "/database.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    $e->getMessage();
    exit;
}

?>