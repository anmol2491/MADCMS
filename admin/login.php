<?php /*Custom CMS Project By : Deepak Mittal, Anmol Mittal, Ashish Maheshwari
Completed on : 10-2-2013
WT Based SE LAB ,VITS Gzb*/ ?>

<?php


 require('../config.php'); 
if(logged_in()) {
header('Location: http://localhost/MADCMS/admin');
}
?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MADCMS</title>
<link rel="stylesheet" href="http://localhost/MADCMS/login.css" type="text/css" />

<link rel="stylesheet" href="http://localhost/MADCMS/style.css" type="text/css" />
</head>
<body>
<div class="lwidth">
	
	<div style="margin-left:auto;margin-right:auto">
	<img src="http://localhost/MADCMS/logo.png">
	</div>
		<div class="content" style="margin-left:20px">
		
		<?php 
		if($_POST['submit']) {
			login($_POST['username'], $_POST['password']);
			
		}
		?>

<div id="login">
    
	<form method="post" action="">
	<p><label><strong>Username :</strong><input type="text" name="username" /></label></p>
	<p><label><strong>Password :   </strong><input type="password" name="password" /></label></p>
	<p><br /><input type="submit" name="submit" class="button" value="login" /></p>                       
	</form>	  	  
</div>
		
		</div>	
		<div class="clear"></div>		
	
<div class="footer">&copy; MADCMS 2k13</div>	
</div>
</body>
</html>