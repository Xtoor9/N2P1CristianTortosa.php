<?php
session_unset();
?>
<html>
<head>
 <title>Mi web de peliculas</title>
</head>
<body>
 <form method="post" action="secundario.php">
  <p>Pon tu puto Usuario:
   <input type="text" name="Usuario"/>
  </p>
  <p>Introduze la contraseña:
   <input type="password" name="Contraseña"/>
  </p>
  <p>Introduze el telefono:
   <input type="text" name="Telefono"/>
  </p>
  <p>
   <input type="submit" name="submit" value="Submit"/>
  </p>
 </form>
</body>
</html>


<?php
$mipelifav = urlencode("My little bitch");
echo "<a href='secundario.php?favpelicula=$mipelifav'>";
echo "Click aquí para descubrir cuál es mi película favorita!";
echo "</a>";
?>



<?php
date_default_timezone_set("Spain/Barcelona");
$leapyear = date("L");
if ($leapyear == 1) {
echo "Hooray! It\"s a leap year!";
}
else {
echo "Aww, sorry, mate. No es un año bisiesto.";
}
?>

<?php
$mipelifav = urlencode("Go");
echo "<a href='N2P1CristianTortosaComments.php?favpelicula=$mipelifav'>";
echo "Click aquí para las notas";
echo "</a>";
?>

</body>
</html>


<?php
session_start();
setcookie("Usuario","Xtoor",time()+30);
$_SESSION['authusuario'] = 1;
?>
