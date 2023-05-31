<?php
$username="root";
$password="";
$database=new PDO ("mysql:host=localhost;dbname=log; charset=utf8;",$username ,$password );
if(isset($_POST['envoyer']))
{
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['password'])){
        $nom=$_POST['nom'];
        $mail=$_POST['mail'];
        $password=$_POST['password'];
         $adddata=$database->prepare("INSERT INTO user (nom ,mail , password ) VALUES('$nom','$mail','$password')");
        if(  $adddata->execute()){
            
          header('location:index2.html');
          echo" <h1> .bnjr .</h1>";
          
        }else{
            echo "<h3 style='color:#055af8'; >"." resaller plus tard . "."</h3>";
        }
      
    }
    
}else {
    echo"non";
}
?>