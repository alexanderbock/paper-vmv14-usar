<html>
<head>
  <META NAME="robots" CONTENT="noindex,nofollow">
  <title>Urban Search and Rescue Evaluation -- Page 1</title>
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
  <div class="title">3D Representation</div>
  <progress value="0" max="8"></progress>
  <div class="boxedinfo">
<center><a href="images/system-overview-page1.png" target="_blank"><img src="images/system-overview-page1.png" width="50%"></a></br></center>
The goal of this task is to familiarize you with the scene acquired at the Fukushima Daiichi nuclear reactor. Please watch the video and images and try to learn as much as you can about the building. The simulated depth images depict features closer to the camera brighter and features farther away darker.
  </div>
  <table id="scenario" style="height: 100%;">
    <tr>
      <td align="center">
	<table class="media" id="scenarioVideo">
	  <tr><td align="center"><iframe width="95%" height="95%" src="//www.youtube.com/embed/gnBDN8VDQZM" frameborder="1" allowfullscreen></iframe></td></tr>
	  <tr><td align="center">An interactive fly-over of the Fukushima dataset.</td></tr>
	</table>
      </td>
      <td align="center">
	<table class="media" id="scenario">
	  <tr><td align="center"><a href="images/overview.jpg" target="_blank"><img src="images/overview.jpg" width="95%"></a></td></tr>
	  <tr><td align="center">A birdseye view of the whole dataset. The locations of the images below are marked.</td></tr>
	</table>
      </td>
    </tr>
    <tr><td></br></td></tr>
    <tr>
      <td align="center">
	<table class="media" id="scenario">
	  <tr><td align="center"><a href="images/room1.png" target="_blank"><img src="images/room1.png" width="95%"></a></td></tr>
	  <tr><td align="center">Image 1</td></tr>
	</table>
      </td>
      <td align="center">
	<table class="media" id="scenario">
	  <tr><td align="center"><a href="images/room2.png" target="_blank"><img src="images/room2.png" width="95%"></a></td></tr>
	  <tr><td align="center">Image 2</td></tr>
	</table>
      </td>
    </tr>
    <tr>
      <td align="center" colspan="2">
	<table class="media" id="scenario">
	  <tr>
	    <td align="center"><a href="images/hallway1.png" target="_blank"><img src="images/hallway1.png" width="95%"></a></td>
	    <td align="center"><a href="images/hallway1-depth.png" target="_blank"><img src="images/hallway1-depth.png" width="95%"></a></td>
	  </tr>
	  <tr>
	    <td align="center">Image 3</td>
	    <td align="center">Image 3 (simulated depth)</td>
	  </tr>
	</table>
      </td>
    </tr>
    <tr>
      <td align="center" colspan="2">
	<table class="media" id="scenario">
	  <tr>
	    <td align="center"><a href="images/room3.png" target="_blank"><img src="images/room3.png" width="95%"></a></td>
	    <td align="center"><a href="images/room3-depth.png" target="_blank"><img src="images/room3-depth.png" width="95%"></a></td>
	  </tr>
	  <tr>
	    <td align="center">Image 4</td>
	    <td align="center">Image 4 (simulated depth)</td>
	  </tr>
	</table>
      </td>
    </tr>
    <tr>
      <td align="center" colspan="2">
	<table class="media" id="scenario">
	  <tr>
	    <td align="center"><a href="images/room4.png" target="_blank"><img src="images/room4.png" width="95%"></a></td>
	    <td align="center"><a href="images/room4-depth.png" target="_blank"><img src="images/room4-depth.png" width="95%"></a></td>
	  </tr>
	  <tr>
	    <td align="center">Image 5</td>
	    <td align="center">Image 5 (simulated depth)</td>
	  </tr>
	</table>
      </td>
    </tr>
  </table>

  <form action="page2.php" method="get">
    <input name="id" value="<?php print $id ?>" type="hidden">
    <table class="question">
      <tbody>
	<tr>
	  <td align="left">Rate the level of immersion (the feeling of being involved, presence) in the scene.</td>
	  <td align="right">(no immersion)</td>
	  <td align="center" id="radiogroupgroup">
	    <div class="radiogroup">
	      <label>1</label>
	      <input name="immersion" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>2</label>
	      <input name="immersion" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>3</label>
	      <input name="immersion" value="3" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>4</label>
	      <input name="immersion" value="4" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>5</label>
	      <input name="immersion" value="5" type="radio" required>
	    </div>
	  </td>
	  <td align="left">(high immersion)</td>
	</tr>
	<tr>
	  <td align="left">Rate your knowledge and understanding of the structure of the building.</td>
	  <td align="right">(no understanding)</td>
	  <td align="center" id="radiogroupgroup">
	    <div class="radiogroup">
	      <label>1</label>
	      <input name="knowledge" value="1" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>2</label>
	      <input name="knowledge" value="2" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>3</label>
	      <input name="knowledge" value="3" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>4</label>
	      <input name="knowledge" value="4" type="radio" required>
	    </div>
	    <div class="radiogroup">
	      <label>5</label>
	      <input name="knowledge" value="5" type="radio" required>
	    </div>
	  </td>
	  <td align="left">(full understanding)</td>
	</tr>
	<tr>
	  <td align="left">Rate the usefulness of the 3D rendering in understanding the building as compared to the birdseye view.</td>
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
	  <td align="left">Describe the interior elements you can identify in the room that is shown in Image 5.</td>
	  <td align="center" colspan="3"><textarea name="roomdesc"></textarea></td>
	</tr>
	<tr>
	  <td align="left">Optionally provide additional feedback/wishes/comments/criticisms.</br>You can also describe problems or issues regarding one of the tasks/questions here.</td>
	  <td align="center" colspan="3"><textarea name="comments"></textarea></td>
	</tr>
      </tbody>
    </table>
    </div>
    <input id="next" type="submit" value="Next"/>
  </form>
  </center>
</body>
</html>
