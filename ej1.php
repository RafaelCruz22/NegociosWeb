0<?php
    $msg = "";
    $txt1 = "";
    if(isset($_POST["btn1"])){
        $txt1 = $_POST["btn1"];
        $msg = "buenas noches"
    }
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Ejercicio php 1</title>
        </head>
        <body>
            <h1>Ejercicio 1 php</h1>
            <form action="ej1.php" method="post" >
               <label for="txt1">Nombre</label>
            <input type="text" id="txt1" name="txt1"
            value="<?php echo $txt1; ?>"/>
            <br/>
             <input type="submit" id="btn1" name="btn1" value="procesar" />
            </form>
            <div>
                <?php echo $msg; ?>
            </div>
        </body>
    </html>