<?php
    session_start();
    if($_SESSION['loggato']==true){
             ?> 
             <form method="post" action="php/mainController.php">
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