<?php
/**********************************************************************
Filename:	logout.php
Author:		Jez Hancock
Support:	http://forums.munk.me.uk/
Version:	$Id: logout.php 16 2007-04-09 09:40:32Z Jez $

Description:
This file logs a user out.
**********************************************************************/

/*
Logout script:
This is a very simple script that does the following:
Checks the user is already logged in.
Destroys/unsets all session data.
Redirects the user to their login page.
*/
include_once("config.php");

// Check user logged in already:
checkLoggedIn("yes");

// Log user out:
flushMemberSession();

// Redirect:
header("Location: login.php");
?>
