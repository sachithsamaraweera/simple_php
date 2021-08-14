<?php

require_once('login.php');
$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) die("Fetal Error");
else {
    $query = "SELECT * FROM classics";
    $result = $conn->query($query);

    if (!$result) {
        die("Fatal Error");
    } else {
        $rows = $result->num_rows;

        for ($j = 0; $j < $rows; ++$j) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            echo "Author:" . $row['author'] . '<br>';
            echo "Title:" . $row['title'] . '<br>';
            echo "Type:" . $row['type'] . '<br>';
            echo "Year:" . $row['year'] . '<br>';
            echo "<br><hr>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>