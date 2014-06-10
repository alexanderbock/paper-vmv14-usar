<html>
<head>
  <META NAME="robots" CONTENT="noindex,nofollow">
  <title>Urban Search and Rescue Evaluation -- Page 4</title>
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

     $useful = $_GET['useful'];
     $trust = $_GET['trust'];
     $videopath1direct = $_GET['videopath1direct'];
     $videopath1depth = $_GET['videopath1depth'];
     $videopath2direct = $_GET['videopath2direct'];
     $videopath2depth = $_GET['videopath2depth'];
     $whichvideo = $_GET['whichvideo'];
     $spots = $_GET['spots'];
     $spots2 = $_GET['spots2'];
     $notice = $_GET['notice'];
     $notice2 = $_GET['notice2'];
     $comments= $_GET['comments'];

     //ini_set('display_errors', 1);
     //error_reporting(-1);

     $mysqli = new mysqli('localhost', 'vis14-usar', 'zYRptTc8tyYKTbC4', 'vis14-usar');

     # Update last-modified date
     $query = "UPDATE Evaluation SET lastmodified='$time' WHERE id='$id';";
     $mysqli->query($query);

     # Check if there already is a line
     $checkquery = "SELECT * FROM Page3 WHERE (id = $id);";
     $checkresult = $mysqli->query($checkquery);
     if ($checkresult->num_rows == 0)
       $dataquery = "INSERT INTO Page3 (id, useful, trust, videopath1direct, videopath1depth, videopath2direct, videopath2depth, spots, spots2, notice, comments) VALUES ('$id', '$useful', '$trust', '$videopath1direct', '$videopath1depth', '$videopath2direct', '$videopath2depth', '$spots', '$spots2', '$notice', '$comments');";
     else
       $dataquery = "UPDATE Page3 SET useful='$useful', trust='$trust', videopath1direct='$videopath1direct', videopath1depth='$videopath1depth', videopath2direct='$videopath2direct', videopath2depth='$videopath2depth', spots='$spots', spots2='$spots2', notice='$notice', comments='$comments' WHERE id='$id';";
     $mysqli->query($dataquery);
     
     $mysqli->close();
  ?>
  <center>
  <div class="title">Visual Analysis</div>
  <progress value="3" max="8"></progress>
  <div class="boxedinfo">
    <center><a href="images/system-overview-page4.png" target="_blank"><img src="images/system-overview-page4.png" width="50%"></a></br></center>
    In the rest of this evaluation, each plot represents one or several evacuation path attributes, e.g. path length or distance to a hazardous area. The goal is to investigate the comparison of these attributes to facilitate trade-offs between different evacuation paths.
  </div>

  <form action="page5.php" method="get">
    <input name="id" value="<?php print $id ?>" type="hidden">
    <input id="next" type="submit" value="Next"/>
  </form>
  </center>
</body>
</html>
