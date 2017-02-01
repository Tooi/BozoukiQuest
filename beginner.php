<?PHP
session_start();
  if(!isset($_SESSION['username']) || empty($_SESSION['username']))
{
      header("Location: error.php");  //if you are not logged in, you will be taken to that page <--
}
else{

include "header.php";
}
?>

      <a href="lessont.php"><li><span><b>Tuning</b></li></span></a>
      <p>First thing's first...You have to be able to tune your Bouzouki! Tune in to the first video to see how it's done as well as what you will need.</p>
      <a href="lesson1.php"><li><span><b>Lesson 1 - Intro</b></li></span></a>
      <p>Now that you have your bouzouki tuned and ready, we begin with simple exercises that you need to keep practising in order to get a feel of the instrument. Good luck!</p>
      <a href="lesson2.php"><li><span><b>Lesson 2 - Exercises</b></li></span></a>
      <p>We are still carrying on with the basics here. It may feel intimidating or feel like it is taking a lot of time, but the practise you put in now will be worth it in the long run!</p>
      <a href="lesson3.php"><li><span><b>Lesson 3 - Strumming</b></li></span></a>
      <p>For the final beginner lesson you will learn about strumming and of course, more exercises! Trust me, you need to master the basics before moving on to harder things. Good luck.</p>
<?PHP
include "footer.php";
?>
