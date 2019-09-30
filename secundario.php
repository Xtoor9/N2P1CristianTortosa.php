<?php
session_start();
$_SESSION['Usuario'] = $_POST ["Cristian"] ?? 'nadie';
$_SESSION['authusuario'] = $_POST = 1;
$_SESSION['telofono'] = $_POST = ["93456789"];
?>
<?php
session_start();

//Check username and password information
if ($_SESSION['authusuario'] != 1){
    echo "Sorry, but you don't have permission to view this page!";
    //exit();    
}
?>
<html>
 <head>
  <title>Mi web de peliculas <?php echo $_GET['favpelicula'];?></title>
 </head>
 <body>
<?php
echo "Bienvenido a nuestra web, ";
echo $_SESSION["Usuario"];
echo "! <br/>";

echo "Mi pelicula favorita es: ";
echo $_GET['favpelicula'];
echo "! <br/>";

$pelirate = 9;
echo "La valoracion de mi pelicula favorita es: ";
echo $pelirate;

echo "Welcome to our site, ";
echo $_COOKIE["Usuario"];
echo "! <br/>";
?>
 </body>
</html>

<?php
session_start();

//Check user permission
if ($_SESSION['authuser'] != 1){
    echo "Sorry, but you don't have permission to view this page!";
    exit();    
}
?>





