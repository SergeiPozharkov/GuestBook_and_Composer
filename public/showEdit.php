<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php

include "../vendor/autoload.php";

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guest_book",
    "table" => "ved"
];

$table = new \W1020\Table($config);

$sql = "SELECT * FROM `ved` WHERE `id` = $_GET[id]";

foreach ($table->runSQL($sql) as $res) {
    $result = $res;
}

?>
<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <h1>Update</h1>
            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?= $result['id'] ?>">
                <input type="text" name="fio" value="<?= $result['fio'] ?>"><br>
                <input type="text" name="zp" value="<?= $result['zp'] ?>"><br>
                <input type="submit" class="btn btn-warning" value="Edit">
            </form>
        </div>
        <div class="col">

        </div>
    </div>
</div>

</body>
</html>
