<?php
$food = [
    'Ice Cream' => [
        'Chocolate',
        'Strawberry',
        'Vanilla',
        'Matcha'

    ],
    'Deserts' => [
        'Cream Crepe',
        'Waffle',
        'CheeseCake',
        'Brownies'
    ],
    'Main Dish' => [
        'Mee Goreng',
        'Nasi Pattaya',
        'Mee Kari',
        'Nasi Goreng Ayam Madu Blackpepper'
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
     <h1> Welcome to Sweet Cafe</h1>
    <table>
        <?php
        foreach ($food as $myfood => $value) {
            echo "<tr></tr>";
            echo "<tr> <th>$myfood</th>";

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