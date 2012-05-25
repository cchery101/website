<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#click_here").click(function(){
  $("#hide_this").slideToggle(1500);
  });
});
</script>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Blog | Varun B Patil</title>
<style type="text/css">@import url(index.css);</style>
</head>
<body>

<!--header-->
<div id="header">
<a href="index.php"><img class="header_content" src="logo.png" style="float: left;" width="50px" /></a>
<h1 class="header_content"><a class="header_content" href="index.php">Varun B Patil</a></h1>
<i class="header_content">Tough times don't last, but tough people do.</i>
</div>

<br /><br /><br />

<!--main menu-->
<table id="main_menu" cellspacing="10";>
<tr>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="index.php">Home</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="resume.html" target="_blank">Resume</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="learn.html">Learn</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="links.php">Fav Sites</a></td>
	<td class="main_menu_special"><a class="main_menu" href="blog_new.php">My Blog</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="about.html">About Me</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="contact.html">Contact</a></td>
	<td class="main_menu" onmouseover="this.className='mover';" onmouseout="this.className='mout';"><a class="main_menu" href="comments.php">Comments</a></td>
</tr>
</table>
<br /><br /><br /><br /><br /><br />





<table width="1100" style="margin-left: 80px;">
<tr>
	<td valign="top" width="100" style="font-family: trebuchet ms; font-style: bold; font-size: 25px;">Today's Posts</td>
	
	<td width="800" style="padding-left: 140px;">

	
	
<a class="links" href="http://www.youtube.com/watch?v=jeFNunnYiKY" target="_blank" style="text-align: justify;">Parallel parking world record</a>
<a href="increment.php?num=8"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter WHERE num=8";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Watch this superb video where a german national breaks the world record for the tightest parallel parking in a space merely 10 inches longer than his volkwagen golf. Unfortunately, this driving genuis had his joy shortlived as his record was broken mere hours later by a person in china who parallel parked his car in a space 2 centimeters shorter than the german could achieve. Although this technique is hard to perfect, there are certain drawbacks though. For example, you cannot remove your car from the parking space until the others have moved their cars. And moreover, as is clear in the video, sand was spread over the pavement near the parking space to allow the car to drift smoothly...which you wont normally find when you are parking.</p>

<br />

<button id="click_here"><pre style="font-size:1.2em; font-family: comic sans ms;">Show/Hide Comments</pre></button><br /><br />
<div id="hide_this" style="display:none;">
<table>
<tr>
	<td>
		<form method="post" action="blog_comments.php?post=8">
		<fieldset class="post_comments">
			<legend><strong>Comments</strong></legend>
			<p>Name:</p>
			<textarea rows="1" cols="75" name="name"></textarea><br /><br /><br />
			<p>Comments:</p>
			<textarea rows="6" cols="75" name="comments"></textarea><br /><br />
			<input type="submit" value="post comment"></input><br />
    	</fieldset>
		</form>
	</td>
</tr>

<tr>
	<td>
		<br /><br />
		<fieldset class="recent_comments">
			<legend><strong>Most Recent Comments</strong></legend><br />
<?php
	$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	
	$query = "SELECT * FROM blog_comments WHERE post=8";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	while ($row = mysqli_fetch_row($result)) {
	$b = $row[2];
	$c = $row[3];
	print "<p style=\"font-family: sans-serif;\">$c</p>";
	print "<p style=\"font-family: sans-serif; font-style: italic; color: blue; font-size: 0.75em; float: right;\">-- $b</p><br /><br /><br /><br />";
	}
	 
	mysqli_close($link);
?>
    	</fieldset>	
	</td>
</tr>
</table>
</div>



<br /><br /><br /><br /><br /><br />

	
	
	
	
<a class="links" href="http://www.pcmag.com/article2/0,2817,2390583,00.asp" target="_blank" style="text-align: justify;">Web2.0 turns 20</a>
<a href="increment.php?num=7"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter WHERE num=7";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Its been 20 years now since Tim Berners Lee, invented what was to become a part of our daily life much like food and water, at the CERN(European Organisation for Nuclear Research) laboratories. Close on its heels is the birthday of the computer virus, although the computer virus is older than the World Wide Web. My next post details this fact. The interseting thing is that this the 20th birthday of the WWW and not the internet. It was this time 20 years ago that the internet was made available to the public like we use it today. Beforer that, the internet was mainly used to connect institutions and government agencies and was not available to the public.</p>

<br /><br />
<table>
<tr>
	<td>
		<form method="post" action="blog_comments.php?post=7">
		<fieldset class="post_comments">
			<legend><strong>Comments</strong></legend>
			<p>Name:</p>
			<textarea rows="1" cols="75" name="name"></textarea><br /><br /><br />
			<p>Comments:</p>
			<textarea rows="6" cols="75" name="comments"></textarea><br /><br />
			<input type="submit" value="post comment"></input><br />
    	</fieldset>
		</form>
	</td>
</tr>

<tr>
	<td>
		<br /><br />
		<fieldset class="recent_comments">
			<legend><strong>Most Recent Comments</strong></legend><br />
<?php
	$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	
	$query = "SELECT * FROM blog_comments WHERE post=7";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	while ($row = mysqli_fetch_row($result)) {
	$b = $row[2];
	$c = $row[3];
	print "<p style=\"font-family: sans-serif;\">$c</p>";
	print "<p style=\"font-family: sans-serif; font-style: italic; color: blue; font-size: 0.75em; float: right;\">-- $b</p><br /><br /><br /><br />";
	}
	 
	mysqli_close($link);
?>
    	</fieldset>	
	</td>
</tr>
</table>



<br /><br /><br /><br />

	
	
	

<a class="links" href="http://download.cnet.com/8301-2007_4-20088801-12/viruses-destroying-your-systems-for-25-years/" target="_blank" style="text-align: justify;">Happy Birthday to computer viruses</a>
<a href="increment.php?num=6"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter WHERE num=6";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Its been 25 years since computer viruses made our lives miserable, all thanks to two brothers in Pakistan !!!. It is usually the Russians and the Chinese who are famous for writing computer viruses. Who would have thought that the big daddy of them all is Pakistan. Pakistan is ahead in a lot of other "not so good" things as well, which are left to your imagination(just to see if you are awake...). All these years of development have led to the greatest computer virus of them all...StuxNet. The virus that infected almost half of the computers that control Iran's nuclear development program so much so that, the Israeli's have claimed that Iran's first atomic weapon may have been delayed by about 10 years, thanks to StuxNet. Not all viruses are bad after all!!!. More on StuxNet in my next posts.</p>

<br /><br />
<table>
<tr>
	<td>
		<form method="post" action="blog_comments.php?post=6">
		<fieldset class="post_comments">
			<legend><strong>Comments</strong></legend>
			<p>Name:</p>
			<textarea rows="1" cols="75" name="name"></textarea><br /><br /><br />
			<p>Comments:</p>
			<textarea rows="6" cols="75" name="comments"></textarea><br /><br />
			<input type="submit" value="post comment"></input><br />
    	</fieldset>
		</form>
	</td>
</tr>

<tr>
	<td>
		<br /><br />
		<fieldset class="recent_comments">
			<legend><strong>Most Recent Comments</strong></legend><br />
<?php
	$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	
	$query = "SELECT * FROM blog_comments WHERE post=6";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	while ($row = mysqli_fetch_row($result)) {
	$b = $row[2];
	$c = $row[3];
	print "<p style=\"font-family: sans-serif;\">$c</p>";
	print "<p style=\"font-family: sans-serif; font-style: italic; color: blue; font-size: 0.75em; float: right;\">-- $b</p><br /><br /><br /><br />";
	}
	 
	mysqli_close($link);
?>
    	</fieldset>	
	</td>
</tr>
</table>



<br /><br /><br /><br />
	
	
	
	
	
<!--*************************************************************************************************-->	
	
<a class="links" href="http://www.unixmen.com/news-today/1842-mozilla-now-ready-for-os" target="_blank" style="text-align: justify;">Mozilla's Firefox Operating system on its way ?</a>
<a href="increment.php?num=5"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter WHERE num=5";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">If everything goes well, firefox might have its own OS akin to Google's Chrome OS which was born out of the Google Chrome browser. The browser rivalries of the two companies doesn't get any hotter. The rumor of Firefox OS is just going to add fuel to the fire. Mozilla is even planning on bringing out an Android competitor to the market. How sweet...</p>

<br /><br />
<table>
<tr>
	<td>
		<form method="post" action="blog_comments.php?post=5">
		<fieldset class="post_comments">
			<legend><strong>Comments</strong></legend>
			<p>Name:</p>
			<textarea rows="1" cols="75" name="name"></textarea><br /><br /><br />
			<p>Comments:</p>
			<textarea rows="6" cols="75" name="comments"></textarea><br /><br />
			<input type="submit" value="post comment"></input><br />
    	</fieldset>
		</form>
	</td>
</tr>

<tr>
	<td>
		<br /><br />
		<fieldset class="recent_comments">
			<legend><strong>Most Recent Comments</strong></legend><br />
<?php
	$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	
	$query = "SELECT * FROM blog_comments WHERE post=5";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	while ($row = mysqli_fetch_row($result)) {
	$b = $row[2];
	$c = $row[3];
	print "<p style=\"font-family: sans-serif;\">$c</p>";
	print "<p style=\"font-family: sans-serif; font-style: italic; color: blue; font-size: 0.75em; float: right;\">-- $b</p><br /><br /><br /><br />";
	}
	 
	mysqli_close($link);
?>
    	</fieldset>	
	</td>
</tr>
</table>


<br /><br /><br /><br />

	</td>
</tr>
</table>






<table width="1100" style="margin-left: 80px;">
<tr>
	<td valign="top" width="100" style="font-family: trebuchet ms; font-style: bold; font-size: 25px;">Yesterday's Posts</td>
	
	<td width="800" style="padding-left: 140px;">


<a class="links" href="http://www.dailycommonsense.com/how-does-google-make-money/" target="_blank" style="text-align: justify;">How does Google make money ?</a>
<a href="increment.php?num=1"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter WHERE num=1";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Everything that you use and see that Google offers is free!!. From the best Email service to the largest video database in the universe to the best search engine on the planet, every single thing is free. Its hard to imagine a world without Google's services. Then how, you may wonder, does Google make the money to keep it so profitable? The answer is plain and simple: Advertisements. You've probably seen Google's text ad's at the top and side of every search page. These are part of the Google AdWords program. You simply ask Google to put up your ad's on their search pages for free!!. The only catch is that you pay Google on a per-click basis to your website. That is, you only pay Google if someone clicks on your webpage after seeing your ad. The latest emerging trend of cloud computing and the much hyped Chrome OS is only going to make Google richer, bocause with Chrome OS, you are constantly on the internet(on the cloud) and that can only increase advertising revenue.</p>

<br /><br />
<table>
<tr>
	<td>
		<form method="post" action="blog_comments.php?post=1">
		<fieldset class="post_comments">
			<legend><strong>Comments</strong></legend>
			<p>Name:</p>
			<textarea rows="1" cols="75" name="name"></textarea><br /><br /><br />
			<p>Comments:</p>
			<textarea rows="6" cols="75" name="comments"></textarea><br /><br />
			<input type="submit" value="post comment"></input><br />
    	</fieldset>
		</form>
	</td>
</tr>

<tr>
	<td>
		<br /><br />
		<fieldset class="recent_comments">
			<legend><strong>Most Recent Comments</strong></legend><br />
<?php
	$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	
	$query = "SELECT * FROM blog_comments WHERE post=1";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	while ($row = mysqli_fetch_row($result)) {
	$b = $row[2];
	$c = $row[3];
	print "<p style=\"font-family: sans-serif;\">$c</p>";
	print "<p style=\"font-family: sans-serif; font-style: italic; color: blue; font-size: 0.75em; float: right;\">-- $b</p><br /><br /><br /><br />";
	}
	 
	mysqli_close($link);
?>
    	</fieldset>	
	</td>
</tr>
</table>



<br /><br /><br /><br />

<a class="links" href="http://news.cnet.com/8301-10784_3-9971006-7.html" target="_blank" style="text-align: justify;">World's fastest supercomputer</a>
<a href="increment.php?num=2"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter WHERE num=2";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">IBM's RoadRunner supercomputer has become the first ever supercomputer to break the petaflops(1000 trillion instructions per second) barrier which brings up IBM's tally to 210 out of 500 of the most powerful supercomputer in the world and 5 in the top 10. Amazing, considering the fact that RoadRunner is also the most energy efficient supercomputer out there today. What is more interesting is that, the RoadRunner is simply Play Station 3 chips and AMD processors on steroids. HP is the closest competitor in the supercomputers business.</p>
<br /><br />
<table>
<tr>
	<td>
		<form method="post" action="blog_comments.php?post=2">
		<fieldset class="post_comments">
			<legend><strong>Comments</strong></legend>
			<p>Name:</p>
			<textarea rows="1" cols="75" name="name"></textarea><br /><br /><br />
			<p>Comments:</p>
			<textarea rows="6" cols="75" name="comments"></textarea><br /><br />
			<input type="submit" value="post comment"></input><br />
    	</fieldset>
		</form>
	</td>
</tr>

<tr>
	<td>
		<br /><br />
		<fieldset class="recent_comments">
			<legend><strong>Most Recent Comments</strong></legend><br />
<?php
	$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	
	$query = "SELECT * FROM blog_comments WHERE post=2";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	while ($row = mysqli_fetch_row($result)) {
	$b = $row[2];
	$c = $row[3];
	print "<p style=\"font-family: sans-serif;\">$c</p>";
	print "<p style=\"font-family: sans-serif; font-style: italic; color: blue; font-size: 0.75em; float: right;\">-- $b</p><br /><br /><br /><br />";
	}
	 
	mysqli_close($link);
?>
    	</fieldset>	
	</td>
</tr>
</table>

<br /><br /><br /><br />

<a class="links" href="http://all-that-is-interesting.com/post/8170440014/the-most-humane-prison-in-the-world" target="_blank" style="text-align: justify;">Prison cell or hotel suite ?</a>
<a href="increment.php?num=3"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter WHERE num=3";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">It is well known that "An idle mind is a devil's workshop". This saying has been put to the test at this prison in Norway where prison cells resmeble hotel suites complete with flatscreen television, refrigirators, bathrooms and the janitors never carry a gun!!. Their reasoning is that, if the prisoners are engaged in such activities as playing soccer, their mind will stay away from drugs and violence. Quite a novel idea, but it is too early to tell whether or not their plan will backfire.</p>
<br /><br />
<table>
<tr>
	<td>
		<form method="post" action="blog_comments.php?post=3">
		<fieldset class="post_comments">
			<legend><strong>Comments</strong></legend>
			<p>Name:</p>
			<textarea rows="1" cols="75" name="name"></textarea><br /><br /><br />
			<p>Comments:</p>
			<textarea rows="6" cols="75" name="comments"></textarea><br /><br />
			<input type="submit" value="post comment"></input><br />
    	</fieldset>
		</form>
	</td>
</tr>

<tr>
	<td>
		<br /><br />
		<fieldset class="recent_comments">
			<legend><strong>Most Recent Comments</strong></legend><br />
<?php
	$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	
	$query = "SELECT * FROM blog_comments WHERE post=3";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	while ($row = mysqli_fetch_row($result)) {
	$b = $row[2];
	$c = $row[3];
	print "<p style=\"font-family: sans-serif;\">$c</p>";
	print "<p style=\"font-family: sans-serif; font-style: italic; color: blue; font-size: 0.75em; float: right;\">-- $b</p><br /><br /><br /><br />";
	}
	 
	mysqli_close($link);
?>
    	</fieldset>	
	</td>
</tr>
</table>

<br /><br /><br /><br />

<a class="links" href="http://www.mithral.com/~beberg/manifesto.html" target="_blank" style="text-align: justify;">The mind of a hacker</a>
<a href="increment.php?num=4"><img src="thumbs-up.png" width="5%" style="float: right;"/></a><p style="float: right; color: green; font-weight: bold;">
<?php 
$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2"); 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM counter WHERE num=4";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
printf ("%s", $row[1]);
}
mysqli_close($link);
?>&nbsp;&nbsp;
</p>
<p class="links" style="text-align: justify; font-size: 1.1em;">Read this funny article regarding the life of a computer hacker who is completely distanced from the society and the government aike and yet thinks what he does is better than what you and I do and what useless corrupt governments do. And he is so right...</p>
<br /><br />
<table>
<tr>
	<td>
		<form method="post" action="blog_comments.php?post=4">
		<fieldset class="post_comments">
			<legend><strong>Comments</strong></legend>
			<p>Name:</p>
			<textarea rows="1" cols="75" name="name"></textarea><br /><br /><br />
			<p>Comments:</p>
			<textarea rows="6" cols="75" name="comments"></textarea><br /><br />
			<input type="submit" value="post comment"></input><br />
    	</fieldset>
		</form>
	</td>
</tr>

<tr>
	<td>
		<br /><br />
		<fieldset class="recent_comments">
			<legend><strong>Most Recent Comments</strong></legend><br />
<?php
	$link = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
	
	$query = "SELECT * FROM blog_comments WHERE post=4";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	while ($row = mysqli_fetch_row($result)) {
	$b = $row[2];
	$c = $row[3];
	print "<p style=\"font-family: sans-serif;\">$c</p>";
	print "<p style=\"font-family: sans-serif; font-style: italic; color: blue; font-size: 0.75em; float: right;\">-- $b</p><br /><br /><br /><br />";
	}
	 
	mysqli_close($link);
?>
    	</fieldset>	
	</td>
</tr>
</table>

<br /><br /><br /><br />

	
	</td>
</tr>
</table>




<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />











<br /><br /><br /><br /><br /><br />


<div id="fblike">

<img src="navigation-up-button_blue.png" width="56px" /><br /><br />
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
	Javascript&nbsp;	PHP<br /><br /><br /></td>
</tr>
</table>




</body>
</html>
