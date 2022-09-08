<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link type="text/css" rel="stylesheet" href="admin.css">
</head>
<body>



<?php

require_once ('db_config.php');

echo "<br><br>";

$arrayTitle=array();

$user = $conn->query("SELECT * FROM training")->fetchAll();
// and somewhere later:
foreach ($user as $row) {
    array_push($arrayTitle,$row['title']);
}

$arrayTitle=array_unique($arrayTitle);

echo '
<table>
<tr>
        <th class="column1">Title</th>
        <th class="column2">Block</th>
        <th class="column2">Unblock</th>
    </tr>
</table>
';

foreach ($arrayTitle as $title) {

    echo '
<table>
    <tr>
        <td class="column1">'.$title.'</td>
        <td class="column2"><a href="admin2.php?admin='.$title.'" target="blank">Block</a></td>
        <td class="column2"><a href="admin2.php?admin2='.$title.'" target="blank">Unblock</a></td>
    </tr>
</table>';

}

echo "<br><br>";

echo '
<table>
<tr>
        <th class="column3">User</th>
        <th class="column4">Name</th>
        <th class="column4">Surname</th>
        <th class="column2">Block</th>
        <th class="column2">Unblock</th>
    </tr>
</table>';

$data = $conn->query("SELECT * FROM users")->fetchAll();
// and somewhere later:
foreach ($data as $row) {

    echo '
<table>
    <tr>
        <td class="column3">'.$row['id'].'</td>
        <td class="column4">'.$row['fname'].'</td>
        <td class="column4">'.$row['sname'].'</td>
        <td class="column2"><a href="admin2.php?admin3='.$row['id'].'" target="blank">Block</a></td>
        <td class="column2"><a href="admin2.php?admin4='.$row['id'].'" target="blank">Unblock</a></td>
    </tr>
</table>';
}

echo "<br><br>";

?>

</body>
</html>