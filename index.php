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
            echo "<tr> <th>$mymenu</th>";

            foreach ($value as $menulist) {
                echo "<td>$menulist</td>";
            }
        }
        
        echo "</tr>"
        ?>
        <!--  <tr>
            <th>Item 1</th>
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
        </tr>
        <tr>
            <th >Item 2</th>
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
        </tr>
        <tr>
            <th >Item 3</th>
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
        </tr> 
        -->
    </table>
</body>

</html>
</body>
</html>