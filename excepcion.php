<?php
// Funci�n que arroja una excepci�n
function checkNum($num) {
    if ($num > 1) {
    throw new Exception("Valor debe ser 1 o menor");
  }
  return true;
}

checkNum(2);
?>
