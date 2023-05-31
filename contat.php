<?php
$username="root";
$password="";
$db_name="log";
$db_host="localhost";
$database=mysqli_connect($db_host,$username ,$password ,$db_name);
if(isset($_POST['envoie'])){
    if(!empty($_POST['nom']) AND !empty($_POST['tel']) AND !empty($_POST['mail']) AND !empty($_POST['msg']) ){
        $nom=$_POST['nom'];
        $mail=$_POST['mail'];
        $tel=$_POST['tel'];
        $msg=$_POST['msg'];
        $adddata=$database->prepare("INSERT INTO contat (nom ,mail , tel , msg) VALUES('$nom','$mail','$tel','$msg')");
        if(  $adddata->execute()){
            
            echo "<h3 style='color:#055af8;' >"."bonjour Mr/Mlle  ".$nom."  nous avons recue votre message . "."</h3>";
         
            
          }else{
              echo "<h3 style='color:#055af8;' >". "ressaller plus terd ."."</h3>";
          }
    }else{
         echo "<h3 style='color:red;' >"." remlire tout les champs s-v-p . "."</h3>";
    }


}
?>