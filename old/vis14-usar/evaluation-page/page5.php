<html>
<head>
  <META NAME="robots" CONTENT="noindex,nofollow">
  <title>Urban Search and Rescue Evaluation -- Page 5</title>
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

     //ini_set('display_errors', 1);
     //error_reporting(-1);

     $mysqli = new mysqli('localhost', 'vis14-usar', 'zYRptTc8tyYKTbC4', 'vis14-usar');

     # Update last-modified date
     $query = "UPDATE Evaluation SET lastmodified='$time' WHERE id='$id';";
     $mysqli->query($query);

     $mysqli->close();
  ?>
  <center>
  <div class="title">Profile Plot</div>
  <progress value="4" max="8"></progress>
  <div class="boxedinfo">
    <center><a href="images/system-overview-page5.png" target="_blank"><img src="images/system-overview-page5.png" width="50%"></a></br></center>
    The <i>Profile Plot</i> shows how a single attribute changes along each path. The following plot shows the distance to the closest hazardous area on the vertical axis and the distance travelled on the horizontal axis. Each path is represented by a colored line. All of the paths reach the destination, but have different lengths.
  </div>

  <table class="media" id="scenarioSmall">
    <tr><td align="center" id="small"><a href="images/profileplot.png" target="_blank"><img src="images/profileplot.png" width="100%"></a></td></tr>
  </table>

  <form action="page6.php" method="get">
    <input name="id" value="<?php print $id ?>" type="hidden">
    <table class="question">
      <tbody>
	<tr>
	  <td align="left">Rate your knowledge and understanding of the Profile Plot.</td>
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
	  <td align="left">How many different paths exist in the plot?</td>
	  <td align="center" colspan="3"><input type="text" name="numGroups"></td>
	</tr>
	<tr>
	  <td align="left">Which path has the shortest length?</td>
	  <td align="center" colspan="3"><input type="text" name="shortest"></td>
	</tr>
	<tr>
	  <td align="left">How often does the shortest path cross the hazardous areas?</td>
	  <td align="center" colspan="3"><input type="text" name="crossing"></td>
	</tr>
	<tr>
	  <td align="left">Relate the characteristics of the 'orange' and the 'red' path to each other.</td>
	  <td align="center" colspan="3"><textarea name="pathdiff"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Which path would you choose and why?</td>
	  <td align="center" colspan="3"><textarea name="choose"></textarea></td>
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
