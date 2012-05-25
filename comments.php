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
<title>Comments | Varun B Patil</title>
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
	<td class="main_menu_special"><a class="main_menu" href="comments.php">Comments</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="login.php">Admin</a></td>
</tr>
</table>
</div>
<br /><br /><br /><br /><br /><br />



<table width="1000">
<tr>
<td valign="top">
<form method="post" action="com.php">
<table id="content"  width="500" style="padding-left: 80px;">
<tr>
	<td>
	<h2>Post your comments</h2> 
	<hr /><br /><br /><br />
	</td>
</tr>
<tr>
	<td>
	Name:
	</td>
</tr>
<tr>
	<td>
	<textarea rows="2" cols="40" name="name"></textarea><br /><br /><br />
	</td>
</tr>
<tr>
	<td>
	Comments:
	</td>
</tr>
<tr>
	<td>
	<textarea rows="10" cols="40" name="comments"></textarea><br /><br />
	</td>
</tr>
<tr>
	<td>
	<input type="submit" value="Post Comment" />
	</td>
</tr>
<tr>
	<td>
	<font size="1">*Your comments will be visible after verification by the moderator</font>
	</td>
</tr>
</table>
</form>
</td>

<td valign="top" style="padding-left: 70px; WORD-BREAK: BREAK-ALL;">
<h2 style="padding-top: 3px;">Recent Commments</h2><hr /><br /><br /><br />
<?php
	$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	
	$query = "SELECT * FROM comments";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	while ($row = mysqli_fetch_row($result)) {
	$b = $row[1];
	$c = $row[2];
	$d = $row[3];
		if ($d == 1){
		print "<p style=\"font-family: sans-serif;\">$c</p>";
		print "<p style=\"font-family: sans-serif; font-style: italic; color: blue; font-size: 0.75em; float: right;\">-- $b</p><br /><br /><br /><br /><br /><br />";
		}
	}
	 
	mysqli_close($link);
?>
</td>

</tr>
</table>












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
	Javascript&nbsp;	PHP&nbsp;	jQuery<br /><br /><br /></td>
</tr>
</table>




</body>
</html>
