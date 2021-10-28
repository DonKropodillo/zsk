<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
    $connect = new mysqli ("localhost", "root", "", 'users');
    $sql = "SELECT * FROM 'users';";
    $result = $connect-> query($sql);
    $row = $result -> fetch_assoc();
    while ($row = $result->fetch_assoc()) {
      // code...
      echo <<< ROW
      Id: $row[id]<br>
      Imię i nazwisko: $row[name] $row[surmane]<br>
      Data urodzenia: $row[birthday]<hr>
ROW;
    }
    print_r($row);
    ?>
  </body>
</html>
