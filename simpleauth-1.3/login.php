<?php
/**********************************************************************
Filename:	login.php
Author:		Jez Hancock
Support:	http://forums.munk.me.uk/
Version:	$Id: login.php 15 2007-04-09 09:40:27Z Jez $

Description:
This file contains a simple front end login script.
**********************************************************************/
include_once("config.php");

/*
Login script:
This script does the following:

Checks that the user is NOT already logged in - if they are they
are redirected to the members page by the 'checkLoggedIn()' function.

Checks if the login form has been submitted - if so, the 'login' and
'password' fields are checked to ensure they are of the correct format and length.
If there are any problems here an error is added to the $messages array and
then the script executes the 'doIndex()' function - this function basically
outputs the main 'index' page for this script - ie the login form.

If there are no problems with the previous step, the 'login' and 'password'
field data is passed to the 'checkPass' function to check that an entry
exists in the 'users' table for that login/password pair.
If nothing is returned from the 'checkPass()' function, an error is
added to the $messages array and the 'doIndex()' function is called as above.

If a row of data is returned from the 'users' table, the data is passed to
the 'cleanMemberSession()' function - which initializes session variables and
logs the user in.  The user is then forwarded to the members page.

If the form hasn't yet been submitted, then the 'doIndex()' function is called
and the login page is displayed.
*/
// Check user not logged in already:
checkLoggedIn("no");

// Page title:
$title="Member Login Page";

// if $submit variable set, login info submitted:
if(isset($_POST["submit"])) {
	//
	// Check fields were filled in
	//
	// login must be between 4 and 15 chars containing alphanumeric chars only:
	field_validator("login name", $_POST["login"], "alphanumeric", 4, 15);
	// password must be between 4 and 15 chars - any characters can be used:
	field_validator("password", $_POST["password"], "string", 4, 15);

	// if there are $messages, errors were found in validating form data
	// show the index page (where the messages will be displayed):
	if($messages){
		doIndex();
		// note we have to explicity 'exit' from the script, otherwise
		// the lines below will be processed:
		exit;
	}

	// OK if we got this far the form field data was of the right format;
	// now check the user/pass pair match those stored in the db:
	/*
	If checkPass() is successful (ie the login and password are ok),
	then $row contains an array of data containing the login name and
	password of the user.
	If checkPass() is unsuccessful however, $row will simply contain
	the value 'false' - and so in that case an error message is
	stored in the $messages array which will be displayed to the user.
	*/
    if( !($row = checkPass($_POST["login"], $_POST["password"])) ) {
		// login/passwd string not correct, create an error message:
        $messages[]="Incorrect login/password, try again";
    }

	/*
	If there are error $messages, errors were found in validating form data above.
	Call the 'doIndex()' function (which displays the login form) and exit.
	*/
	if($messages){
		doIndex();
		exit;
	}

	/*
	If we got to this point, there were no errors - start a session using the info
	returned from the db:
	*/
	cleanMemberSession($row["login"], $row["password"]);

	// and finally forward user to members page (populating the session id in the URL):
	header("Location: members.php");
} else {
	// The login form wasn't filled out yet, display the login form for the user to fill in:
	doIndex();
}

/*
This function displays the default 'index' page for this script.  This consists of just a simple
login form for the user to submit their username and password.
*/
function doIndex() {
	/*
	Import the global $messages array.
	If any errors were detected above, they will be stored in the $messages array:
	*/
	global $messages;

	/*
	also import the $title for the page - note you can normally just declare all globals on one line
	- ie:
	global $messages, $title;
	*/
	global $title;

	// drop out of PHP mode to display the plain HTML:
?>
<html>
<head>
<title><?php print $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php doCSS(); ?>
<body>
<h1><?php print $title; ?></h1>
<?php
// if there are any messages stored in the $messages array, call the displayErrors
// function to output them to the browser:
if($messages) { displayErrors($messages); }

/*
PHP_SELF:
The $_SERVER superglobals variable $PHP_SELF is one of the most useful predefined variables in PHP.
It contains the URI (uniform resource indicator) of the current script.
For example if this script is at http://example.com/somedir/join.php, then $_SERVER["PHP_SELF"] will contain:
/somedir/join.php

This is very useful because it means if you change the name of the script, you don't have to change every reference
to the script in <form> tags - $_SERVER["PHP_SELF"] automatically includes the current script URI!
*/
?>
<form action="<?php print $_SERVER["PHP_SELF"]; ?>" method="POST">
<table>
<tr><td>Login:</td><td><input type="text" name="login"
value="<?php print isset($_POST["login"]) ? $_POST["login"] : "" ; ?>"
maxlength="15"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" value="" maxlength="15"></td></tr>
<tr><td>&nbsp;</td><td><input name="submit" type="submit" value="Submit"></td></tr>
</table>
</form>
</body>
</html>
<?php
}
?>
