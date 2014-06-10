<html>
<head>
  <META NAME="robots" CONTENT="noindex,nofollow">
  <title>Urban Search and Rescue Evaluation -- Page 6</title>
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
     $numGroups = $_GET['numGroups'];
     $shortest = $_GET['shortest'];
     $crossing = $_GET['crossing'];
     $pathdiff = $_GET['pathdiff'];
     $choose = $_GET['choose'];
     $comments= $_GET['comments'];

     //ini_set('display_errors', 1);
     //error_reporting(-1);

     $mysqli = new mysqli('localhost', 'vis14-usar', 'zYRptTc8tyYKTbC4', 'vis14-usar');

     # Update last-modified date
     $query = "UPDATE Evaluation SET lastmodified='$time' WHERE id='$id';";
     $mysqli->query($query);

     # Check if there already is a line
     $checkquery = "SELECT * FROM Page5 WHERE (id = $id);";
     $checkresult = $mysqli->query($checkquery);
     if ($checkresult->num_rows == 0)
       $dataquery = "INSERT INTO Page5 (id, trust, numGroups, shortest, crossing, pathdiff, choose, comments) VALUES ('$id', '$trust', '$numGroups', '$shortest', '$crossing', '$pathdiff', '$choose', '$comments');";
     else
       $dataquery = "UPDATE Page5 SET trust='$trust', numGroups='$numGroups', shortest='$shortest', crossing='$crossing', pathdiff='$pathdiff', choose='$choose', comments='$comments' WHERE id='$id';";
     $mysqli->query($dataquery);
     
     $mysqli->close();
  ?>
  <center>
  <div class="title">Parallel Coordinate Plot</div>
  <progress value="5" max="8"></progress>
  <div class="boxedinfo">
    <center><a href="images/system-overview-page6.png" target="_blank"><img src="images/system-overview-page6.png" width="50%"></a></br></center>
    The <i>Parallel Coordinates Plot</i> shows for each path the correlation of its attributes. The black horizontal lines indicate the quantities of the attributes and the intersection points of the colored path with the horizontal lines depict the attribute values.
  </div>

  <table class="media" id="scenarioSmall">
    <tr><td align="center" id="small"><a href="images/pcp.png" target="_blank"><img src="images/pcp.png" width="100%"></a></td></tr>
  </table>

  <form action="page7.php" method="get">
    <input name="id" value="<?php print $id ?>" type="hidden">
    <table class="question">
      <tbody>
	<tr>
	  <td align="left">Rate your knowledge and understanding of the Parallel Coordinates Plot.</td>
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
	  <td align="left">Which path has the shortest length?</td>
	  <td align="center" colspan="3"><input type="text" name="shortest"></td>
	</tr>
	<tr>
	  <td align="left">Which path is the safest and why?</td>
	  <td align="center" colspan="3"><textarea name="danger"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Given the choice between the 'yellow' and the 'red' path, which one would you choose and why? Which trade-offs are necessary?</td>
	  <td align="center" colspan="3"><textarea name="choice1"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Given the choice between the 'blue' and the 'pink' path, which one would you choose and why? Which trade-offs are necessary?</td>
	  <td align="center" colspan="3"><textarea name="choice2"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Which path would you choose based on this information and why?</td>
	  <td align="center" colspan="3"><textarea name="choose"></textarea></td>
	</tr>
	<tr>
	  <td align="left">How would you order the attributes from more important to less important?</td>
	  <td align="center" colspan="3"><textarea name="ordering"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Which path or paths would you like to inspect in the 3D view? Which additional information would you hope to gain from it?</td>
	  <td align="center" colspan="3"><textarea name="additional"></textarea></td>
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
