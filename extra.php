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

<h2>Drum Loop</h2>
<p>Here you will find a collection of drum loops you can play along to. Hopefully you
will get used to the various rhythms and will soon be accustomed to them!</p><br>
<input id="five" type="button" value="Loop" onclick="play58();"/>
<p>5-8 Drum Loop - counted as "1, 2, 3, - 1, 2". </p><br><br>
<input id="hasa" type="button" value="Loop" onclick="playHassapikio();"/>
<p>Slow 2-4 Hassapiko Drum Loop - counted as "1, 2, - 1, 2, - 1, 2".</p><br><br>
<input id="kala" type="button" value="Loop" onclick="playKala();"/>
<p>7-8 Kalamatiano Drum Loop - counted as "1, 2 ,3 - 1, 2, - 1, 2".</p><br><br>
<input id="rum" type="button" value="Loop" onclick="playRum();"/>
<p>4-4 Rumpitsa Drum Loop - counted as "1, 2, 3, 4, - 1, 2, 3, 4".</p><br><br>
<input id="serv" type="button" value="Loop" onclick="playServ();"/>
<p>2-4 Serviko Drum Loop - Faster version of Hassapiko. Coutned as "1, 2, - 1,2".</p><br><br>
<input id="tsif" type="button" value="Loop" onclick="playTsif();"/>
<p>4-4 Tsifteteli Drum Loop - Counted as "1, 2, 3, 4"</p><br><br>
<input id="zeb" type="button" value="Loop" onclick="playZeb();"/>
<p>9-8 Zebekiko Drum Loop - Counted as "1, 2, - 1, - 1, 2, - 1, - 1, 2, 3"</p><br><br>

<script type="text/javascript" src="assets/js/howler.js"></script>
<script>
var five = new Howl({
    urls: ['ogg/5-8.ogg'],
    autoplay: false,
    loop: true
  });

var mute = false;
document.getElementById("five").onclick = function play58() {
      if (mute === true) {
      five.play();
      mute = false;
      var elem =document.getElementById("five");
      if (elem.value=="Loop") elem.value ="Stop";
    } else {
      five.stop();
      mute = true;
      var elem =document.getElementById("five");
      if (elem.value =="Stop") elem.value ="Loop";
	 }
  };

var hassa = new Howl({
    urls: ['ogg/Hassapikio.ogg'],
    autoplay: false,
    loop: true
  });

document.getElementById("hasa").onclick = function playHassapikio() {
      if (mute === true) {
      hassa.play();
      mute = false;
      var elem =document.getElementById("hasa");
      if (elem.value=="Loop") elem.value ="Stop";
    } else {
      hassa.stop();
      mute = true;
      var elem =document.getElementById("hasa");
      if (elem.value =="Stop") elem.value ="Loop";
	 }
  };

var kalam = new Howl({
    urls: ['ogg/Kalamatiano_7-8.ogg'],
    autoplay: false,
    loop: true
  });

document.getElementById("kala").onclick = function playKala() {
      if (mute === true) {
      kalam.play();
      mute = false;
      var elem =document.getElementById("kala");
      if (elem.value=="Loop") elem.value ="Stop";
    } else {
      kalam.stop();
      mute = true;
      var elem =document.getElementById("kala");
      if (elem.value =="Stop") elem.value ="Loop";
	 }
  };

  var rump = new Howl({
    urls: ['ogg/Rumpitsa.ogg'],
    autoplay: false,
    loop: true
  });

document.getElementById("rum").onclick = function playRum() {
      if (mute === true) {
      rump.play();
      mute = false;
      var elem =document.getElementById("rum");
      if (elem.value=="Loop") elem.value ="Stop";
    } else {
      rump.stop();
      mute = true;
      var elem =document.getElementById("rum");
      if (elem.value =="Stop") elem.value ="Loop";
	 }
  };

  var servi = new Howl({
    urls: ['ogg/Serviko_2-4.ogg'],
    autoplay: false,
    loop: true
  });

document.getElementById("serv").onclick = function playServ() {
      if (mute === true) {
      servi.play();
      mute = false;
      var elem =document.getElementById("serv");
      if (elem.value=="Loop") elem.value ="Stop";
    } else {
      servi.stop();
      mute = true;
      var elem =document.getElementById("serv");
      if (elem.value =="Stop") elem.value ="Loop";
	 }
  };

var tsift = new Howl({
    urls: ['ogg/Tsifteteli.ogg'],
    autoplay: false,
    loop: true
  });

document.getElementById("tsif").onclick = function playTsif() {
      if (mute === true) {
      tsift.play();
      mute = false;
      var elem =document.getElementById("tsif");
      if (elem.value=="Loop") elem.value ="Stop";
    } else {
      tsift.stop();
      mute = true;
      var elem =document.getElementById("tsif");
      if (elem.value =="Stop") elem.value ="Loop";
	 }
  };

  var zebe = new Howl({
    urls: ['ogg/Zebekiko.ogg'],
    autoplay: false,
    loop: true
  });

document.getElementById("zeb").onclick = function playZeb() {
      if (mute === true) {
      zebe.play();
      mute = false;
      var elem =document.getElementById("zeb");
      if (elem.value=="Loop") elem.value ="Stop";
    } else {
      zebe.stop();
      mute = true;
      var elem =document.getElementById("zeb");
      if (elem.value =="Stop") elem.value ="Loop";
	 }
  };

</script>

<?PHP
include "footer.php";
?>