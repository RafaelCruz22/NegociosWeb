<?php
session_start();

$_SESSION["username"]="usuario";

function addnocuenta($numcuenta){
    $cuentas =array();
    if(isset($_SESSION["cuentas"])){
        $cuentas=$_SESSION["cuentas"];
    }
    foreach($cuentas as $cuenta => $contador){
        if($cuenta == $numcuenta){
            $contador ++;
            $haschange=true;
            $cuentas[$cuenta] = $contador;
        }
    }

if(isset()
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Impresines de ID</title>
</head>

<body>
     <form action="A.php" method="post">
            <label for="txtData">Id </label>
            <input type="text" id="txtID" name="txtID"/>
             <input type="submit" name="btnAdd" id="btnAdd" value="Enviar Id 1"/>
            </br>
            <label for="txtData">Id </label>
            <input type="text" id="txtID" name="txtID"/>
             <input type="submit" name="btnAdd1" id="btnAdd1" value="Enviar Id 2"/>
            </br>
            <label for="txtData">Id </label>
            <input type="text" id="txtID" name="txtID"/>
             <input type="submit" name="btnAdd2" id="btnAdd2" value="Enviar Id 3"/>
            </br>
            <label for="txtData">Id </label>
            <input type="text" id="txtID" name="txtID"/>
            <input type="submit" name="btnAdd3" id="btnAdd3" value="Enviar Id 4"/>
            </br>
        </form>



</body>
</html>
