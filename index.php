<?php
    include_once "php/view.php";
    session_start();
    if(!ISSET($_SESSION["loggato"])){
        
        $_SESSION['loggato']=false;
    }
?>

<?=printColors()?>
<?php
    if($_SESSION["loggato"]==false){
        echo'<form method="post" action="php/mainController.php">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="hidden" name="typerequest" value="login">
            <input type="submit">
        </form>';
    }

?>


<?php
        
        if($_SESSION['loggato']==true){
            echo "<a href='listaColori.php'><h3>Lista colori</h3></a>";
            echo "<a href='php/mainController.php?typerequest=logout'><h3>Logout</h3></a>";
        }
    
   
?>
