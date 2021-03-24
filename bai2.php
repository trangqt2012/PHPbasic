<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo 'Tomorrow I \'ll learn PHP global variables. 
    <br>
    This is a bad command : del c:\\*.*'
    ?>

    <form action="" method="post">
    <input type="number" name="numb" id="">
    <input type="submit" value="Submit number">
    </form>

    <?php
    if (isset($_POST['numb']) ) {
    $length = strlen($_POST['numb']);
    $numb = (string)$_POST['numb'];
    $loop=0;
    $total=0;

    while ($loop < $length)
    {
        $total += pow($numb{$loop},$length); 
        $loop++;
    }

    if ($total===(int)$_POST['numb']) {
        echo $total;
    }else{
        echo 'Not an Armstrong number';
    }
    }

    ?>

    <?php

    ?>
</body>
</html>