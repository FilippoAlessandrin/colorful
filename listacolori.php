<?php include_once "php/view.php";
session_start();
if($_SESSION['loggato']==false){
    header("location: index.php");
}
?>
<html>
<head>
</head>
<body>
    <?php
     

    ?>
    <form method="post" action="php/mainController.php">
        <?=printTabellaColori()?>
        
        
           
    </form>
    <form method="post" action="php/mainController.php">
        <input type="text" name="hex">
        <input type="text" name="red">
        <input type="text" name="green">
        <input type="text" name="blue">
        <input type="hidden" name="typerequest" value="addColor">
        <input type='submit'>
    </form>
</body>
</html>