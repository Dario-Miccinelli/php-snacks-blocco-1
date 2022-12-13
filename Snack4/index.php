<!-- // Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$randArray = [];

while (count($randArray) < 15) {
  $randomNumb = rand(1, 1000);
  if (!in_array($randomNumb, $randArray))
    $randArray[] = $randomNumb;
}
var_dump($randArray);


?>