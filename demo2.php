<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo2</title>
</head>

<body>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Pasword</th>
            <th>Permission</th>
        </tr>
        <?php
    $account = [
        [
            'id' => 1,
            'name' => 'Quách Trang',
            'email'  => 'trang@gmail.com',
            'password' => '123456',
            'type' => 1
        ],
        [
            'id' => 2,
            'name' => 'Quách Trang1',
            'email'  => 'trang1@gmail.com',
            'password' => '123456',
            'type' => 1
        ],
        [
            'id' => 3,
            'name' => 'Quách Trang2',
            'email'  => 'trang2@gmail.com',
            'password' => '123456',
            'type' => 1
        ],
        [
            'id' => 4,
            'name' => 'Quách Trang3',
            'email'  => 'trang3@gmail.com',
            'password' => '123456',
            'type' => 1
        ],
        [
            'id' => 5,
            'name' => 'Quách Trang4',
            'email'  => 'trang4@gmail.com',
            'password' => '123456',
            'type' => 0
        ],
        [
            'id' => 6,
            'name' => 'Quách Trang5',
            'email'  => 'trang5@gmail.com',
            'password' => '123456',
            'type' => 0
        ],
    ];
        foreach ($account as $item) {
            if ($item['type'] == 1) {
                echo "<tr>
                <td>".$item['id']."</td>
                <td>".$item['name']."</td>
                <td>".$item['email']."</td>
                <td>".$item['password']."</td>
                <td>".$item['type']."</td>
                </tr>";
            }
        }
    ?>
    </table>
</body>

</html>