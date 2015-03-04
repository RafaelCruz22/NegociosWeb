<?php
session_start();

$_SESSION["username"]="usuario";


$contenidosession = "";

function agregarsession($dato){

    return "As contenido: " . $dato;    
}
function eliminarsession($dato){
    return "Es contenido: " . $dato;
}

if(!isset($_SESSION["click"])){
    $_SESSION["click"]=0;
}

if(isset($_POST["btnadd"])){
   $contenidosession .= agregarsession($_POST["txtdata"]);
   $_SESSION["click"] ++;
}
if(isset($_POST["btnsubs"])){
   $contenidosession = eliminarsession($_POST["txtdata"]);
}


?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Funciones y session</title>
</head>

<body>
    <h1>Funciones y el arreglo session</h1>
    <form action="ej5.php" method="post">
        <label for="txtdata">data</label>
        <input type="text" id="txtdata"
        name="txtdata" />
        <br/>
        <input type="submit" name="btnadd"
        id="btnadd" value="agregar a la sesion" />
        <input type="submit" name="btnsubs"
        id="btnsubs" value="Eliminar de la sesion">
        
    </form>
    <div>
        <?php
        echo $contenidosession;
        ?>
    </div>
</body>
</html>
