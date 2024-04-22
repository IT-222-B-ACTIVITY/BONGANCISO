<?php
// rHOMBUS pattern
$size = 5;
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= $size; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
// Hourglass pattern
for ($i = $size - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $size - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= $i * 2; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// Kite pattern
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= $i * 2 - 1; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = $size - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $size - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= $i * 2 - 1; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// Cylinder pattern
$radius = 5;
for ($i = 1; $i <= $radius * 2; $i++) {
    for ($j = 1; $j <= $radius * 2; $j++) {
        $distance = sqrt(pow($i - $radius, 2) + pow($j - $radius, 2));
        if ($distance > $radius - 0.5 && $distance < $radius + 0.5) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// Hexagon pattern
$size = 5;
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size + $i - 1; $j++) {
        if ($j <= $size - $i) {
            echo "&nbsp;&nbsp;";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}
for ($i = $size - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $size + $i - 1; $j++) {
        if ($j <= $size - $i) {
            echo "&nbsp;&nbsp;";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}
?>
