<?PHP session_start(); 
 if(isset($_SESSION['username']))
{
      header("Location: logger.php");  //if you are already logged in, you will be taken to that page <--
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>BOUZOUKIQUEST</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>
   <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/data.json"></script>
    <script type="text/javascript" src="assets/js/search.js"></script>
</script>
</head>
<body>
<div id="container">
  <div id="top">
    <ul id="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="history.php">History</a></li>
      <li><a href="contact.php">Contact</a></li>  
      <li><a href="register.php">Register</a></li>
    </ul>
    <h1>BouzoukiQuest</h1>
  </div>
<div id="search">
    <form id="searchform" method="post"  onsubmit="return false;">
    <input type="text" id="searchtext" class="textinput" name="searchtext" size="21" maxlength="120"><input id="search" type="submit" value="search" class="button">
    </form>
    <div id="searchresult"></div>
  <div class="clear"></div>
  </div>
  <div id="lnav">
    <h2>LESSONS</h2>
    <ul class="llist">
      <li><a href="beginner.php">BEGINNER</a></li>
      <li><a href="intermediate.php">INTERMEDIATE</a></li>
      <li><a href="tips.php">TIPS</a></li>
      <li><a href="extra.php">EXTRA</a></li>
    </ul>
    <p class="quote"> Best place for Mediterannean Bouzouki Lessons.</p>
  </div>
  
  <div id="main">
  <div id="topmsg">
  <?PHP
  if(isset($_SESSION['status']))  //if the account creation is successful and it connects to the database
  {                               //status is set to 1 which is a validation. it does this and then unsets the session
	echo                            //it does this to allow you to then log in with your credentials at the homepage          
		"<div class='alert alert-success fade in'>
		Your account has been created!<br>
		Please login at the homepage.</a></div>";
		$_SESSION['status']="";
		unset($_SESSION['status']);
  }
  ?>
  </div>
  <h3>Sign Up to BouzoukiQuest today!</h3>
  <form name="signupform" id="signupform" onsubmit="return false;">
    <div>Username: </div>
    <input id="username" type="text" maxlength="16">
    <span id="unamestatus"></span>
    <div>Email Address:</div>
    <input id="email" type="text" maxlength="88">
    <div>Create Password:</div>
    <input id="pass1" type="password" maxlength="16">
    <div>Confirm Password:</div>
    <input id="pass2" type="password" maxlength="16">
    <div>Country:</div>
    <select id="country" >
      <?php include_once("country_list.php"); ?>
    </select>
    <br /><br />
    <button id="createaccount">Create Account</button>  
    <span id="status"></span>
  </form>

  
  </div>
  <div id="footer"> <a href="index.php">Homepage</a> | <a href="contact.php">Contact</a>
</div>
</div>
</body>
</html>
