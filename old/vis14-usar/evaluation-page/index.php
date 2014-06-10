<html>   
<head>
  <META NAME="robots" CONTENT="noindex,nofollow">
  <title>Urban Search and Rescue Evaluation</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>   
<body>
<?php
   $id = rand();
?>
  <center>
  <div class="title">Evaluation &ndash; Fukushima Test Case</div>
  <div class="boxedinfo">
    In this evaluation, we test the usability of a system to support the incident commander in Urban Search &amp; Rescue scenarios during initial exploration of collapsed buildings and the identification of rescue paths. The system operates on post-collapse robot acquired laser scans.</br>
The evaluation consists of five task groups and will, in total, take about 15&ndash;20 minutes to finish. You can find information for pausing and continuing <a href="saveinfo.php" target="_blank">here</a>.</br></br>
This is an overview of the system we are evaluating:</br>
<center><a href="images/system-overview.png" target="_blank"><img src="images/system-overview.png" width="75%"></a></br></br></center>
</br>
Thank you for your time,</br>
&nbsp;&nbsp;the Authors
  </div>
  <form action="info.php" method="get">
    <input name="id" value="<?php print $id ?>" type="hidden">
    <table id="rounded-corner">
      <tbody>
	<tr>
	  <td>Profession</td>
	  <td colspan="2" align="right"><input type="text" name="profession"/></td>
	</tr>
	<tr>
	  <td>Name (optional)</td>
	  <td colspan="2" align="right"><input type="text" name="name"/></td>
	</tr>
	<tr>
	  <td>Affiliation (optional)</td>
	  <td colspan="2" align="right"><input type="text" name="affiliation"/></td>
	</tr>
	<tr>
	  <td colspan="2" align="right"><input id="next" type="submit" value="Start"/></td>
	</tr>
      </tbody>
      <tfoot>
	<tr>
	  <td colspan="3">
	    <div class="boxedinfo" id="nosize"> 
	      The provided name will not appear in any document or publication
	    </div>
	  </td>
	</tr>
      </tfoot>
    </table>
  </form>
  </center>
</body>
</html>
