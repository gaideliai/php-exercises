<?php

require __DIR__ . '/bootstrap.php';

_d($_GET);

if (isset($_GET['redir'])) {
    header("Location: $URL"."blue.php");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: red;
        }
    </style>    
</head>
<body>
    <a href=<?=$URL.'red.php?redir'?> style="color: black;">Red</a><br>
</body>
</html>