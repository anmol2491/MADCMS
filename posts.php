<html>

<body>

<link href="http://localhost/MADCMS/style.css" rel="stylesheet" type="text/css" />
<div id="adwrap">
<?php
require('config.php'); 
$j=mysql_query("SELECT * FROM pages");


echo '<div style="padding-top:20px">';
echo '<ol>';
while($r= mysql_fetch_object($j))
{


			echo "<li><h1><a href=\"http://localhost/MADCMS/?p=$r->pageID\">$r->pageTitle</h1></li>";
			
	
}

echo'</ol>';	
?>
</div>
</body>
</html>