<?php
/**********************************************************************
Filename:	config.php
Author:		Jez Hancock
Support:	http://forums.munk.me.uk/
Version:	$Id: config.php 21 2007-04-09 10:25:48Z root $

Description:
This file contains site wide config options - included in every script.
**********************************************************************/

/*
////////////////////////////////////////////////////////////////////////
// Notes on configuration files.
////////////////////////////////////////////////////////////////////////

A configuration file is useful in any project, no matter how large
or small.  There are various reasons for using a config file:

By including all the configuration information for a site inside a
config.php file, you can easily add a line 'include("config.php")'
to each page in the project/site that will need info contained in
the config.php file.  At a later date, if for some reason one of
the configuration details for the site changes (say your domain
name changes), you only have to make changes in the config.php file
and all the other pages that read the config file will automatically
be updated!

An include file is a good place to include other files that are
required by every page/script in your site.  For example it is good
practise to separate all your PHP functions from the code in your
pages by placing them all in a 'functions' file.  In this way it
is easy to include the functions file on every page automatically
simply by adding a line 'include("functions.php")' in the config.php
file.

An include file is a good place to create a connection to your
database.  By creating the connection in the config file, every
page that includes the config.php file using 'include("config.php"'
will automatically have an established connection to the database
- saving you from having to retype the connection code in every
single script that requires a db connection.

In general, the config file is a good place to include code that
needs to be executed by every script in your project (that includes
the config file).  For example you might want to execute your hit
counter code from the config file if you are including the config
file from every page of your scripts/site - that way you don't have
to retype the hitcounter code in every script that you're counting
hits for!
////////////////////////////////////////////////////////////////////////
*/

/*
  Using error_reporting(E_ALL)

  When developing PHP applications it is useful to 'turn up' the error
  reporting level in PHP so you catch all possible errors as soon as possible.

  The highest possible error_reporting level is 'E_ALL' - which includes not
  only fatal error messages but also 'warnings' that PHP gives.  These
  warnings do not stop the PHP processor, but could potentially be the source
  of problems and are often worth taking note of and fixing.
*/
error_reporting(E_ALL);

/*
  Include globally used functions

  We include the functions file here so that all functions in the
  functions.php file will be available to any script that includes
  this config.php file (see above).
*/

include_once("functions.php");

/*
  Register session variables

  We register our session variables here to save us retyping the
  session variable registration code in every script that requires
  the session variables (which is every script!)
*/
session_register("login");
session_register("password");
session_register("loggedIn");

/*
  Initialize global variables

  We declare a $messages array which we will use to hold error
  messages for display to users in case of errors.  Declaring this
  variable an array here saves us retyping it in every script that
  might use the $messages array (see above).
*/
$messages=array();

/*
  We initialize the following variables - $dbhost, $dbuser, $dbpass
  and $dbname - with the values correct for our mysql database.

  You should change these values to reflect your own database details:
*/
$dbhost="localhost";
$dbuser="CHANGE_ME";
$dbpass="CHANGE_ME";
$dbname="CHANGE_ME";

/*
  Create a connection to the DB

  As mentioned above, we connect to the db here to save retyping
  the db connection code in every script.  The 'connectToDB()'
  function is found in the 'functions.php' file.
*/
connectToDB();
?>
