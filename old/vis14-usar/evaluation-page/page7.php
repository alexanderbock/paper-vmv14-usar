<html>
<head>
  <META NAME="robots" CONTENT="noindex,nofollow">
  <title>Urban Search and Rescue Evaluation -- Page 7</title>
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

     $trust = $_GET['trust'];
     $shortest = $_GET['shortest'];
     $danger = $_GET['danger'];
     $choice1 = $_GET['choice1'];
     $choice2 = $_GET['choice2'];
     $choose = $_GET['choose'];
     $ordering = $_GET['ordering'];
     $additional = $_GET['additional'];
     $comments = $_GET['comments'];

     ini_set('display_errors', 1);
     error_reporting(-1);

     $mysqli = new mysqli('localhost', 'vis14-usar', 'zYRptTc8tyYKTbC4', 'vis14-usar');

     # Update last-modified date
     $query = "UPDATE Evaluation SET lastmodified='$time' WHERE id='$id';";
     $mysqli->query($query);

     # Check if there already is a line
     $checkquery = "SELECT * FROM Page6 WHERE (id = $id);";
     $checkresult = $mysqli->query($checkquery);
     if ($checkresult->num_rows == 0)
       $dataquery = "INSERT INTO Page6 (id, trust, shortest, danger, choice1, choice2, choose, ordering, additional, comments) VALUES ('$id', '$trust', '$shortest', '$danger', '$choice1', '$choice2', '$choose', '$ordering', '$additional', '$comments');";
     else
       $dataquery = "UPDATE Page6 SET trust='$trust', shortest='$shortest', danger='$danger', choice1='$choice1', choice2='$choice2', choose='$choose', ordering='$ordering', additional='$additional', comments='$comments' WHERE id='$id';";
     $mysqli->query($dataquery);

     $mysqli->close();
  ?>
  <center>
  <div class="title">Scatterplot Matrix</div>
  <progress value="6" max="8"></progress>
  <div class="boxedinfo">
    <center><a href="images/system-overview-page7.png" target="_blank"><img src="images/system-overview-page7.png" width="50%"></a></br></center>
    Correlations between different, non-adjacent attributes are hard to detect in the Parallel Coordinates Plot. The <i>Scatterplot Matrix</i> on this page promotes comparisons of all attribute combinations. To read the scatterplot for a specific attribute combination (<i>A</i>,<i>B</i>), find the label for <i>A</i> and follow it horizontally. Find the label for <i>B</i> and follow it vertically. The cell where they intersect contains A on the vertical axis and B on the horizontal axis. Each path is represented in all plots using the same color.
  </div>

  <!-- Legenden an die Seiten der Scatterplot Matrix (A Tour Through the Visualization Zoo)-->

  <table class="media" id="scenarioSmall">
    <tr><td align="center" id="small"><a href="images/splom.jpg" target="_blank"><img src="images/splom.jpg" width="100%"></a></td></tr>
  </table>

  <form action="page8.php" method="get">
    <input name="id" value="<?php print $id ?>" type="hidden">
    <table class="question">
      <tbody>
	<tr>
	  <td align="left">Rate your knowledge and understanding of the Scatterplot Matrix.</td>
	  <td align="right">(no understanding)</td>
	  <td align="center" id="radiogroupgroup">
	    <div class="radiogroup">
	      <label>1</label>
	      <input name="trust" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>2</label>
	      <input name="trust" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>3</label>
	      <input name="trust" value="3" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>4</label>
	      <input name="trust" value="4" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>5</label>
	      <input name="trust" value="5" type="radio" required>
	    </div>
	  </td>
	  <td align="left">(full understanding)</td>
	</tr>
	<tr>
	  <td align="left">What path or paths have the shortest path length? How did you arrive at this conclusion?</td>
	  <td align="center" colspan="3"><textarea name="shortest"></textarea></td>
	</tr>
	<tr>
	  <td align="left">What path seems to be overall the robustest path with respect to the distance from the hazard areas? How did you arrive at this conclusion?</td>
	  <td align="center" colspan="3"><textarea name="distance"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Considering the <i>Path Length</i> and the <i>Average Distance to Hazard</i>, which path would you choose and why?</td>
	  <td align="center" colspan="3"><textarea name="choice1"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Optionally provide additional feedback/wishes/comments/criticisms.</br>You can also describe problems or issues regarding one of the tasks/questions here.</td>
	  <td align="center" colspan="3"><textarea name="comments"></textarea></td>
	</tr>
      </tbody>
    </table>
    <input id="next" type="submit" value="Next"/>
  </form>
  </center>
</body>
</html>
