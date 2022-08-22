<?php require_once 'dbconfig.php';
try{
    $conn=new PDO("mysql:host=$host;dbname=$Cuentas",$CERBERUS-TEC,$Cerberus2022);
    echo "Conexión a $dbname en $host exitosa";
}catch(PDOException $pex){
    die("NO se pudo coonectar a $dbname :" .$pex -> getMessage());
}
finally{// esto se ejecuta haya o no error
    $conexion = null;
}

?>