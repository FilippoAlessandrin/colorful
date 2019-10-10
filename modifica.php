<?php
    session_start();
    
    if($_SESSION['loggato']==true){
            $hex=$_GET["hex"];
            $red=$_GET["red"];
            $green=$_GET["green"];
            $blue=$_GET["blue"];
            $id=$_GET["id"];
             ?> 
             <form method="post" action="php/mainController.php">
             <input type="hidden" name="id" value="<?=$id?>">
             <input type="text" name="hex" value="<?=$hex?>">
             <input type="text" name="red" value="<?=$red?>">
             <input type="text" name="green" value="<?=$green?>">
             <input type="text" name="blue" value="<?=$blue?>">
             <input type="hidden" name="typerequest" value="modifyColor">
             <input type='submit'>
            </form>
            <?php
    }else{
        echo "furbacchione, non sei loggato esci!";
    }


?>