<html>
<head>
  <META NAME="robots" CONTENT="noindex,nofollow">
  <title>Urban Search and Rescue Evaluation -- Page 8</title>
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
     $distance = $_GET['distance'];
     $choice1 = $_GET['choice1'];
     $comments= $_GET['comments'];

     //ini_set('display_errors', 1);
     //error_reporting(-1);

     $mysqli = new mysqli('localhost', 'vis14-usar', 'zYRptTc8tyYKTbC4', 'vis14-usar');

     # Update last-modified date
     $query = "UPDATE Evaluation SET lastmodified='$time' WHERE id='$id';";
     $mysqli->query($query);

     # Check if there already is a line
     $checkquery = "SELECT * FROM Page7 WHERE (id = $id);";
     $checkresult = $mysqli->query($checkquery);
     if ($checkresult->num_rows == 0)
       $dataquery = "INSERT INTO Page7 (id, trust, shortest, distance, choice1, comments) VALUES ('$id', '$trust', '$shortest', '$distance', '$choice1', '$comments');";
     else
       $dataquery = "UPDATE Page7 SET trust='$trust',  shortest='$shortest', distance='$distance', choice1='$choice1',  comments='$comments' WHERE id='$id';";
     $mysqli->query($dataquery);

     $mysqli->close();
  ?>

  <center>
  <div class="title">Miscellaneous</div>
  <progress value="7" max="8"></progress>
  <div class="boxedinfo">
    This last page is concerned with the system as a whole, rather than individual components. As with the other text fields, the more information you can provide to us, the more helpful it is for us.</br>
    <center><a href="images/system-overview.png" target="_blank"><img src="images/system-overview.png" width="95%"></a></br></br></center>
  </div>
  <form action="finish.php" method="get">
    <input name="id" value="<?php print $id ?>" type="hidden">
    <table class="question">
      <tbody>
	<tr>
	  <td align="left">Is it helpful to display the paths and does this representation provide additional information?</td>
	  <td align="center" colspan="3"><textarea name="helpful"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Would you like to use this system in addition, or as a replacement, to your current tools?</td>
	  <td align="center" colspan="3"><textarea name="liketouse"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Rate the usefulness of the birdseye overview.</td>
	  <td align="right">(useless)</td>
	  <td align="center" id="radiogroupgroup">
	    <div class="radiogroup">
	      <label>1</label>
	      <input name="birdseye" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>2</label>
	      <input name="birdseye" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>3</label>
	      <input name="birdseye" value="3" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>4</label>
	      <input name="birdseye" value="4" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>5</label>
	      <input name="birdseye" value="5" type="radio" required>
	    </div>
	  </td>
	  <td align="left">(useful)</td>
	</tr>
	<tr>
	  <td align="left">Rate the usefulness of the 3D rendering.</td>
	  <td align="right">(useless)</td>
	  <td align="center" id="radiogroupgroup">
	    <div class="radiogroup">
	      <label>1</label>
	      <input name="rendering" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>2</label>
	      <input name="rendering" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>3</label>
	      <input name="rendering" value="3" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>4</label>
	      <input name="rendering" value="4" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>5</label>
	      <input name="rendering" value="5" type="radio" required>
	    </div>
	  </td>
	  <td align="left">(useful)</td>
	</tr>
	<tr>
	  <td align="left">Rate the usefulness of the Profile Plot.</td>
	  <td align="right">(useless)</td>
	  <td align="center" id="radiogroupgroup">
	    <div class="radiogroup">
	      <label>1</label>
	      <input name="profile" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>2</label>
	      <input name="profile" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>3</label>
	      <input name="profile" value="3" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>4</label>
	      <input name="profile" value="4" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>5</label>
	      <input name="profile" value="5" type="radio" required>
	    </div>
	  </td>
	  <td align="left">(useful)</td>
	</tr>
	<tr>
	  <td align="left">Rate the usefulness of the Parallel Coordinates Plot.</td>
	  <td align="right">(useless)</td>
	  <td align="center" id="radiogroupgroup">
	    <div class="radiogroup">
	      <label>1</label>
	      <input name="pcp" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>2</label>
	      <input name="pcp" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>3</label>
	      <input name="pcp" value="3" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>4</label>
	      <input name="pcp" value="4" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>5</label>
	      <input name="pcp" value="5" type="radio" required>
	    </div>
	  </td>
	  <td align="left">(useful)</td>
	</tr>
	<tr>
	  <td align="left">Rate the usefulness of the Scatterplot Matrix.</td>
	  <td align="right">(useless)</td>
	  <td align="center" id="radiogroupgroup">
	    <div class="radiogroup">
	      <label>1</label>
	      <input name="splom" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>2</label>
	      <input name="splom" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>3</label>
	      <input name="splom" value="3" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>4</label>
	      <input name="splom" value="4" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>5</label>
	      <input name="splom" value="5" type="radio" required>
	    </div>
	  </td>
	  <td align="left">(useful)</td>
	</tr>

	<tr>
	  <td align="left">Please provide additional feedback/wishes/comments about the system as a whole.</td>
	  <td align="center" colspan="3"><textarea name="comments"></textarea></td>
	</tr>
      </tbody>
    </table>
    <input id="next" type="submit" value="Finish"/>
  </form>
  </center>
</body>
</html>
