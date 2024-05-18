<?php

  include 'form.inc.php';

  $num1 = $_POST['num1Inserted'];
  $num2 = $_POST['num2Inserted'];
  $unit1 = $_POST['unit1'];

  $calculator = new Calc($num1, $num2, $unit1);
  $calculator->FormulaMethod();

 ?>
 <script>
  window.location.href = "formula.php?result=<?php echo $calculator->getResult();?>";

 </script>