<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$consult=$_POST['texarea'];

if (isset($_POST['name'])) && !empty($_POST['name'])
    (isset($_POST['phone'])) && !empty($_POST['phone'])
    (isset($_POST['email'])) && !empty($_POST['email'])
    (isset($_POST['consult'])) && !empty($_POST['consult']){
        $enlaceBD = mysql_connect(localhost, roor, admin123) or die ("No se conecto a la BD");
        mysqli_select_db(abc, $enlaceBD) or die ("No se puede seleccionar BD");

        mysqli_querry("INSERT INTO `datoscontact`( `Nombres`, `Telefono`, `Email`, `Consulta`) VALUES ('$name', '$phone', '$email', '$consult')";
        echo "Datos enviados correctamente";
        else {
            "Error al enviar datos";
        }
    }
?>




