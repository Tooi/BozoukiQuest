<?PHP
session_start();
  if(!isset($_SESSION['username']) || empty($_SESSION['username']))
{
      header("Location: error.php");
}
else{

include 'header.php';

}
?>
	<p><a href="intermediate.php"><span><b><-- Back to Intermediate</b></span></a></p><br>

	 <iframe width="560" height="315" src="https://www.youtube.com/embed/dS1UbzHLhqk" frameborder="0" allowfullscreen></iframe>

	 <div id="lessons">
	 	 <a href="lesson3.php" class="alignleft"><span><b><--Previous Lesson</b></span></a></p>
	 	 <a href="lesson5.php" class="alignright"><span><b>Next Lesson --></b></span></a></p>
</div>

<?PHP
include 'footer.php';
?>
