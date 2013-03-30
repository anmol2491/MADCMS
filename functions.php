<?php /*Custom CMS Project By : Deepak Mittal, Anmol Mittal, Ashish Maheshwari
Completed on : 10-2-2013
WT Based SE LAB ,VITS Gzb*/ ?>

<?php
 

//Function to Login
function login($user, $pass)
{

   //Escapes special characters   
   $user = strip_tags(mysql_real_escape_string($user));
   $pass = strip_tags(mysql_real_escape_string($pass));

//Converts Our Password To The Respective MD5 Hash
   $pass = md5($pass);

   //Checking Login Data
   $sql = "SELECT * FROM members WHERE username = '$user' AND password = '$pass'";
   //Passsing sql though mysql_query Function
   $result = mysql_query($sql) or die('Query failed. ' . mysql_error());
   

      
   if (mysql_num_rows($result)==1)

   {
      //The Username and Pass Matches
      //Start The Session
    $_SESSION['authorized'] = true;
					  
	  // Direct to Admin Panel
      header('Location: http://localhost/MADCMS/admin');
	  exit();
   } 
   else 
   {
	//The Username and Pass Does Not Match
	$_SESSION['error'] = 'MADCMS May Suck @Security Features But It Aint That Easy';
	echo "heell";
   }
   

}

function register($user, $pass, $eid)
{

   //Escapes special characters  
   $user = strip_tags(mysql_real_escape_string($user));
   $pass = strip_tags(mysql_real_escape_string($pass));
   $eid = strip_tags(mysql_real_escape_string($eid));

//Converts Our Password To The Respective MD5 Hash
   $unpass=$pass;
   $pass = md5($pass);

   //Checking Login Data
   $sql = "INSERT INTO `members` ( `username`, `password` ,`eid`) VALUES( '$user', '$pass', '$eid')";
 mysql_query($sql);
 
   
}


//Function to Check If Already Logged In
function logged_in()
 {
	if($_SESSION['authorized'] == true) //A Simple Yes Or No
	{
		return true;
	} 
	else
	{
		return false;
	}	
}

function login_required() {
	if(logged_in()) {	
		return true;
	} else {
		header('Location: http://localhost/MADCMS/admin/login.php');
		exit();
	}	
}
//Function to Logout From The Admin Panel
function logout(){
	unset($_SESSION['authorized']);
	header('Location: http://localhost/MADCMS/admin/login.php');
	exit();
}

function comment($id,$name,$cmt)
{

$q="INSERT INTO `comment` ( `pid`, `name` ,`cmt`) VALUES( '$id', '$name', '$cmt')";
mysql_query($q);
}



function commentdisplay($id)
{
 
 $q="SELECT * FROM comment WHERE pid='$id'";
 $q=mysql_query($q);
 
 while($r= mysql_fetch_array($q))
  {
  echo '<div id="cmt"><name>';
  echo $r['name'];
  echo " : </name>";
  echo "<cmnt> ";
  echo $r['cmt'];
  echo "</cmnt></div>";
  }
	 
   $id++;
}

?>
