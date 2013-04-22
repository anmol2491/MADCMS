 <?php
 require('config.php'); 

?>

<!DOCTYPE HTML>
<head>

<title>MADCMS</title>
<link rel="stylesheet" href="http://localhost/MADCMS/login.css" type="text/css" />
<link rel="stylesheet" href="http://localhost/MADCMS/style.css" type="text/css" />
</head>

<body>

<div id="wrappers">
<form method="post" action="">
    <table>
	<th colspan="2">Register to MADCMS</th>
	<tr>
	<td>
	
	<p><label><strong>Username :</strong>
	</td>
	<td>
	<input type="text" name="username" id="wd"/></p>
	</td>
	</tr>
	<tr>
	<td>
	<p><label><strong>Password :   </strong>
	</td>
	<td>
	<input type="password" name="password" id="wd"/></label></p>
	</td>
	<tr>
	<td>
	<p><label><strong>Verify Password :   </strong>
	</td>
	<td>
	<input type="password" name="vpassword" id="wd"/></label></p>
	</td>
	<tr>
	
	<td>
	<p><label><strong>Email :   </strong>
	</td>
	<td>
	<input type="text" name="eid" id="wd"/></label></p>
	</td>
	</tr>     
	

	<th colspan="2"><p><br /><input type="submit" name="submit" class="button" value="Register" /></p></th> </table>
	</form>	  	  
</div>

	<?php 
		if($_POST['submit']) 
		{
		   if($_POST['password']==$_POST['vpassword'])
		   {
		   
			register($_POST['username'], $_POST['password'],$_POST['eid']);
			echo '<h3 align="center" style="font-size:25px;color:red">Registration Successfull. Click <a href="http://localhost/madcms/admin/login.php">here</a> to login.<h3>';
		    }
			else
			{
			echo '<h3 align="center" style="font-size:25px;color:red">Passwords do not match. Try Again.</h3>';
			}
		}
		?>

		
<div class="footers">&copy; MADCMS 2k13</div>	
</div>
</body>
</html>
