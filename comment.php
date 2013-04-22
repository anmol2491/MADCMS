
<?php /*Custom CMS Project By : Deepak Mittal, Anmol Mittal, Ashish Maheshwari
Completed on : 10-2-2013
WT Based SE LAB ,VITS Gzb*/ ?>


<?php 
require('config.php'); 
?>

<?php

if(isset($_POST['submit']))
{
comment($id,$_POST['name'],$_POST['cmt']);
}


?>

<!DOCTYPE HTML>
<html>


<div id="comment">

<form action="" method="post">
<p>Name<br /> <input name="name" type="text" value="" size="103" /></p>
<p>Comment<br /><textarea name="cmt" cols="80" rows="20"></textarea></p>
 
<p><input type="submit" name="submit" value="Publish" class="button" /></p>


</form>
</div>



</html>