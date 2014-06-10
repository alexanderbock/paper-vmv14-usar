<html>
<head>
  <META NAME="robots" CONTENT="noindex,nofollow">
  <title>Urban Search and Rescue Evaluation -- Information</title>
  <style type="text/css">
    <!--
	@import url("style.css");
    -->
  </style>
</head>
<body>
  <?php
     $id = $_GET['id'];
     $name = $_GET['name'];
     $profession = $_GET['profession'];
     $affiliation = $_GET['affiliation'];
     $time = date("Y-m-d H:i:s");

     #ini_set('display_errors', 1);
     #error_reporting(-1);

     $mysqli = new mysqli('localhost', 'vis14-usar', 'zYRptTc8tyYKTbC4', 'vis14-usar');

     # Check if there already is a line
     $checkquery = "SELECT * FROM Evaluation WHERE (id = $id);";
     $checkresult = $mysqli->query($checkquery);
     if ($checkresult->num_rows == 0)
       $query = "INSERT INTO Evaluation (id, name, profession, affiliation, started, lastmodified) VALUES ('$id', '$name', '$profession', '$affiliation', '$time', '$time');";
     else
       $query = "UPDATE Evaluation SET name='$name', profession='$profession', affiliation='$affiliation', lastmodified='$time' WHERE id='$id';";
     $mysqli->query($query);
     $mysqli->close();
  ?>
  <center>
  <div class="title">Information about the Evaluation</div>
  <div class="boxedinfo">
    <i>Remarks</i></br>
    The images and videos we will present to you can be inspected for as long and often as you wish.
    <ul>
      <li>Images can be viewed in fullscreen by clicking on them. This opens a new window that you can close after you are finished with the image</li>
      <li>Videos can be played back and resized with the embedded controls (<img src="images/youtube.png" height="18px">). You can open the videos in a new window by using the <img src="images/youtube2.png" height="18px"> button</li>
    </ul>
    As your feedback is very important for us, we kindly ask you to be as elaborate as possible in your answers and provide critical feedback as well as positive remarks.
  </div>
  <form action="page1.php" method="get">
    <input name="id" value="<?php print $id ?>" type="hidden">
    <input id="next" type="submit" value="Next"/>
  </form>
  
  <div class="boxedinfo" id="ack">
    The dataset used for this evaluation was aquired at the Fukushima Daiichi nuclear reaction and we would like to thank the following people and institutions for their work in providing the data.</br>
    <i>Organizations</i></br>
    Internation Research Institute of Disaster Science (IRIDeS), Tohoku University</br>
    Center of Robotics for Extreme and Uncertain Environments (CREATE), Tohoku University</br>
    International Rescue System Institute (IRS)</br>
    <i>Professors</i></br>
    Kazunori Ohno, Eijiro Takeuchi, Keiji Nagatani, Yoshito Okada, Nathan Michael, Satoshi Tadokoro, Kazuya Yoshida, Vijay Kumar</br></br>
    Nagatani et al., <a href="http://www.astro.mech.tohoku.ac.jp/~keiji/papers/pdf/2013-JFR-Quince-online.pdf">Emergency response to the nuclear accident at the Fukushima Daiichi nuclear power plants using mobile resuce robots</a>
  </div>

  </center>
</body>
</html>
