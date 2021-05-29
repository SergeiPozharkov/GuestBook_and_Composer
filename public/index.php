<?php

include '../vendor/autoload.php';

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guest_book",
    "table" => "ved"
];


$table = new \W1020\Table($config);

if (!empty($_POST) != "") {
    $table->ins($_POST);
    header("Location: ?");
}

if (!empty($_GET) != "") {
    $table->del($_GET['id']);
    header("Location: ?");
}

$sqlTable = $table->get();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<table class="table table-success table-striped">
    <?php
    echo "<th>Fio</th><th>Zp</th><th>Delete</th><th>Update</th>";
    foreach ($sqlTable as $value) {
        echo "<tr><td>$value[fio]</td><td>$value[zp]</td><td><a class='btn btn-danger' href='index.php?id=$value[id]'>Delete</a>
        </td><td><a class='btn btn-success' href='showEdit.php?id=$value[id]'>Update</a></td></tr>";
    }
    ?>
</table>

<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col" id="form_insert">
            <h1>Insert</h1>
            <form action="?" method="post">
        <textarea name="fio">
        </textarea><br>
                <input type="text" name="zp"><br>
                <input type="submit" class="btn btn-primary" value="OK">
            </form>
        </div>
        <div class="col">

        </div>
    </div>
</div>

</body>
</html>