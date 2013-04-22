<?php /*Custom CMS Project By : Deepak Mittal, Anmol Mittal, Ashish Maheshwari
Completed on : 10-2-2013
WT Based SE LAB ,VITS Gzb*/ ?>

<?php 
require('../config.php'); 


?>

<!DOCTYPE HTML>
<head>
<title>MADCMS</title>
<link href="http://localhost/MADCMS/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="adwrap">

<!-- Navigation Bar -->
<div id="adna">
<ul class="menu">
<li><a href="http://localhost/MADCMS/admin">Admin</a></li>
<li><a href="http://localhost/MADCMS?logout">Logout</a></li>
<li><a href="http://localhost/MADCMS" target="_blank">View Website</a></li>
</ul>
</div>
<!-- END NAV -->

<div id="content">

<h1>Add Page</h1>

<form action="" method="post">
<p>Heading<br /> <input name="pageTitle" type="text" value="" size="103" /></p>
<p>Content<br /><textarea name="pageCont" cols="80" rows="20"></textarea></p>
 
<p><input type="submit" name="submit" value="Publish" class="button" /></p>
</form>

</div>

<?php
//If Submitted
if(isset($_POST['submit'])){

	$title = $_POST['pageTitle'];
	$content = $_POST['pageCont'];
	
	$title = mysql_real_escape_string($title);
	$content = mysql_real_escape_string($content);
	
	mysql_query("INSERT INTO pages (pageTitle,pageCont) VALUES ('$title','$content')")or die(mysql_error());
	
	$_SESSION['success'] = 'Page Added';
	header('Location: http://localhost/MADCMS/admin');
	exit();

}
?>
<div id="footer">	
		<div class="copy">&copy; MADCMS </div>
</div>
</div>

</body>
</html>