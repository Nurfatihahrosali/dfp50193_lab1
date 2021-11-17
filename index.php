<?php
$menu = [
    'Laptop' => [
        'HP',
        'Asus',
        'Acer',
        'Apple'

    ],
    'Smartphone' => [
        'Samsung',
        'Vivo',
        'Huawei',
        'Realme'
    ],
    'Smartwatch' => [
        'Fossil',
        'Motorola',
        'Huawei',
        'Sony'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 1</title>
    <link rel="stylesheet" href="style.css">

    
</head>

<body>
    <table>
        <?php
        foreach ($menu as $mymenu => $value) {
            echo "<tr></tr>";
            echo "<tr> <th>$mymenu</th>";

            foreach ($value as $menulist) {
                echo "<td>$menulist</td>";
            }
        }
        
        echo "</tr>"
        ?>
    </table>
</body>

</html>
</body>
</html>