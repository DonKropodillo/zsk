<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>uzytkownicy</title>
  </head>
  <body>
    <h4>uzytkownicy</h4>
      <?php
        $connect = new mysqli("localhost","root","","zsk_4cg2_baza1");

        $sql = "SELECT * FROM `users`";
        $result = $connect->query($sql);
        // print_r($result);

        while ($rows = $result->fetch_assoc()) {
          echo<<<ROW
          <tr>

        <td>  Id: $rows[id]<br> </td>
        <td>  Imie: $rows[name]<br> </td>
        <td>  Nazwisko: $rows[surname]<br> </td>
        <td>  Rok: $rows[birthday] </td>
        <td><a href="scripts/delete.pl?"id=$rows[id]>Usuń</a></td>
        </tr>

          <hr>
          </tr>
ROW;
        }


       ?>
  </body>
</html>
