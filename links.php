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
<title>Fav | Varun B Patil</title>
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
	<td class="main_menu_special"><a class="main_menu" href="links.php">Fav Sites</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="blog_new.php">My Blog</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="contact.html">Contact</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="comments.php">Comments</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="login.php">Admin</a></td>
</tr>
</table>
</div>
<br /><br /><br /><br /><br /><br />




<table width="1100" style="margin-left: 80px;">
<tr>
	<td valign="top" width="100" style="font-family: trebuchet ms; font-style: bold; font-size: 25px;">Automobiles</td>
	
	<td width="800" style="padding-left: 100px;">
	
<a class="links" href="http://wikicars.org/en/Main_Page" target="_blank">Wikicars</a>
<a href="increment1.php?num=1"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=1";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Not much of a description needed I guess. As the name suggests, this is wikipedia for cars. You can find a description of pretty much any car manufacturer on the planet and every car they ever made along with tons of high quality pictures. Perfect way then, for a car enthusiast like myself to kill precious time... ha ha.</p>

<br /><br /><br /><br />

<a class="links" href="http://www.inautonews.com/" target="_blank">Inautonews</a>
<a href="increment1.php?num=2"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=2";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">This site provides most up-to-date information of everything in the car world, including the latest F1 and leMans news. Also check out their massive galleries and some funny videos...</p>

<br /><br /><br /><br />

<a class="links" href="http://www.bbc.co.uk/topgear/" target="_blank">Top Gear U.K</a>
<a href="increment1.php?num=3"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=3";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">The most watched television program in the U.K. Get the latest news of their T.V show and find reviews of the latest cars. Jeremy Clarkson, Richard Hammond and James May rock!!!</p>

<br /><br /><br /><br />

<a class="links" href="http://jalopnik.com/" target="_blank">Jalopnik</a>
<a href="increment1.php?num=4"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=4";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Another great timekiller with lots of interesting news about cars...</p>

<br /><br /><br /><br />

<a class="links" href="http://www.cartype.com/" target="_blank">CarType</a>
<a href="increment1.php?num=5"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=5";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">A website with latest updated car news and a massive high quality gallery which can be searched by make and model...</p>
	
<br /><br /><br /><br />

	</td>
</tr>
</table>





<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />






<table width="1100" style="margin-left: 80px;">
<tr>
	<td valign="top" width="100" style="font-family: trebuchet ms; font-style: bold; font-size: 25px;">Ubuntu</td>
	
	<td width="800" style="padding-left: 140px;">
	
<a class="links" href="http://www.webupd8.org/" target="_blank">Webupd8</a>
<a href="increment1.php?num=6"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=6";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Find cool free softwares, linux OS reviews, OS tweaks, scripts to make your life easier, latest software releases and software updates, PPA's, desktop garnishes... all tailored for the latest ubuntu releases and other linux OS.</p>

<br /><br /><br /><br />

<a class="links" href="http://www.omgubuntu.co.uk/" target="_blank">OMG! Ubuntu!</a>
<a href="increment1.php?num=7"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=7";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">One of the best websites out there with tons of linux news... with software downloads, desktop tweaks and more...</p>

<br /><br /><br /><br />

<a class="links" href="http://www.omgubuntu.co.uk/" target="_blank">Ubuntu Guide</a>
<a href="increment1.php?num=8"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=8";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Not the most visually pleasing websites out there... but looks can be decieving... This website offers the latest software reviews for linux with clear instructions regarding software installation and updates and solutions to common problems faced by Linux beginners...</p>

<br /><br /><br /><br />

<a class="links" href="http://unixmen.com/" target="_blank">Unixmen</a>
<a href="increment1.php?num=9"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=9";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Another website will all the latest Linux news</p>

<br /><br /><br /><br />

<a class="links" href="http://www.getdeb.net/welcome/" target="_blank">GetDeb</a>
<a href="increment1.php?num=10"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=10";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Installing new software has always been an issue for linux newbies, especially if they come in archieves. But, off late, linux softwares have started to come in single click .deb packages. And of course, there are official PPA's that help automatically update software everytime you update using your built-in linux update manager. This website provides software installation in a single click. You however have to enable apturl protocol in your web browser(enabled by default in google chrome).</p>

<br /><br /><br /><br />

	
	</td>
</tr>
</table>




<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />










<table width="1100" style="margin-left: 80px;">
<tr>
	<td valign="top" width="100" style="font-family: trebuchet ms; font-style: bold; font-size: 25px;">Free streaming music</td>
	
	<td width="800" style="padding-left: 140px;">
	
<a class="links" href="http://grooveshark.com/#/" target="_blank">Grooveshark</a>
<a href="increment1.php?num=11"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=11";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">The best free full-length high quality music streaming website. Of course, there are other sites like last.fm, Pandora, Rhapsody, Spotify, but it'll be a while before all their services are made available in India. I think Grooveshark is no less than any of them...</p>

<br /><br /><br /><br />

<a class="links" href="http://beta.mflow.com/" target="_blank">M Flow</a>
<a href="increment1.php?num=12"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=12";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Another free high quality music streaming website to tickle your musical senses with a polished interface. It still being in the beta stages does not have that vast a database as Grooveshark but its interface will surely convince you...</p>

<br /><br /><br /><br />

	
	</td>
</tr>
</table>




<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />







<table width="1100" style="margin-left: 80px;">
<tr>
	<td valign="top" width="100" style="font-family: trebuchet ms; font-style: bold; font-size: 25px;">General Science and Technology</td>
	
	<td width="800" style="padding-left: 140px;">
	
<a class="links" href="http://www.popsci.com/" target="_blank">PopSci</a>
<a href="increment1.php?num=13"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=13";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">"popular" science is what it preaches... interesting science and latest tech in all walks of life...</p>

<br /><br /><br /><br />

<a class="links" href="http://www.wired.com/" target="_blank">Wired News</a>
<a href="increment1.php?num=14"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=14";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Latest news from all things science....from computers to military tech, this beautiful website has it all to quench your tech thirst...</p>

<br /><br /><br /><br />

<a class="links" href="http://www.makeuseof.com/" target="_blank">Make Use Of</a>
<a href="increment1.php?num=15"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=15";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">This site deals mostly with useful software and free software for various platforms windows, linux, Mac. Among other things are some really professionally edited "Make Use Of guides" that make for a good reading.</p>

<br /><br /><br /><br />

<a class="links" href="http://lifehacker.com/" target="_blank">LifeHacker</a>
<a href="increment1.php?num=16"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter1 WHERE num=16";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Another website to get all the latest tech news...</p>

<br /><br /><br /><br />

	
	</td>
</tr>
</table>




<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />






















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
