<?php
$username="root";
$password="";
$cmnt=" vous pouver remplire tout les champs .";
$db_name="log";
$db_host="localhost";
$database=mysqli_connect($db_host,$username ,$password ,$db_name);
if($database){
echo"connect";
}else{
echo"not connect";
}
if(isset($_POST['connexion'])){
    if(!empty($_POST['mail']) AND !empty($_POST['password'])){  
             $mail=$_POST['mail'];
             $pass=$_POST['password'];
             $sql= ("SELECT count(*) FROM user WHERE mail='". $mail."' AND password='". $pass."' ");
             $exec_requete=mysqli_query($database,$sql );
             $reponce=mysqli_fetch_array( $exec_requete);
             $count= $reponce['count(*)'];
             if($count!=0){
                 echo "connected" ;

             }else{
               echo"mot de pass ou mail incorect";
             }        
    }else{
echo "remlire tout les champs";
    }

}else{
    echo "not isset";
}
?>