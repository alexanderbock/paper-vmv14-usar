<html>
<head>
  <META NAME="robots" CONTENT="noindex,nofollow">
  <title>Urban Search and Rescue Evaluation -- Page 2</title>
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

     $immersion = $_GET['immersion'];
     $knowledge = $_GET['knowledge'];
     $useful = $_GET['useful'];
     $roomdesc = $_GET['roomdesc'];
     $comments= $_GET['comments'];

     ini_set('display_errors', 1);
     error_reporting(-1);

     $mysqli = new mysqli('localhost', 'vis14-usar', 'zYRptTc8tyYKTbC4', 'vis14-usar');

     # Update last-modified date
     $query = "UPDATE Evaluation SET lastmodified='$time' WHERE id='$id';";
     $mysqli->query($query);

     # Check if there already is a line
     $checkquery = "SELECT * FROM Page1 WHERE (id = $id);";
     $checkresult = $mysqli->query($checkquery);
     if ($checkresult->num_rows == 0)
       $dataquery = "INSERT INTO Page1 (id, immersion, knowledge, useful, roomdesc, comments) VALUES ('$id', '$immersion', '$knowledge', '$useful', '$roomdesc', '$comments');";
     else
       $dataquery = "UPDATE Page1 SET immersion='$immersion', knowledge='$knowledge', useful='$useful', roomdesc='$roomdesc', comments='$comments' WHERE id='$id';";
     $mysqli->query($dataquery);

     $mysqli->close();
  ?>
  <center>
  <div class="title">Path Representation</div>
  <progress value="1" max="8"></progress>
  <div class="boxedinfo">
    <center><a href="images/system-overview-page2.png" target="_blank"><img src="images/system-overview-page2.png" width="50%"></a></br></center>
    The system computes different evacuation paths through the building. The images show the same building as before, but with marked areas; <b><font color="cyan">cyan</font></b> is the building's entry point; <b><font color="#00EE00">green</font></b> is the location of an injured victim. In scenarios II and III, the <b><font color="red">red</font></b> areas are hazardous regions, for example fire or a chemical spill, which pose danger to a human rescuer. Please inspect the three scenarios and provide the suggested path for a rescuer to take.
  </div>
  <table class="media" id="scenarioSmall">
    <tr><td align="center" id="small"><a href="images/scenario1.png" target="_blank"><img src="images/scenario1.png" width="100%"></a></td></tr>
    <tr><td align="center">Scenario I</td></tr>
  </table>
  <table class="media" id="scenarioSmall">
    <tr><td align="center" id="small"><a href="images/scenario2.png" target="_blank"><img src="images/scenario2.png" width="100%"></a></td></tr>
    <tr><td align="center">Scenario II</td></tr>
  </table>
  <table class="media" id="scenarioSmall">
    <tr><td align="center" id="small"><a href="images/scenario3.png" target="_blank"><img src="images/scenario3.png" width="100%"></a></td></tr>
    <tr><td align="center">Scenario III</td></tr>
  </table>

  <!-- Path vertical rendering -->
  <!-- Scenario X in die Bilder rein -->


  <form action="page3.php" method="get">
    <input name="id" value="<?php print $id ?>" type="hidden">
    <table class="question">
      <tbody>
	<tr>
	  <td align="left">Which evacuation path would you choose in scenario I?</td>
	  <td>
	  <td align="center">
	    <div class="radiogroup">
	      <label>violet</label>
 	      <input name="scenario1" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>blue</label>
	      <input name="scenario1" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>orange</label>
	      <input name="scenario1" value="3" type="radio" required>
	    </div>
	  </td>
	</tr>
	<tr>
	  <td align="left">Which evacuation path would you choose in scenario II?</td>
	  <td>
	  <td align="center">
	    <div class="radiogroup">
	      <label>violet</label>
	      <input name="scenario2" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>blue</label>
	      <input name="scenario2" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>orange</label>
	      <input name="scenario2" value="3" type="radio" required>
	    </div>
	  </td>
	</tr>
	<tr>
	  <td align="left">Which evacuation path would you choose in scenario III?</td>
	  <td>
	  <td align="center">
	    <div class="radiogroup">
	      <label>violet</label>
	      <input name="scenario3" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>blue</label>
	      <input name="scenario3" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>orange</label>
	      <input name="scenario3" value="3" type="radio" required>
	    </div>
	  </td>
	</tr>
	<tr>
	  <td align="left">What is the length of the blue path in relation to the violet path?</td>
	  <td>
	  <td align="center"><input type="text" name="length"></td>
	</tr>
	<tr>
	  <td align="left">When, in general, is it useful to sacrifice safety to reduce travel time along a evacuation path?</td>
	  <td>
	  <td align="center"><textarea name="hazard"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Optionally provide additional feedback/wishes/comments/criticisms.</br>You can also describe problems or issues regarding one of the tasks/questions here.</td>
	  <td>
	  <td align="center"><textarea name="comments"></textarea></td>
        </tr>
      </tbody>
    </table>
    <input id="next" type="submit" value="Next"/>
  </form>
  </center>
</body>
</html>
