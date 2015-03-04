<?php
    $numero1= 0;
    $numero2= 0;
    $iteraciones = 10;
    $msg ="";
    
    if(isset($_POST["btnprc"])){
        $numero1 = intval($_POST["numero1"]);
        $numero2 = intval($_POST["numero2"]);
        $newValue = $numero1;
        for($i =0; $i<$numero2-1; $i++){
            $newValue *= $numero1;
        }
        $msg ="El valor: $numero1 a la potencia $numero2 es igual a $newValue";
    }
    
    if(isset($_POST["btnrev"])){
       // echo numero1 * iteracion --
       $numero1 = intval($_POST["numero1"]);
       $iteraciones = intval($_POST["iteraciones"]);
       $contador =1;
       while($iteraciones > 0){
        $msg .= "$contador ). producto: " .($numero1 * $iteraciones) ."<br/>" ;
        $contador ++;
        $iteraciones --;
        
       }
       $iteraciones= intval($_POST["iteraciones"]);
    }
    
    if(isset($_POST["btnfac"])){
        // factorial numero2
        $numero2= intval($_POST["numero2"]);
        $xx=1;
        $factorial=1;
        $iteraciones= intval($_POST["iteraciones"]);
        
        while($xx <= $numero2){
            $factorial = $factorial * $xx++;
        }
        $msg ="el factorial es $factorial";
    }
    
    //tarea como no perder la iteracion eleccionada

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ejericio 2 switch y ciclos</title>
</head>
<body>
    <h1>Ejemplo switch y ciclos en php</h1>
    <form action="ej2.php" method="post">
        <label for="numero1">numero 1</label>
        <input type="text" id="numero1" name="numero1"
               value="<?php echo $numero1; ?>" />
        <br/>
         <label for="numero1">numero 2</label>
        <input type="text" id="numero2" name="numero2"
               value="<?php echo $numero2; ?>" />
               <br/>
    <label for="iteraciones">Numero de iteraciones</label>
    <select name="iteraciones" id="iteraciones">
        <option value="10" <?php if($iteraciones ==10) {echo 'selected="selected"';} ?>>10</option>
        <option value="20" <?php if($iteraciones ==20) {echo 'selected="selected"';} ?>>20</option>
        <option value="50" <?php if($iteraciones ==50) {echo 'selected="selected"';} ?>>50</option>
    </select>
    <br/>
    <input type="submit" value="procesar"
    name="btnprc" id="btnprc" />
    <input type="submit" value="reversar"
    name="btnrev" id="btnrev" />
    <input type="submit" value="factorial"
    name="btfac" id="btnfac" />
    </form>
    <div>
        <?php echo $msg; ?>
    </div>
</body>
</html>