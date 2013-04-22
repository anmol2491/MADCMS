
<?php /*Custom CMS Project By : Deepak Mittal, Anmol Mittal, Ashish Maheshwari
Completed on : 10-2-2013
WT Based SE LAB ,VITS Gzb*/ ?>

<?php

require('../config.php'); 

//User Must Be Logged In
login_required();

//If Logged Out 
if(isset($_GET['logout'])){
	logout();
}



?>

<!DOCTYPE HTML>

<head>
<title>MADCMS</title>
<link href="http://localhost/MADCMS/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript">
	function delpage(id, title)
	{
	   if (confirm("Are you sure you want to delete '" + title + "'"))
	   {
		  window.location.href = 'http://localhost/MADCMS/admin?delpage=' + id;
	   }
	}
</script>
</head>
<body>

<div id="adwrap">

<!-- Admin Navingation Bar In MADCMS's Adimin -->
<div id="adna">
	<ul class="menu">
		<li><a href="http://localhost/MADCMS/admin">Admin</a></li>		
		<li><a href="http://localhost/MADCMS/" target="_blank">View Website</a></li>
		<li><a href="http://localhost/MADCMS/admin?logout">Logout</a></li>
	</ul>
</div>


<div class="adcontent">
 
<?php

echo $ur;
?>
<table>
<tr>
	<th><strong>MADCMS's Pages</strong></th>
	<th><strong>Operation</strong></th>
</tr>

<?php
$sql = mysql_query("SELECT * FROM pages ORDER BY pageID");
while($row = mysql_fetch_object($sql)) 
{
	echo "<tr>";
		echo "<td>$row->pageTitle</td>";
		
			echo "<td><a href=\"http://localhost/MADCMS/admin/editpage.php?id=$row->pageID\">Edit</a>  
			| <a href=\"javascript:delpage('$row->pageID','$row->pageTitle');\">Delete</a></td>";  //Edit And Delete
		
		
	echo "</tr>";
}
?>
</table>

<p><a href="http://localhost/MADCMS/admin/addpage.php" class="button">Add Page</a></p>
</div>

<?php
//Run If Page Has To Be Deleted
if(isset($_GET['delpage']))
{
		
	$delpage = $_GET['delpage'];
	$delpage = mysql_real_escape_string($delpage);
	$sql = mysql_query("DELETE FROM pages WHERE pageID = '$delpage'");
    $_SESSION['success'] = "Page Deleted"; 
    header('Location: http://localhost/MADCMS/admin');
   	exit();
}
?>
<div id="footerk">	
		<div class="copy"><p style="margin-left:20px">  &copy; MADCMS 2k13 </p></div>
</div><!-- close footer -->
</div><!-- close wrapper -->

</body>
</html>