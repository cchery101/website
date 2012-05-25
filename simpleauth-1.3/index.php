<?php
/**********************************************************************
Filename:	index.php
Author:		Jez Hancock
Support:	http://forums.munk.me.uk/
Version:	$Id: index.php 13 2007-04-09 09:38:09Z Jez $

Description:
Display a message about the scripts
**********************************************************************/
include_once("config.php");

// page title:
$title="PHP Simple Authentication Using MySQL and PHP sessions";
?>
<html>
<head>
<title><?php print $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php doCSS(); ?>
</head>
<body>
<h1><?php print $title; ?></h1>
<p>This is a very simple site to demonstrate a functional multi-user website using PHP sessions and MySQL for authentication.</p>
<br>


<h2>Files used in the PHP SimpleAuth package</h1>
<p>The site consists of the following front-end scripts:</p>
<ul>
<li><a href="join.php">join.php</a> - a script to allow users to create a new user account</li>
<li><a href="login.php">login.php</a> - a script to allow users to login to the site</li>
<li><a href="members.php">members.php</a> - a script which loads when a user successfully logs in</li>
</ul>

<p>The following backend scripts are used:</p>
<ul>
<li>config.php - contains configuration info such as mysql login/pass/host/db details and other items used through the site</li>
<li>functions.php - contains all functions used in the simpleauth package</li>
<li>users.sql - contains the MySQL to build the &quot;users&quot; table</li>
</ul>
<br>
<h2>Support</h2>
There is now a forum for support related questions for <a href="http://simpleauth.munk.me.uk/">SimpleAuth</a> located here:<br>
<a href="http://forums.munk.me.uk/forumdisplay.php?fid=1">SimpleAuth Forum</a><br><br>

Have fun!<br>
Jez
</body>
</html>
