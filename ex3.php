<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a number</title>
</head>

<body>
    <form action="" method="post">
        <label for="num">Enter Number </label>
        <input type="number" name="num" id="num">
        <input type="submit" name="submit">
    </form>
</body>

</html>
<?php

if (isset($_POST['num'])) {
    $num = $_POST['num'];
    $rev = 0;
    while ($num > 1) {
        $rem = $num % 10;
        $rev = ($rev * 10) + $rem;
        $num = ($num / 10);
    }
    echo "<h1>Reverse number is: $rev"."</h1>";
}
?>