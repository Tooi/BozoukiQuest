<?PHP
session_start(); 
unset($_SESSION['username']);          //disconnects from the database
header ('Location: '.$_GET['url']);    //reloads the current page
?>
