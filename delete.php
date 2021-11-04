<?php
if !(empty($_GET['id'])){
// code.. }
$sql= "DELETE FROM 'users' WHERE 'users'. 'id' = $_GET[id]";
$connect->query($sql);
if ($connect -> affected_rows){
}else
  {
header("'location: ../bazy 04.11.php?error=1&info= 'Nie usunięto rekordu!'
    id=$id");
    echo $connect -> affected_rows;
  }
  $connect -> (affected_rows)
else{
  header ('location: ../bazy 04.11.php')
}
?>
