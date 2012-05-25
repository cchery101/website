<? 
session_start(); 
?> 
<html> 
<head> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".like_me").click(function(){
  
  $(".pop_out").slideToggle(1000);
  /*$(this).css({"-webkit-transform":"rotate(180deg)"});*/
  
  });
});
</script>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<title>Login | Varun B Patil</title> 
<style type="text/css">@import url(index.css);</style>
</head> 
<body> 

<!--header-->
<div id="header">
<a href="index.php"><img class="header_content_img" src="logo-490900.png" width="110px" height="100px" /></a>
<h1 class="header_content"><a class="header_content" href="index.php">Varun B Patil</a></h1>
<i class="header_content">Tough times don't last, but tough people do.</i>


<br /><br /><br /><br /><br /><br /><br />

<!--main menu-->
<table id="main_menu">
<tr>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="index.php">Home</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="portfolio.html">Portfolio</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="learn.html">Learn</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="links.php">Fav Sites</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="blog_new.php">My Blog</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="contact.html">Contact</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="comments.php">Comments</a></td>
	<td class="main_menu_special"><a class="main_menu" href="login.php">Admin</a></td>
</tr>
</table>
</div>
<br /><br /><br /><br /><br /><br />


<? 
function form($error) 
{ 
?> 
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 

<tr> 
<form name="form1" method="post" action=""> 
<td> 
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF"> 

<tr align="center"> 
<td colspan="3"><? if($error){ echo $error; } else { echo '<strong>Member Login </strong>'; } ?></td> 
</tr> 
<tr> 
<td width="78">Username</td> 

<td width="6">:</td> 
<td width="294"><input name="username" type="text" id="username"></td> 

</tr> 
<tr> 
<td>Password</td> 
<td>:</td> 
<td><input name="password" type="password" id="password"></td> 

</tr> 
<tr> 
<td>&nbsp;</td> 
<td>&nbsp;</td> 
<td><input type="submit" name="Submit" value="Login"></td> 

</tr> 
</table> 
</td> 
</form> 
</tr> 
</table> 
<? 
} 
function login_check($username,$password) 
{ 

$db = mysql_connect("sql208.xtreemhost.com", "xth_8523266", "italia") or die('Script Could not connect to database'); 
mysql_select_db("xth_8523266_website2",$db); 

# THE WILL HELP YOU WITH SQL INJECTION 
$password1 = md5($password); 

$sql = "SELECT username,password FROM members where username = '".$username."'"; 

$result = mysql_query($sql ,$db); 
if ($myrow = mysql_fetch_array($result)) 
{ 
if($username == $myrow['username'] && $password1 == $myrow['password']) 
{ 
$login_check = true; 
} 

else 
{ 
$login_check = false; 
} 
} 
else 
{ 
$login_check = false; 
} 

return $login_check; 
} ?>

<?
if(isset($_REQUEST['Submit'])) 
{ 
if(!$_POST['username'] || !$_POST['password']) 
{ 
$error = 'Error: All fields are mandatory'; 
echo form($error); 
} 

else 
{ 
if (login_check($_POST['username'],$_POST['password'])) 
{ 
echo '<center>Congratulations! You are now logged in<br /><br /><a href="./admin.php?e=1">Continue...</a></center>'; 

session_register("username"); 
session_register("password"); 
} 
else 
{ 
$error = "Invalid username or password, try again"; 

echo form($error); 
} 
} 
} 
else 
{ 
if($_GET['logout']) 
{ 
session_destroy(); 
$error = "Logged Out Success - Try Again"; echo form($error); } else { if ($_SESSION['username']) { if (login_check($_SESSION['username'],$_SESSION['password'])) { echo '<a href="?logout=yes">Log out</a>Wallpaperama is a collection of high quality, high resolution wallpapers for free. Download Free Wallpapers for free at Wallpaperama.com'; } else { $error = "Please Login"; echo form($error); } } else { $error = "Welcome, Please Login"; echo form($error); } } } ?><div align="center"> 
<p>&nbsp;</p> 

</div> 
<br /><br /><br /><br /><br /><br />
<div id="fblike">

<img class="like_me" src="navigation-up-button_blue.png" width="56px" style="margin-left: -10px; margin-bottom: -12px;" /><br />
<div class="pop_out">
<!-- Place this tag where you want the +1 button to render -->
<g:plusone size="tall" callback="http://varunpatil.xtreemhost.com/"></g:plusone>

<!-- Place this tag after the last plusone tag -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script><br /><br />
<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="http://varunpatil.xtreemhost.com" send="false" layout="box_count" width="50" show_faces="false" font="trebuchet ms"></fb:like>
</div>
</div>

<table id="footer">
<tr>
	<td><br /><br /><br /><br /><hr style="margin-left:140px; margin-right:140px;" />
	</td>
<tr/>
<tr>
	<td class="footer_content">website designed by:&nbsp;&nbsp; Varun B Patil</td>
</tr>
<tr>
	<td class="footer_content">powered by:&nbsp;&nbsp; HTML5&nbsp;	CSS3&nbsp;	
	Javascript&nbsp;	PHP&nbsp;	jQuery<br /><br /><br /><br /><br /></td>
</tr>
<tr>
	<td class="footer_content">
	<?php
	date_default_timezone_set('Asia/Calcutta');
	echo(date("l dS \of F Y h:i:s A") . "<br />"); 
	?>
	</td>
</tr>
</table>

</body> 

</html>
