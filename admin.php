<html>
<head>
<?php
$e=$_GET['e'];
if($e!=1)
{
echo "<meta http-equiv=\"refresh\" content=\"0;http://varunpatil.xtreemhost.com/login.php\" />";
}
?>
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
<title>Admin | Varun B Patil</title>
<style type="text/css">@import url(index.css);</style>
</head>
<body>
<!--header-->
<div id="header">
<a href="index.php"><img class="header_content_img" src="logo-490900.png" width="110px" height="100px"/></a>
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
	<td class="main_menu_special"><a class="main_menu" href="admin.php?e=1">Admin</a></td>
</tr>
</table>
</div>
<br /><br /><br />


<form method="post" action="post_gen.php">
<br /><br /><br /><br /><br />
<center>
<p class="admin">Date:<br /></p>
<textarea rows="1" cols="70" name="date"></textarea><br /><br /><br /><br /><br />
<p class="admin">Heading:<br /></p>
<textarea rows="2" cols="70" name="heading"></textarea><br /><br /><br /><br /><br />
<p class="admin">Link:<br /></p>
<textarea rows="2" cols="70" name="link"></textarea><br /><br /><br /><br /><br />
<p class="admin">Content:<br /></p>
<textarea rows="20" cols="70" name="content"></textarea><br /><br /><br />

<input type="submit" value="submit"></input>
</center>
</form>

<br /><br /><br /><br /><br /><br />
<div id="fblike">

<img class="like_me" src="navigation-up-button_blue.png" width="56px" style="margin-left: -10px; margin-bottom: -12px;"/><br />
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
