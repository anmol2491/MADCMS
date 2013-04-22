
<?php /*Custom CMS Project By : Deepak Mittal, Anmol Mittal, Ashish Maheshwari
Completed on : 10-2-2013
WT Based SE LAB ,VITS Gzb*/ ?>


<!DOCTYPE HTML>
<html>
<head>

<title>MADCMS</title>
<!--Defining Stylesheet Of MADCMS-->
<link href="http://localhost/MADCMS/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="sidebar"> 
<h1 style="color:black;margin-left:10px;">Recent Posts</h1>
<?php

		$sql = mysql_query("SELECT * FROM pages WHERE pageID IS NOT NULL ORDER BY pageID desc");
		 $i=0;
		echo'<ul> ';
		
while($i<5)
{
$r= mysql_fetch_object($sql);
  
		echo'<br /> <span style="font-size:10px">';

			echo "<li><a href=\"http://localhost/MADCMS/?p=$r->pageID\">$r->pageTitle</a></li>";
	
	$i++;
 
}
?>
</ul>

<b style="float:right;font-size:10px">
<a href="http://localhost/MADCMS/posts.php">see more</a></b>
</div>

</div>
<div id="wrapper">

   </body>
   
 </html>