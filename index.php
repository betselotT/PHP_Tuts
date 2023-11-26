<?php
    echo 'hello world';
    $name = 'Aman';
    echo "<br/>";
    echo $name;
    $age = 20;

    define('NAME', 'Aman');

    $stringOne = 'My email is ';
    $stringTwo = 'betselot@gmail.com';
    echo "<br/>";
    echo $stringOne . $stringTwo;
    echo "<br/>";

    $name = 'Betsi';
    echo 'Hey, my name is ' . $name;
    echo "<br/>";
    echo "Hey, my name is $name";
    echo "<br/>";
    echo "We are in \"AASTU\"";
    echo "<br/>";
    echo 'We are in "AASTU"';
    echo "<br/>";
    echo $name[2];

    echo strlen($name);
    echo strtoupper($name);
    echo str_replace('i', 'u', $name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP File</title>
</head>
<body>
    <h1><?php echo 'hello world' ?></h1>
    <h1><?php echo $name ?></h1>
    <h1><?php echo $age ?></h1>
    <h1><?php echo NAME ?></h1>
</body>
</html>