<?PHP
session_start();
  if(!isset($_SESSION['username']) || empty($_SESSION['username']))
{
      header("Location: error.php");
}
else{

include "header.php";
}
?>
	<p><a href="beginner.php"><span><b><-- Back to Beginner</b></span></a></p><br>
	
	 <iframe width="560" height="315" src="https://www.youtube.com/embed/u54D4rSDjAM" frameborder="0" allowfullscreen></iframe>

	 <div id="lessons">
	 	 <a href="lesson2.php" class="alignleft"><span><b><--Previous Lesson</b></span></a></p>
	 	 <a href="intermediate.php" class="alignright"><span><b>Next Difficulty --></b></span></a></p>
</div>

<?PHP
include "footer.php";
?>
