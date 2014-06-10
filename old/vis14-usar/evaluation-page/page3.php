<html>
<head>
  <META NAME="robots" CONTENT="noindex,nofollow">
  <title>Urban Search and Rescue Evaluation -- Page 3</title>
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

     $scenario1 = $_GET['scenario1'];
     $scenario2 = $_GET['scenario2'];
     $scenario3 = $_GET['scenario3'];
     $length = $_GET['length'];
     $hazard = $_GET['hazard'];
     $comments= $_GET['comments'];

     //ini_set('display_errors', 1);
     //error_reporting(-1);

     $mysqli = new mysqli('localhost', 'vis14-usar', 'zYRptTc8tyYKTbC4', 'vis14-usar');

     # Update last-modified date
     $query = "UPDATE Evaluation SET lastmodified='$time' WHERE id='$id';";
     $mysqli->query($query);

     # Check if there already is a line
     $checkquery = "SELECT * FROM Page2 WHERE (id = $id);";
     $checkresult = $mysqli->query($checkquery);
     if ($checkresult->num_rows == 0)
       $dataquery = "INSERT INTO Page2 (id, pathscenario1, pathscenario2, pathscenario3, length, sacrificehazard, comments) VALUES ('$id', '$scenario1', '$scenario2', '$scenario3', '$length', '$hazard', '$comments');";
     else
       $dataquery = "UPDATE Page2 SET pathscenario1='$scenario1', pathscenario2='$scenario2', pathscenario3='$scenario3', length='$length', sacrificehazard='$hazard', comments='$comments' WHERE id='$id';";
     $mysqli->query($dataquery);

     $mysqli->close();
  ?>
  <center>
  <div class="title">Evacuation Path Walkthrough</div>
  <progress value="2" max="8"></progress>
  <div class="boxedinfo">
    <center><a href="images/system-overview-page3.png" target="_blank"><img src="images/system-overview-page3.png" width="50%"></a></br></center>
    As the evacuation paths from the previous page are generated automatically, it is necessary to inspect the validity and check for obstacles before a rescuer follows a given path. These walkthroughs can be shown in <i>direct rendering</i> (videos on the left) or as a <i>simulated depth image</i> (videos on the right). We kindly ask you to watch at least one video from each path and answer the questions below. While watching the videos, be mindful of the path, any obstacles along the way, and similar structures seen on both paths.
  </div>

  <table id="scenario" style="width:85%; height:100%;">
    <tr>
      <td>
	<table class="media" id="scenarioVideo">
	  <tr>
	    <td align="center"><iframe width="95%" height="95%" src="//www.youtube.com/embed/LYn1Uzwy73Y" frameborder="0" allowfullscreen></iframe></td>
	    <td align="center"><iframe width="95%" height="95%" src="//www.youtube.com/embed/4jUdwcgTamk" frameborder="0" allowfullscreen></iframe></td>
	  </tr>
	  <tr>
	    <td align="center">Path I &ndash; Direct Rendering</td>
	    <td align="center">Path I &ndash; Simulated Depth Image</td>
	  </tr>
	</table>
      </td>
    </tr>
    <tr style="height:30px;">
    </tr>
    <tr>
      <td>
	<table class="media" id="scenarioVideo">
	  <tr>
	    <td align="center"><iframe width="95%" height="95%" src="//www.youtube.com/embed/rnJuOShzMWQ" frameborder="0" allowfullscreen></iframe></td>
	    <td align="center"><iframe width="95%" height="95%" src="//www.youtube.com/embed/5qGjajan3-k" frameborder="0" allowfullscreen></iframe></td>
	  </tr>
	  <tr>
	    <td align="center">Path II &ndash; Direct Rendering</td>
	    <td align="center">Path II &ndash; Simulated Depth Image</td>
          </tr>
	</table>
      </td>
    </tr>
  </table>

  <form action="page4.php" method="get">
    <input name="id" value="<?php print $id ?>" type="hidden">
    <table class="question">
      <tbody>
	<tr>
	  <td align="left">Rate the usefulness of the walkthrough in helping to understand the path.</td>
	  <td align="right">(useless)</td>
	  <td align="center" id="radiogroupgroup">
	    <div class="radiogroup">
	      <label>1</label>
	      <input name="useful" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>2</label>
	      <input name="useful" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>3</label>
	      <input name="useful" value="3" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>4</label>
	      <input name="useful" value="4" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>5</label>
	      <input name="useful" value="5" type="radio" required>
	    </div>
	  </td>
	  <td align="left">(useful)</td>
	</tr>
	<tr>
	  <td align="left">Rate your knowledge and understanding of the evacuation path.</td>
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
	  <td align="left">Which of the videos did you inspect?</td>
	  <td align="center" colspan="3">
	    <table>
	      <tr>
		<td align="center"><input type="checkbox" name="videopath1direct" value="1">Path I &ndash; Direct Rendering</td>
		<td align="center"><input type="checkbox" name="videopath1depth" value="1">Path I &ndash; Simulated Depth Image</td>
	     </tr>
	     <tr>
		<td align="center"><input type="checkbox" name="videopath2direct" value="1">Path II &ndash; Direct Rendering</td>
		<td align="center"><input type="checkbox" name="videopath2depth" value="1">Path II &ndash; Simulated Depth Image</td>
            </table>
	<tr>
	  <td align="left">Did you see any potential obstacles along the way? If so, when did you see them (time in the video) and why might they be troublesome?</td>
	  <td align="center" colspan="3">Path I: <textarea name="spots"></textarea></br>Path II: <textarea name="spots2"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Did you notice similar structures you could identify in both paths? If so, when did they occur (time in the video)?</td>
	  <td align="center" colspan="3"><textarea name="notice"></textarea></td>
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
