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
	<h2>Tips</h2>
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/HvmzKnkBzJw" frameborder="0" allowfullscreen></iframe>
      <br>
      <p>Anything we may have missed or just general advice for learning the bouzouki.</p><br>

      	 <div id="lessons">
	 	 <a href="extra.php" class="alignright"><span><b>Extras --></b></span></a></p>
</div>

<?PHP
include "footer.php";
?>
