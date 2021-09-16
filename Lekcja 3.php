<html>
<head>
<meta charset="utf-8">
</head>
<body>
  <h3> dane uzytkownika </h3>
  <from method= "post">
    <input tyoe= "text" name="name" value= "Janusz"> <br><br>
    <input tyoe= "text" name="surname" placeholder= "Podaj nazwisko"> <br><br>
    <input type="submit" value="Zatwierdź">
  </form>
  <?php
  if (isset($_POST['name'])){
    // echo
    //
    echo <<< L
      <hr>
      Imię: $_GET[name]<br>
      Nazwisko: {$_GET['surname']}
      L;
  }
  ?>
