<?php
//Conexxion con la base de datos
//Constantes de conexion
define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'login');

//Conexion a la base de datos
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME) or
    die('Error al conectar a la base de datos');

//Iniciar sesion
session_start();

//Validar si se esta ingresando directamente sin loggeo
if (!$_SESSION) {
    header('location: index.html');
}

$id_usuario = $_SESSION['id'];
$consulta = "SELECT ciudad_log, email_log, telefono_log, edad_log, foto_log FROM login WHERE id_log = '$id_usuario'";

//Ejecutar consulta
$resultado = mysqli_query($conn, $consulta) or die(mysqli_connect_errno());

//Almacenar los datos en un arreglo asociativo
$fila = mysqli_fetch_array($resultado);
$ciudad = $fila['ciudad_log'];
$email = $fila['email_log'];
$telefono = $fila['telefono_log'];
$edad = $fila['edad_log'];
$foto = $fila['foto_log'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <table>
        <tr>
            <td align="right"> Usuario: <?php echo $_SESSION['nombre']; ?> </td>
        </tr>
        <tr>
            <td align="right"> Su ciudad de residencia es: <?php echo $ciudad; ?></td>
        </tr>
        <tr>
            <td align="right"> Su correo electronico es: <?php echo $email; ?></td>
        </tr>
        <tr>
            <td align="right"> Su telefono es: <?php echo $telefono; ?></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td align="right"><a href="desconectarUsuario.php"> Cerrar Sesión </a></td>
        </tr>
    </table>

</body>

</html>