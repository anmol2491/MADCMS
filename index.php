
<?php /*Custom CMS Project By : Deepak Mittal, Anmol Mittal, Ashish Maheshwari
Completed on : 10-2-2013
WT Based SE LAB ,VITS Gzb*/ ?>

<?php
require('config.php'); ?>
<!DOCTYPE HTML>
<html>
<head>

<title>MADCMS</title>
<!--Defining Stylesheet Of MADCMS-->
<link href="http://localhost/MADCMS/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="hel">
 <!--Logo To Our Site-->
  <div id="logo"><a href="http://localhost/MADCMS/"><img src="logo.png" alt="MADCMS" title="MADCMS" border="0"/></a></div>
	
	
	<?php
	include('sidebar.php');
	?>
	
<!-- Navigation Bar Of MADCMS -->
	<div id="navigation">
	<ul class="menu">
	<li><a href="http://localhost/MADCMS/">Home</a></li>
	<li><a href="http://localhost/MADCMS/reg.php">Register</a></li>
	<li><a href="http://localhost/MADCMS/admin/">Admin Panel</a></li>
	<?php
		//Adding Remaning Pages
		$sql = mysql_query("SELECT * FROM pages WHERE isRoot='1' ORDER BY pageID");
		while ($row = mysql_fetch_object($sql))
		{
		$string = substr($row->pageTitle,0,10);
			
			echo "<li><a href=\"http://localhost/MADCMS/?p=$row->pageID\">$string..</a></li>";
		}
	?>
	</ul>
	</div>
	
	<div id="content">
	
	<?php	
	
	$j=mysql_query("SELECT MAX(pageID) FROM pages");
	$z = mysql_fetch_row($j);
	

		$a=mysql_query("SELECT MIN(pageID) FROM pages");
	$b = mysql_fetch_row($a);
	

	$i=0;
	//Grabbing Posts From Our db 
	if(!isset($_GET['p']))
	{	

		$id = 0;
		$id = mysql_real_escape_string($id);
		$q = mysql_query("SELECT * FROM pages` WHERE pageID IS NOT NULL ");
		    
 
while($r= mysql_fetch_array($q))
  {
  echo "<h1>";
  echo "<p>";
  echo $r['pageTitle'];
  echo "</p>";
  echo "</h1>";
  echo "<br />";
  echo $r['pageCont'];
  echo "";
  }
	 
   $id++;
	}
	  
	else 
	{ 
		$id = $_GET['p'];
		$id = mysql_real_escape_string($id);
		$q = mysql_query("SELECT * FROM pages WHERE pageID='$id'");
		 
	$r = mysql_fetch_object($q);
		//Printing the Content
	echo "<h1>$r->pageTitle</h1>";
	echo $r->pageCont;
	
	echo'
<br><br><br>
<form action="" method="post">
<p>Name<br /> <br /><input name="name" type="text" value="" size="50" /></p>
<p>Comment<br /><br /><textarea name="cmt" cols="50" rows="10"></textarea></p>
<p><input type="submit" name="submit" value="Comment" class="button" /></p>
</form>

';
	
if(isset($_POST['submit']))
{
comment($id,$_POST['name'],$_POST['cmt']);
}

echo'<h1> Previous Comments </h1>';
commentdisplay($id);
}	
?>
	
</div>

	<div id="footer">	
			<div class="copy">&copy; MADCMS</div>
	</div>

</div>
</body>
</html>
