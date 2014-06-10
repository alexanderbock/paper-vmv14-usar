<html>
<head>
  <META NAME="robots" CONTENT="noindex,nofollow">
  <title>Urban Search and Rescue Evaluation</title>
  <style type="text/css">
    <!--
	@import url("style.css");
    -->
  </style>
</head>
<body>
  <?php
     $id = $_GET['id'];
     $time = date("Y-m-d H:i:s");

     $helpful = $_GET['helpful'];
     $liketouse = $_GET['liketouse'];
     $birdseye = $_GET['birdseye'];
     $rendering = $_GET['rendering'];
     $profile = $_GET['profile'];
     $pcp = $_GET['pcp'];
     $splom = $_GET['splom'];
     $comments= $_GET['comments'];

     ini_set('display_errors', 1);
     error_reporting(-1);

     $mysqli = new mysqli('localhost', 'eurovis14-usar', 'zYRptTc8tyYKTbC4', 'eurovis14-usar');

     # Update last-modified date
     $query = "UPDATE Evaluation SET lastmodified='$time', finished='$time' WHERE id='$id';";
     $mysqli->query($query);

     # Check if there already is a line
     $checkquery = "SELECT * FROM Page8 WHERE (id = $id);";
     $checkresult = $mysqli->query($checkquery);
     if ($checkresult->num_rows == 0)
       $dataquery = "INSERT INTO Page8 (id, helpful, liketouse, birdseye, rendering, profile, pcp, splom, comments) VALUES ('$id', '$helpful', '$liketouse', '$birdseye', '$rendering', '$profile', '$pcp', '$splom', '$comments');";
     else
       $dataquery = "UPDATE Page8 SET helpful='$helpful', liketouse='$liketouse', birdseye='$birdseye', rendering='$rendering', profile='$profile', pcp='$pcp', splom='$splom', comments='$comments' WHERE id='$id';";
     $mysqli->query($dataquery);

     $mysqli->close();
  ?>
  <center>
  <div class="title">Finished</div>
  <progress value="8" max="8"></progress>
  <div class="boxedinfo" id="wide">This concludes the evaluation and we would like to thank you very much for taking the time and answering our questions.</div>
  </center>
</body>
</html>
