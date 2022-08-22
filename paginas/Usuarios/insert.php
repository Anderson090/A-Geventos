<?php
$conn=new mysqli("localhost","CERBERUS-TEC","?Cerberus2022","Cuentas");
if($conn->connect_error){
die("Error;No se pudo conectar;" .$conn->connect_error);
}
else {echo"Se a registrado exitosamente $Nombre IP : $email \n" ;
$conn->query("localhost","CERBERUS-TEC","?Cerberus2022","Cuentas");

}
//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["Nombre"], $_POST["Apellido"], $_POST["Nombe_usuario"], $_POST["Telefono"], $_POST["email"], $_POST["Contraseña"]) and $_POST["Nombre"] !="" and $_POST["Apellido"]!="" and $_POST["Nombre_usuario"]!="" and $_POST["Telefono"] !="" and $_POST["email"] !="" and $_POST["Contraseña"] !=""){

//traspasamos a variables locales, para evitar complicaciones con las comillas:
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Nombre_usuario = $_POST["Nombre_usuario"];
$Telafono = $_POST["Telefono"];
$email = $_POST["email"];
$Contraseña = $_POST["Contraseña"];



//Preparamos la orden SQL
$consulta = "INSERT INTO Cuentas
 VALUES ('$Nombre','$Apellido','$Nombre_usuario','$Telafono','$email','$Contraseña')";

//Aqui ejecutaremos esa orden
$insert = mysqli_query($conn,$consulta);
$insert->close();

} else {

echo '<p>Por favor, complete el <a href="computadoras.html">formulario</a></p>';
}
?>