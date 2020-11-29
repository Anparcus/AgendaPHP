<?php 

//credenciales de la base de datos
define('DB_USUARIO', 'root');
define('DB_PASSWORD', 'mysql');//La conexion local no tiene password asi que no ponemos nada y lo dejamos vacio, por defecto es 'root'
define('DB_HOST', 'localhost');
define('DB_NOMBRE', 'agendaphp');

$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE );//puede haber un quinto parametro que sería el puerto por si falla la conexion de arrriba y todo esta ok

//echo $conn->ping();//si aparece un 1 es correcta, un 0 o nada es incorrecta

?>

