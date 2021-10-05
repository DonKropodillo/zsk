<<!doctype html>
<html>
     <head>
          <meta charset="UTF-8" />
          <title>Średni wiek</title>
     </head>
     <body>
       <h3> Ilosc osob w rodzinie </h3>
       <?php
         if (!isset($_POST['person'])) {
         echo <<< FORMCOUNTPERSON
         <from method="post">
           <input type="number" name="person" placeholder="Podaj ilość osob"><br><br>
           <input type="submit" value="Zatwierdź">
         </form>
         FORMCOUNTPERSON;
       }
       ?>

         <?php if (!empty($_POST['person'])){
         echo "<h3>Ilość osob w rodzinie: $_POST['person']</h3>";
         echo <<< FORMAGE
         <from method="post">
         <input type="number" name="person" placeholder="Podaj wiek osoby nr"><br><br>
         <input type="submit" value="Zatwierdź">
       </form>
}
FORMAGE;
}

          ?>
     </body>
</html>
