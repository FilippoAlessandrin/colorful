<?php

    include_once 'mainController.php';
    function printColors(){
        $arrayColori=selectColoriRequest();
        foreach($arrayColori as $colore){
            $hex=$colore["HEX"];
            echo "<a href='colore.php?colore=$hex' ><h3 style='background-color:#$hex'>#$hex</h3></a>";
        }
        if(count($arrayColori)==0){
            echo "non ci sono colori disponibili";
        }
        
    }
    function printTabellaColori(){
        $arrayColori=selectColoriRequest();
        foreach($arrayColori as $colore){
            $hex=$colore["HEX"];
            echo "<input type='radio' name='colore' value='$hex'><p style='background-color:#$hex'>#$hex</p><br>";
        }
        if(count($arrayColori)==0){
            echo "non ci sono colori disponibili";
        }else{
            
            echo "<input type='submit' name='typerequest' value='deletecolor'>";
            echo "<input type='submit' name='typerequest' value='modifyColorList'>";
        }

    }
    function printColor($colore){
        $arrayColore=selectColoreRequest($colore);
        echo "<h3> red ".$arrayColore['red']."</h3>";
        echo "<h3> green". $arrayColore['green']."</h3>";
        echo "<h3> blue". $arrayColore['blue']."</h3>";
    }

   
 
?>