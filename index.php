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
<title>Home | Varun B Patil</title>
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
	<td class="main_menu_special"><a class="main_menu" href="index.php">Home</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="portfolio.html">Portfolio</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="learn.html">Learn</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="links.php">Fav Sites</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="blog_new.php">My Blog</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="contact.html">Contact</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="comments.php">Comments</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="login.php">Admin</a></td>
</tr>
</table>
</div>

<br /><br /><br /><br /><br /><br />

<table width="1100" style="margin-left: 100px;">
<tr>
<td>
<table cellspacing="30"><tr>
<td id="friends" width="230" valign="top">
<strong>MY FRIENDS</strong><br /><hr style="margin-right: 14px;"/>
<a class="friends" href="http://www.veeresht.info" target="_blank">Veeresh Taranalli's<br />web page</a><br /><br />
<a class="friends" href="http://facebookofmymind.blogspot.com/" target="_blank">Abhishta's Blog</a><br /><br />
<a class="friends" href="http://pcpavan-yogaspot.webs.com" target="_blank">Pavan PC's<br />Yoga tutorials</a><br /><br />
</td></tr>
<tr>
<td id="friends" valign="top">
<strong>SYNDICATE</strong><br /><hr style="margin-right: 14px;" /><br /><br />
<img src="feed-icon-28x28.png" /> &nbsp;&nbsp;RSS<br /><br /><br /><br />
</td>
</tr></table></td>


<td width="800">
<table id="content">
<tr>
	<td>
	<h2>Welcome to Varun B Patil's home</h3> 
	<hr />
	</td>
</tr>
<tr>
	<td>
	<br /><br />
	<p style="font-family: comic sans ms; font-size: 1.1em; line-height: 2;">Hello and welcome to my second attempt at creating a personalized web page. The first attempt was 		definitely not this neat, but I wouldn't say it was unsuccesful. It taught me a lot of things that infact, 		made this attempt that much more better than the first. You can see my original web page <a href="http://varunbpatil.atwebpages.com/home.html" target="_blank">here</a>. And thanks a lot for the feedbacks and suggestions on my original web page, and ofcourse, comments and suggestions are open on this one as well.
	<br /><br /><br />
	Thanks for visiting...
	</td>
</tr>
</table>
</td>
</tr>
</table>
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
