<?php
/**********************************************************************
Filename:	members.php
Author:		Jez Hancock
Support:	http://forums.munk.me.uk/
Version:	$Id: members.php 17 2007-04-09 09:40:35Z Jez $

Description:
This file displays the members screen once they've logged in.
**********************************************************************/
/*
Members script:
This is a very simple script that generates a web page when the user
has logged in successfully.

In this code the user's details are simply displayed for the user - these
details are taken from the session variables $login and $password.

In your own code you would probably want to extend this page to include
options to allow the user to modify their personal details.
*/
include_once("config.php");

// Check user logged in already:
checkLoggedIn("yes");
doCSS();
print("Welcome to the members page <b>".$_SESSION["login"]."</b><br>\n");
print("Your password is: <b>".$_SESSION["password"]."</b><br>\n");
print("<a href=\"logout.php"."\">Logout</a>");
?>
