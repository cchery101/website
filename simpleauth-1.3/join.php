<?php
/**********************************************************************
Filename:	join.php
Author:		Jez Hancock
Support:	http://forums.munk.me.uk/
Version:	$Id: join.php 14 2007-04-09 09:38:12Z Jez $

Description:
This file displays a 'registration' form and allows users to register a
new user account on the site.
**********************************************************************/
include_once("config.php");

// Check user not logged in already:
checkLoggedIn("no");

// page title:
$title="Member Registration Page";

/*
Accepting a <form> submission:
The $submit variable in the $_POST superglobal array will only be set if the user has clicked on the 'submit'
button.  This is a reasonable way to check that the user did in fact submit the form.
*/
if(isset($_POST["submit"])){
	// Info has been submitted, check it:
	// Check login, password and password2 are not empty:
	# field_validator($field_descr, $field_data, $field_type, $min_length="", $max_length="", $field_required=1) {
	field_validator("login name", $_POST["login"], "alphanumeric", 4, 15);
	field_validator("password", $_POST["password"], "string", 4, 15);
	field_validator("confirmation password", $_POST["password2"], "string", 4, 15);

	// Check that password and password2 match:
	if(strcmp($_POST["password"], $_POST["password2"])) {
		// The password and confirmation password didn't match,
		// Add a message to be displayed to the user:
		$messages[]="Your passwords did not match";
	}

	/*
	Checking the login name doesn't already exist in the 'users' table:

	The idea here is that if an entry already exists
	in the 'users' db table where 'login' equals $login
	(ie the login name the user has just provided in the
	join form), then we return an error message saying that
	that username is already taken and ask the user to
	choose another name.
	*/

	// build query:
	$query="SELECT login FROM users WHERE login='".$_POST["login"]."'";

	// Run query:
	$result=mysql_query($query, $link) or die("MySQL query $query failed.  Error if any: ".mysql_error());

	// If a row exists with that username, issue an error message:
	if( ($row=mysql_fetch_array($result)) ){
		$messages[]="Login ID \"".$_POST["login"]."\" already exists.  Try another.";
	}

	/*
	Creating a new user entry in the users table:

	If we got here and no error messages were placed in the $messages array above,
	then the $user_name that the user provided was valid and we can
	continue to create an entry in the users table in the mysql db.
	We also effectively 'login' the user and then forward them to the members.php
	page using the 'header()' function.
	*/
	if(empty($messages)) {
		// registration ok, get user id and update db with new info:
		newUser($_POST["login"], $_POST["password"]);

		// Log the user in:
		cleanMemberSession($_POST["login"], $_POST["password"]);

		// and then redirect them to the members page:
		header("Location: members.php");

		/*
		Note this script stops executing after the header() function above!
		(the user is forwarded to the members.php page)
		*/
	}
}
/*
Below here is HTML interposed with PHP.  This HTML is only output if
a. the form hasn't been submitted
b. the form was submitted but errors were detected
*/
?>
<html>
<head>
<title><?php print $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php doCSS(); ?>
</head>
<body>
<h1><?php print $title; ?></h1>
<?php
//Check if $message is set, and output it if it is:
if(!empty($messages)){
	displayErrors($messages);
}
?>
<form action="<?php print $_SERVER["PHP_SELF"]; ?>" method="POST">
<table>
<tr><td>Login:</td><td><input type="text" name="login"
value="<?php print isset($_POST["login"]) ? $_POST["login"] : "" ; ?>"
maxlength="15"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" value="" maxlength="15"></td></tr>
<tr><td>Confirm password:</td><td><input type="password" name="password2" value="" maxlength="15"></td></tr>
<tr><td>&nbsp;</td><td><input name="submit" type="submit" value="Submit"></td></tr>
</table>
</form>
</body>
</html>
