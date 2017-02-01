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

      <a href="lesson4.php"><li><span><b>Lesson 4 - Finger Exercises</b></li></span></a>
      <p>Now then, it's time for something a bit tougher. These finger exercises will really test you to see if you have all the basics down and are truly ready for the next level.</p>
      <a href="lesson5.php"><li><span><b>Lesson 5 - Back and Forth</b></li></span></a>
      <p>Once you are comfortable with that, (good job, by the way) it is now time for you to start feeling around the fret board. You have to make sure that your movements are nice and natural and that by the end you don't make many mistakes.</p>
      <a href="lesson6.php"><li><span><b>Lesson 6 - Rhythms</b></li></span></a>
      <p>One of the most important things in Greek music (and any music really) is Rhythm. Here you will see all of the different Greek rhythms and their timings.</p>
      <a href="lesson7.php"><li><span><b>Lesson 7 - Chords</b></li></span></a>
      <p>Finally, once you have mastered almost everything and you have great rhythm, timing and can really throw yourself around a Bouzouki it's time to put these all together and start playing with chords. This is where you can really start to express yourself.</p>
<?PHP
include "footer.php";
?>
