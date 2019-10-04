<?php
    include_once 'DBManager.php';
    if(isset($_POST["typerequest"])){
       
        if($_POST["typerequest"]=="login"){
            askLogin($_POST["username"], $_POST["password"]);
        }
      
        elseif($_POST["typerequest"]=="deletecolor"){
            $colore=$_POST["colore"];
            echo deleteColoreRequest($colore);
        }elseif($_POST["typerequest"]=="addColor"){
            $hex=$_POST["hex"];
            $red=$_POST["red"];
            $green=$_POST["green"];
            $blue=$_POST["blue"];
            insertColoreRequest($hex,$red,$green,$blue);
        }elseif($_POST["typerequest"]=="modifyColorList"){
            header("Location: ../modifica.php");
       
        }elseif($_POST["typerequest"]=="modifyColor"){
            $hex=$_POST["hex"];
            $arrayColore=selectColoreRequest($hex);
            $red=$arrayColore['red'];
            $green=$arrayColore['green'];
            $blue=$arrayColore['blue'];
            modifyColoreRequest($hex,$red,$green,$blue);
        }
    }
    if(isset($_GET["typerequest"])){
        if($_GET["typerequest"]=="logout"){
            logout();
        }
    }




    function askLogin($username, $password){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if($_SESSION["loggato"]==false){
            $arrayUtente=selectUsername($username);
            if($password==$arrayUtente["password"]){
                
                $_SESSION["loggato"]=true;
                header("Location: ../index.php");
            }else{
                echo "password o utente sbagliato";
                echo "<a href='../index.php'>torna indietro</a>";
            }
                
            
        }
        
      
    }
    function logout(){
        session_start();
        $_SESSION["loggato"]=false;
        header("location: ../index.php");
    }

    function deleteColoreRequest($colore){
        session_start();
        if($_SESSION['loggato']==true){
             
            if(deleteColore($colore)==0){
                echo "c'è stato un errore";
            }else{
                echo "#$colore è stato eliminato correttamente";
            }
        }else{
            echo "furbacchione, non sei loggato esci!";
        }
    }
    function insertColoreRequest($hex,$red,$green,$blue){

        $hex=str_replace("#","",$hex);
        if(insertColore($hex,$red,$green,$blue)==0){
            echo "c'è stato un errore";
        }else{
            echo "#$hex è stato aggiunto correttamente";
        }
    }
    function selectColoriRequest(){
        return selectColori();
    }
    function selectColoreRequest($colore){
        return selectColore($colore);
    }
    function modifyColoreRequest($hex,$red,$green,$blue){
        return modifyColore($hex,$red,$green,$blue);
    }
?>