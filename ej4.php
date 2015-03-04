<?php
 $result = "";
 $txtorg = "";
 
    if(isset($_POST["btnprc"])){
       $txtorg = strtolower($_POST["txtorg"]);
       $txtorg = str_replace(".","",$txtorg);
       $txtorg = str_replace(",","",$txtorg);
       $txtorg = str_replace("?","",$txtorg);
       $txtorg = str_replace("!","",$txtorg);
       $txtorg = str_replace("¿","",$txtorg);
       $txtorg = str_replace("¡","",$txtorg);
       // preg_replace reemplaza mediante expresiones regulares
       $arreglopalabras= explode(" ", $txtorg);
       $arreglofrecuencias = array();
       
       foreach($arreglopalabras as $palabra){
        if(isset($arreglofrecuencias[$palabra])){
            $arreglofrecuencias[$palabra] ++;    
        }else{
            $arreglofrecuencias[$palabra] = 1;
        }
       }
       
       if(is_array($arreglofrecuencias)
          && count($arreglofrecuencias) > 0 ){
        arsort($arreglofrecuencias);
        foreach($arreglofrecuencias as $palabra => $freq){
            $result = "la palabra con mayor frecuencia de $freq ";
            break;
    }
        
            
        $result = "aqui la palabra y mayor frecuencia";
       }else{
        $result = "no hay palabra que analizar";
       }
       //arsort(); associative reverse sort
       
       
       
       //asort(); associative sort
       //para depuracion
       print_r($arreglofrecuencias);
       die();
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Ejericico uso de arreglos Xtreme</title>
</head>
<body>
    <h1>Stats de Blogs</h1>
    <form action="ej4.php" method="post">
        <label for="txtorg"> Texto de un blog</label>
        <br/>
        <textarea id="txtorg" name="txtorg">
        <?php echo $txtorg; ?>
        </textarea>
    <br/>
    <input type="submit" id="btnprc"
    name="btnprc" value="procesar" />
    </form>
    <div>
        <?php echo $result; ?>
    </div>
    
</body>
</html>