<?php

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
      echo '<li><a href="register.php">Register</a></li>';            //if you aren't logged in, the register button will be there
}
else
{
	
      echo '<li>
	  <script>var url=window.location;</script>
	  <a href="logout.php" onclick="location.href=this.href+\'?url=\'+url;return false;">Logout</a></li>'; //else the logout button will appear in it's place.
}
?>
    </ul>
    <h1>BouzoukiQuest</h1>
  </div>
  <?PHP
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])) //if you aren't logged in, the log in box will appear at the top right
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
  <div id="lnav">
<?PHP
  if(isset($_SESSION['username']) || !empty($_SESSION['username']))
  {
echo ' 
<div>
<h3> Hello, '.$_SESSION['username'].' 
</h3>
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
  <div id="main" >
  <div id="topmsg">
  </div>

    <h2>Welcome to <span style="color:#FFFFFF;">BouzoukiQuest</span></h2>

    <p>At BouzoukiQuest we will teach you various exercises that you can use to learn the Bouzouki. </p>
    <p>It is an instrument drenched in Greek history and is the very essence of Meditaranean music. I hope you will come to love it as much as I do.</p>
    <h2>About BouzoukiQuest</h2>
    <p>The goal here at BouzkiQuest is simple. To teach you how to play the bouzouki! There are a variety of videos that will teach you to do so as well as some history if you are interested!</p>
    <p>There is a lot to choose from when it comes to video lessons and each have a different skill level that get progressively harder as you go. There is also a tips and extras section so pick the level you are at and enjoy the content I have provided. sign up and become a member to access the lessons today! I hope you have fun learning the bouzouki here at BouzoukiQuest!</p>
  </div>
  <div id="footer"> <a href="index.php">Homepage</a> | <a href="contact.php">Contact</a>
</div>
</body>
</html>
