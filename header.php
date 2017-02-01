<?PHP
session_start(); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BOUZOUKIQUEST</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>
   <script type="text/javascript" src="assets/js/login.js"></script>
   <script type="text/javascript" src="assets/data.json"></script>
    <script type="text/javascript" src="assets/js/search.js"></script>
</head>
<body>
<div id="container">
  <div id="top">
    <ul id="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="history.php">History</a></li>
      <li><a href="contact.php">Contact</a></li>  
      
       <?PHP
  if(!isset($_SESSION['username']) || empty($_SESSION['username']))
{
      echo '<li><a href="register.php">Register</a></li>';
}
else
{
	
      echo '<li>
	  <script>var url=window.location;</script>
	  <a href="logout.php" onclick="location.href=this.href+\'?url=\'+url;return false;">Logout</a></li>';
}
?>
    </ul>
    <h1>BouzoukiQuest</h1>
  </div>
  <?PHP
  if(!isset($_SESSION['username']) || empty($_SESSION['username']))
{
	
echo '
  <form class="login_form" method="post" onclick="return false;">
    <div> Username: <input type="text" id="username" class="login_form"/></div>
    <div> Password: <input type="password" id="password" class="login_form" /></div>
    <div> <input type="submit" value="Login" id="login" class="btwo"/></div>
</form>';

}
?>
<p></p>
<div id="search">
    <form id="searchform" method="post"  onsubmit="return false;">
    <input type="text" id="searchtext" class="textinput" name="searchtext" size="21" maxlength="120"><input id="search" type="submit" value="search" class="button">
    </form>
    <div id="searchresult"></div>
  <div class="clear"></div>
  </div>
  
   <div class="clear"></div>
  <div id="lnav">
<?PHP
  if(isset($_SESSION['username']) || !empty($_SESSION['username']))
  {
echo ' 
<div id = >
<h3> Hello, '.$_SESSION['username'].'</h3>
</div>';
  }
?>
    <h2>LESSONS</h2>
    <ul class="llist">
      <li><a href="beginner.php">BEGINNER</a></li>
      <li><a href="intermediate.php">INTERMEDIATE</a></li>
      <li><a href="tips.php">TIPS</a></li>
      <li><a href="extra.php">EXTRA</a></li>
    </ul>
    <p class="quote"> Best place for Mediterannean Bouzouki Lessons.</p>
  </div>
  <div class="clear"></div>
  <div id="main">
  <div id="topmsg">
  </div>
