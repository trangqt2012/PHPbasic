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
    function getBla($in)
    {
        if (mb_strlen($in) > 15) {
            $loop = 14;
            while ($loop < mb_strlen($in) && mb_substr($in, $loop, 1) != ' ') {
                echo $loop.mb_substr($in, $loop, 1) . '<br>';
                $loop++;
            }
            echo $loop;
            echo mb_substr($in, $loop, 1);
            echo $out = mb_substr($in, 0, $loop) . "...";
        } else {
            echo $in;
        }
    }
    $in = "Như Chẳng Thể Quên Đi Khi Lỡ Yêu Rồi (Prod. by 1nG) (Official MV)";
    getBla($in);


$x =  "Chào mừng đến với Cloudways"; // sẽ trả về độ dài của chuỗi đã cho
echo strlen("Chào mừng đến với Cloudways");
?>
</body>

</html>