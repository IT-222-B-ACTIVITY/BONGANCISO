<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .nizzler{
     display: flex;
     width: 100%;
     justify-content: center;
     align-items: center;

    }
</style>
<body>  
    <div class="nizzler">
    <br>

    <?php
   function Rectangle() {
    for ($x = 0; $x < 7; $x++) {
        for ($y = 0; $y <= 15; $y++) {
            echo "* &nbsp ";
        }
        echo "<br>";
    }
}
Rectangle();
    ?>
    <br>
<?php
   function Square() {
    for ($x = 0; $x < 7; $x++) {
        for ($y = 0; $y < 7; $y++) {
            echo "* &nbsp ";
        }
        echo "<br>";
    }
}
Square();
    ?>
<br>
<?php
   function rhombus() {
    for ($x = 1; $x <= 5; $x++) {
        for ($y = 1; $y <= 5 - $x; $y++) {
            echo "&nbsp;&nbsp; ";
        }
        for ($y = 0; $y <= 7; $y++){
            echo "* &nbsp";
        }
        echo "<br>";
    }
}
rhombus();
    ?>
<br>
<?php
   function parallelogram() {
    for ($x = 1; $x <= 5; $x++) {
        for ($y = 1; $y <= 5 - $x; $y++) {
            echo "&nbsp;&nbsp;";
        }
        for ($y = 0; $y <= 15; $y++){
            echo "* &nbsp";
        }
        echo "<br>";
    }
}
parallelogram();
    ?>
<br>
    <?php
        function trapezoid(){
            $i = (10 - 6) / (5 - 1);
            $gay = 0;
            for($x = 0; $x < 9; $x++){
                $width = 7 + $gay;
                for($y = 0; $y < $width; $y++){
                    echo "* &nbsp";
                }
                echo "<br>";
                $gay += $i;
            }
        }
        trapezoid();
    
    ?>




</div>
</body>
</html>
