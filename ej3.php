<?php
    //ejemplo de arreglo en php
    $arreglo =array(1,2,3,4,"texto",true);
    print_r($arreglo);
    echo "<br/>";
    
    
    $arreglo2 =array("nombre" => "fulano",
                     "apellido" => "de tal",
                     "edad" => 20);
    print_r($arreglo2);
    echo "<br/>";
    
    $arreglo2[]="esto tiene llave";
    $arreglo2["titulo"]="sr";

    
    print_r($arreglo2);
    echo "<br/>";
    
    $personas= array();
    
    $personas[]= $arreglo2;
    $personas[]= $arreglo;
    
    $arreglo2["locura"] = $personas;
    $personas[0]= $arreglo2;
    print_r($personas);
    
    echo "<br/>";
    
    foreach($arreglo2 as $key => $value){
        echo "$key ->";
        if(is_array($value)){
            foreach($value as $key2=> $value2){
                echo "<br/>..........$key2 -> $value2";
            }
            
        }else{
            echo $value;
        }
        
        print_r($value);
        echo "<br/>";
    }
    
?>