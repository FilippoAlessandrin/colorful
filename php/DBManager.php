<?php
	function connDB(){
        $hostname = "localhost";
        $dbname = "colori";
        $user = "software";
        $pass = "admin123!";
        return $db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);
        
    }
    function selectColori(){
        $arrayColori=[];
        $db=connDB();
        $stmt = $db->prepare("select HEX from color");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    function selectColore($colore){
        $arrayColori=[];
       $db=connDB();
        $stmt = $db->prepare("select * from color WHERE HEX='$colore'");

        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC); 

    }
    function selectUsername($username){
        $db=connDB();
         $stmt = $db->prepare("select * from user WHERE nomeUtente ='$username'");
 
         $stmt->execute();
         
         return $stmt->fetch(PDO::FETCH_ASSOC);

    }
    function deleteColore($colore){
        $db=connDB();
        $stmt = $db->prepare("delete from color where HEX='$colore'");
    
        $stmt->execute();
        return $stmt->rowCount();
    }
    function insertColore($hex,$red,$green,$blue){
        $db=connDB();
        $stmt = $db->prepare("insert into color (HEX,red,green,blue) values(?,?,?,?)");
    
        $stmt->execute([$hex,$red,$green,$blue]);
        return $stmt->rowCount();
    }
    function modifyColore($hex,$red,$green,$blue){
        $db=connDB();
        $stmt = $db->prepare("update color set HEX=?,red=?,green=?,blue=?");
    
        $stmt->execute([$hex,$red,$green,$blue]);
        return $stmt->rowCount();
    }
?>