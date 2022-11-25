<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Михеев Д.Е. 211-362 lr9</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="/img/mospolytech-logo-white.png" alt="mospolytech-logo">
        </div>
        <div class="title">
            <h1>Лабораторная работа №9</h1>
            <h2>Михеев Даниил Евгеньевич</h2>
            <h2>211-362</h2>
        </div>
    </header>
    <main>
        <?php

            $x = 0;
            $encounting = 100;
            $step = 1;
            $type = "E";
            $result;
            $max = PHP_INT_MIN;
            $min = PHP_INT_MAX;
            $sum = 0;
            $average;

            function f($x) {
                if ($x<=10) {
                    return $x**2*($x-2)+4;
                }
                else if ($x>10 && $x<20) {
                    return 11*$x - 55;
                }
                else if ($x>=20) {
                    return (($x-100)/(100-$x)) - ($x/10) + 2;
                }
            }

            if ($type == 'B') echo '<ul>';
            else if ($type == 'C') echo '<ol>';
            else if ($type == 'D') echo '<table border="1">';
            else if ($type == 'E') echo '<div class="block_layout">';
                
            for ($i = 0; $i < $encounting; $i++, $x += $step) {
                $result = f($x);
                if ($type == 'A') {
                    echo 'f(' . $x . ') = ' . $result;
                    if( $i < $encounting-1 ) echo '<br>';
                }
                else if ($type == 'B') echo '<li>f(' . $x . ') = ' . $result . '</li>';
                else if ($type == 'C') echo '<li>f(' . $x . ') = ' . $result . '</li>';
                else if ($type == 'D') echo '<tr><td>' . $i .'</td><td>f(' . $x . ')</td><td>' . $result . '</td></tr>';
                else if ($type == 'E') echo '<div>f(' . $x . ') = ' . $result . '</div>';

                
                if ($result > $max) $max = $result;
                if ($result < $min) $min = $result;
                $sum += $result;
            }

            if ($type == 'B') echo '</ul>';
            else if ($type == 'C') echo '</ol>';
            else if ($type == 'D') echo '</table>';
            else if ($type == 'E') echo '</div>';

            $average = $sum / $encounting;
        ?>
    </main>
    <footer>
        <div>Московский политехнический университет</div>
        <div><?php echo 'type: ' . $type ?></div>
        <div><?php echo 'max: ' . $max ?></div>
        <div><?php echo 'min: ' . $min ?></div>
        <div><?php echo 'average: ' . $average ?></div>
    </footer>
</body>

</html>