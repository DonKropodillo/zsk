<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<<?php
echo "dzień-miesiąc-rok".date('d-m-Y').'br';
echo date('d-m-Y').'<br>';
echo date('d-m-Y').'<br>';
echo date('d-F-Y'). '<br>';

setlocale(LC_ALL, 'polish');
echo strftime('%d %B %Y').'<br>';

echo date('G-i-s'). '<br>';
echo date('G-i-sa'). '<br>';
echo date('H-i-s'). '<br>';


 ?>
 <script> setTimeout(function(){
   winodw.location.reload();
 },1000);
 </script>
 <?php
 $data = getdate()

 echo "<pre>";
 print_r($data);
 echo"</pre>"
