<?php

echo "<html>";
echo "<head>";
echo "<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
<script type=\"text/javascript\">
$(document).ready(function(){
  $(\".click_here\").click(function(){
  $(\".hide_this\").slideToggle(1500);
  });
});
</script>";

echo "<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
<script type=\"text/javascript\">
$(document).ready(function(){
  $(\".like_me\").click(function(){
  
  $(\".pop_out\").slideToggle(1000);
  /*$(this).css({\"-webkit-transform\":\"rotate(180deg)\"});*/
  
  });
});
</script>";

echo "<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\">";
echo "<title>Blog | Varun B Patil</title>";
echo "<style type=\"text/css\">@import url(index.css);</style>";
echo "</head>";
echo "<body>";

echo "<!--header-->";
echo "<div id=\"header\">";
echo "<a href=\"index.php\"><img class=\"header_content_img\" src=\"logo-490900.png\" width=\"110px\" height=\"100px\" /></a>";
echo "<h1 class=\"header_content\"><a class=\"header_content\" href=\"index.php\">Varun B Patil</a></h1>";
echo "<i class=\"header_content\">Tough times don't last, but tough people do.</i>";


echo "<br /><br /><br /><br /><br /><br /><br />";

echo "<!--main menu-->";
echo "<table id=\"main_menu\">";
echo "<tr>";
echo "	<td class=\"main_menu\" onmouseover=\"this.className='mover';\" onmouseout=\"this.className='mout';\"><a class=\"main_menu\" href=\"index.php\">Home</a></td>";
echo "	<td class=\"main_menu\" onmouseover=\"this.className='mover';\" onmouseout=\"this.className='mout';\"><a class=\"main_menu\" href=\"portfolio.html\">Portfolio</a></td>";
echo "	<td class=\"main_menu\" onmouseover=\"this.className='mover';\" onmouseout=\"this.className='mout';\"><a class=\"main_menu\" href=\"learn.html\">Learn</a></td>";
echo "	<td class=\"main_menu\" onmouseover=\"this.className='mover';\" onmouseout=\"this.className='mout';\"><a class=\"main_menu\" href=\"links.php\">Fav Sites</a></td>";
echo "	<td class=\"main_menu_special\"><a class=\"main_menu\" href=\"blog.php\">My Blog</a></td>";
echo "	<td class=\"main_menu\" onmouseover=\"this.className='mover';\" onmouseout=\"this.className='mout';\"><a class=\"main_menu\" href=\"contact.html\">Contact</a></td>";
echo "	<td class=\"main_menu\" onmouseover=\"this.className='mover';\" onmouseout=\"this.className='mout';\"><a class=\"main_menu\" href=\"comments.php\">Comments</a></td>";
echo "  <td class=\"main_menu\" onmouseover=\"this.className='mover';\" onmouseout=\"this.className='mout';\"><a class=\"main_menu\" href=\"login.php\">Admin</a></td>";
echo "</tr>";
echo "</table>";
echo "</div>";
echo "<br /><br /><br /><br /><br /><br />";



echo "<table width=\"1100\" style=\"margin-left: 80px;\">";
echo "<tr>";
echo "	<td valign=\"top\" width=\"100\" style=\"font-family: trebuchet ms; font-style: bold; font-size: 25px;\">Recent Posts</td>";
	
echo "	<td width=\"800\" style=\"padding-left: 140px;\">";

	





$dblink = mysqli_connect("sql208.xtreemhost.com", "xth_8523266", "italia", "xth_8523266_website2");
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
   
$query = "SELECT * FROM blog ORDER BY num DESC";
$result = mysqli_query($dblink, $query) or die(mysqli_error($dblink));
while ($row = mysqli_fetch_row($result)) {
$a = $row[0];
$heading = $row[1];
$link = $row[2];
$content = $row[3];


echo "<a class=\"links\" href=\"";
echo "$link";
echo "\" target=\"_blank\" style=\"text-align: justify;\">";
echo "$heading";
echo "</a>";
echo "<a href=\"increment.php?num=";
echo "$a";
echo "\"><img src=\"thumbs-up.png\" width=\"5%\" style=\"float: right;\"/></a><p style=\"float: right; color: green; font-weight: bold;\">";

$query1 = "SELECT * FROM counter WHERE num=$a";
$result1 = mysqli_query($dblink, $query1);
while ($row1 = mysqli_fetch_row($result1)) {
printf ("%s", $row1[1]);
}
echo "&nbsp;&nbsp;";
echo "</p>";
echo "<p class=\"links\" style=\"text-align: justify; font-size: 1.1em;\">";
echo "$content";
echo "</p>";
echo "<br />";
echo "<button class=\"click_here\">Show/Hide Comments</button><br /><br />";
echo "<div class=\"hide_this\">";
echo "<table>";
echo "<tr>";
echo "<td>";
echo "<form method=\"post\" action=\"blog_comments.php?post=";
echo "$a";
echo "\">";
echo "<fieldset class=\"post_comments\">";
echo "<legend><strong>Comments</strong></legend>";
echo "<p>Name:</p>";
echo "<textarea rows=\"1\" cols=\"75\" name=\"name\"></textarea><br /><br /><br />";
echo "<p>Comments:</p>";
echo "<textarea rows=\"6\" cols=\"75\" name=\"comments\"></textarea><br /><br />";
echo "<input type=\"submit\" value=\"post comment\"></input><br />";
echo "</fieldset>";
echo "</form>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<br /><br />";
echo "<fieldset class=\"recent_comments\">";
echo "<legend><strong>Most Recent Comments</strong></legend><br />";


$query2 = "SELECT * FROM blog_comments WHERE post=$a ORDER BY num DESC";
$result2 = mysqli_query($dblink, $query2) or die(mysqli_error($dblink));
	
while ($row2 = mysqli_fetch_row($result2)) {
$b2 = $row2[2];
$c2 = $row2[3];
print "<p style=\"font-family: sans-serif; WORD-BREAK: BREAK-ALL; \">$c2</p>";
print "<p style=\"font-family: sans-serif; font-style: italic; color: blue; font-size: 0.75em; float: right;\">-- $b2</p><br /><br /><br /><br />";
}

echo "</fieldset>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";
echo "<br /><br /><br /><br /><br /><br />";
}

echo "</td>";
echo "</tr>";
echo "</table>";
echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
echo "<br /><br /><br /><br /><br /><br />";



echo "<div id=\"fblike\">

<img class=\"like_me\" src=\"navigation-up-button_blue.png\" width=\"56px\" style=\"margin-left: -10px; margin-bottom: -12px;\" /><br />
<div class=\"pop_out\">
<!-- Place this tag where you want the +1 button to render -->
<g:plusone size=\"tall\" callback=\"http://varunpatil.xtreemhost.com/\"></g:plusone>

<!-- Place this tag after the last plusone tag -->
<script type=\"text/javascript\">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script><br /><br />
<div id=\"fb-root\"></div><script src=\"http://connect.facebook.net/en_US/all.js#xfbml=1\"></script><fb:like href=\"http://varunpatil.xtreemhost.com\" send=\"false\" layout=\"box_count\" width=\"50\" show_faces=\"false\" font=\"trebuchet ms\"></fb:like>
</div>
</div>";


echo "<table id=\"footer\">";
echo "<tr>";
echo "<td><br /><br /><br /><br /><hr style=\"margin-left:140px; margin-right:140px;\" />";
echo "</td>";
echo "<tr/>";
echo "<tr>";
echo "<td class=\"footer_content\">website designed by:&nbsp;&nbsp; Varun B Patil</td>";
echo "</tr>";
echo "<tr>";
echo "<td class=\"footer_content\">powered by:&nbsp;&nbsp; HTML5&nbsp;	CSS3&nbsp;";
echo "Javascript&nbsp;	PHP&nbsp;	jQuery<br /><br /><br /></td>";
echo "</tr>";
echo "</table>";
echo "</body>";
echo "</html>";


mysqli_close($dblink);
	



?>
