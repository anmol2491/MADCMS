<?php /*Custom CMS Project By : Deepak Mittal, Anmol Mittal, Ashish Maheshwari
Completed on : 10-2-2013
WT Based SE LAB ,VITS Gzb*/ ?>

<?php 

require('../config.php'); 

if(!isset($_GET['id']) || $_GET['id'] == ''){ //If No id Is Passed
  header('Location: http://localhost/MADCMS/admin' );
}

//If New Content Submitted
if(isset($_POST['submit']))
{

	$title = $_POST['pageTitle'];
	$content = $_POST['pageCont'];
	$pageID = $_POST['pageID'];
	
	$title = mysql_real_escape_string($title);
	$content = mysql_real_escape_string($content);
	
	mysql_query("UPDATE pages SET pageTitle='$title', pageCont='$content' WHERE pageID='$pageID'");
	$_SESSION['success'] = 'Page Updated';
	header('Location: http://localhost/MADCMS/admin' );
	exit();

}

?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MADCMS</title>
<link href="http://localhost/MADCMS/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="adwrap">

<!-- Navigation Bar -->
<div id="adna">
<ul class="menu">
<li><a href="http://localhost/MADCMS/admin">Admin</a></li>
<li><a href="http://localhost/MADCMS/admin?logout">Logout</a></li>
<li><a href="http://localhost/MADCMS/" target="_blank">View Website</a></li>
</ul>
</div>


<div id="contents">

<h1>Edit Page</h1>

<?php
$id = $_GET['id'];
$id = mysql_real_escape_string($id);
$q = mysql_query("SELECT * FROM pages WHERE pageID='$id'");
$row = mysql_fetch_object($q);
?>


<form action="" method="post">
<input type="hidden" name="pageID" value="<?php echo $row->pageID;?>" />
<p>Title:<br /> <input name="pageTitle" type="text" value="<?php echo $row->pageTitle;?>" size="103" /></p>
<p>content<br /><textarea name="pageCont" cols="80" rows="20"><?php echo $row->pageCont;?></textarea></p>
<p><input type="submit" name="submit" value="Save" class="button" /></p>
</form>

</div>

<div id="footerk">	
		<p style="padding-left:20px;">&copy; MADCMS </p>
</div>
</div> 

</body>
</html>
