<?php
$username="root";
$password="";
$db_name="log";
$db_host="localhost";
$database=mysqli_connect($db_host,$username ,$password ,$db_name);

    if(isset($_POST['connexion'])){
       if(!empty($_POST['mail']) AND !empty($_POST['password'])){
          $mail=$_POST['mail'];
          $pass=$_POST['password'];
          $sql=("SELECT count(*) FROM user WHERE mail='".$mail."' AND password='".$pass."' ");
          $exec_requete=mysqli_query($database,$sql);
          $reponce=mysqli_fetch_array($exec_requete);
          $count=$reponce['count(*)'];
          
          if($count!=0){
             
            header('location:index2.html');
          

          }else{
              echo " <h3style='color:red;'>" ."mot de passe incorrect". "</h3>";
          }
       }else{
        echo "<h3 style='color:red;' >"."remplir tout les champs". "</h3>";
       }
   
    }
    else{
        echo"ressaler plus tard .";
        }
?>