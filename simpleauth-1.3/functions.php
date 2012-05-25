<?php
/**********************************************************************
Filename:	functions.php
Author:		Jez Hancock
Support:	http://forums.munk.me.uk/
Version:	$Id: functions.php 12 2007-04-09 09:38:05Z Jez $

Description:
This file contains main stock of functions.

This file is automatically 'include()'d by every page that include()'s
the file 'config.php'.  This has the benefit that every page that
includes 'config.php' will have access to all of the functions in
this file.
**********************************************************************/


/******************************************************\
 * Function Name : connectToDB()
 *
 * Task : create connection to db
 *
 * Arguments : none
 *
 * Globals: all defined in config.php
 *
 * Returns : none, sets $link
 *
 \******************************************************/
function connectToDB() {
	global $link, $dbhost, $dbuser, $dbpass, $dbname;

	/*
	Database connection:
	The PHP function mysql_pconnect() connects to a MySQL
	database with the arguments it is given.  mysql_pconnect()
	creates a persistent database connection which can save
	some time when a number of mysql connections are made to
	the same db with the same user/password/dbhost triple.
	Further, when the execution of the PHP script ends, the
	connection to the database is NOT closed.  In some rare
	cases this can cause problems.

	Alternatively mysql_connect() can be used and takes the
	same arguments as mysql_pconnect().  However mysql_connect()
	does not maintain a persistent connection - every call to
	mysql_connect() creates a new db connection.  On a busy
	server this can significantly increase the amount of time
	taken to execute queries on the db.
	*/
	($link = mysql_pconnect("$dbhost", "$dbuser", "$dbpass")) || die("Couldn't connect to MySQL");

	// select db:
	mysql_select_db("$dbname", $link) || die("Couldn't open db: $dbname. Error if any was: ".mysql_error() );
} // end func dbConnect();


/******************************************************\
 * Function Name : newUser($login, $pass)
 *
 * Task : Create a new user entry in the users table
			based on args passed
 *
 * Arguments : string($login, $pass)
 *
 * Returns : int($id), $id of new user
 *
 \******************************************************/
function newUser($login, $password) {
	/*
	Creating a New User Record in the DB:
	In this function we create a new user record in the db.

	We first build a query and save it into the $query variable.
	The query statement says:

	'Insert the value of $login and $password into the 'login'
	and 'password' columns in the 'users' table'
	*/

	global $link;

	$query="INSERT INTO users (login, password) VALUES('$login', '$password')";
	$result=mysql_query($query, $link) or die("Died inserting login info into db.  Error returned if any: ".mysql_error());

	return true;
} // end func newUser($login, $pass)


/******************************************************\
 * Function Name : displayErrors($messages)
 *
 * Task : display a list of errors
 *
 * Arguments : array $messages
 *
 * Returns : none
 *
 \******************************************************/
function displayErrors($messages) {
	/*
	Error Handling functions:
	An error handling function is useful to have in any project.

	This particular function takes an array of messages, and
	for each message displays it in a list using HTML
	<ul><li></li></ul> tags.
	*/
	print("<b>There were problems with the previous action.  Following is a list of the error messages generated:</b>\n<ul>\n");

	foreach($messages as $msg){
		print("<li>$msg</li>\n");
	}
	print("</ul>\n");
} // end func displayErrors($messages)


/******************************************************\
 * Function Name : checkLoggedIn($status)
 *
 * Task : check if a user is (isn't) logged in depending on $status
 *
 * Arguments : quasi(!) boolean $status - "yes" or "no"
 *
 * Returns :
 *
 \******************************************************/
function checkLoggedIn($status){
	/*
	Function to check whether a user is logged in or not:
	This is a function that checks if a user is already logged
	in or not, depending on the value of $status which is passed
	in as an argument.

	If $status is 'yes', we check if the user is already logged in;
	If $status is 'no', we check if the user is NOT already logged in.
	*/
	switch($status){
		// if yes, check user is logged in:
		// ie for actions where, yes, user must be logged in(!)
		case "yes":
			if(!isset($_SESSION["loggedIn"])){
				header("Location: login.php");
				exit;
			}
			break;

		// if no, check NOT logged in:
		// ie for actions where user can't already be logged in
		// (ie for joining up or logging in)
		case "no":
			/*
				The '===' operator differs slightly from the '=='
				equality operator.

				$a === $b if and only if $a is equal to $b AND
				$a is the same variable type as $b.

				for example, if:

				$a="2";	<-- $a is a string here
				$b=2;	<-- $b is an integer here

				then this test returns false:
				if($a===$b)

				whereas this test returns true:
				if($a==$b)
			*/
			if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true ){
				header("Location: members.php");
			}
			break;
	}
	// if got here, all ok, return true:
	return true;
} // end func checkLoggedIn($status)


/******************************************************\
 * Function Name : checkPass($login, $password)
 *
 * Task : check login/passwd match that stored in db
 *
 * Arguments : string($login, $password);
 *
 * Returns : array $row  - array of member details on success
 *				false on failure
 \******************************************************/
function checkPass($login, $password) {
	/*
	Password checking function:
	This is a simple function that takes the $login name and
	$password that a user submits in a form and checks that a
	row exists in the database where:

	the value of the 'login' column is the same as the value in $login
	and
	the value of the 'password' column is the same as the value in $password

	If exactly one row is returned, then that row of data is returned.
	If no row is found, the function returns 'false'.
	*/
	global $link;

	$query="SELECT login, password FROM users WHERE login='$login' and password='$password'";
	$result=mysql_query($query, $link)
		or die("checkPass fatal error: ".mysql_error());

	// Check exactly one row is found:
	if(mysql_num_rows($result)==1) {
		$row=mysql_fetch_array($result);
		return $row;
	}
	//Bad Login:
	return false;
} // end func checkPass($login, $password)


/******************************************************\
 * Function Name : cleanMemberSession($login, $pass)
 *
 * Task : populate a session variable
 *
 * Arguments : string $login, string $pass
				taken from users table in db.
 *
 * Returns : none
 *
 \******************************************************/
function cleanMemberSession($login, $password) {
	/*
	Member session initialization function:
	This function initializes 3 session variables:
  $login, $password and $loggedIn.

	$login and $password are used on member pages (where you
	could allow the user to change their password for example).

	$loggedIn is a simple boolean variable which indicates
	whether or not the user is currently logged in.
	*/
	$_SESSION["login"]=$login;
	$_SESSION["password"]=$password;
	$_SESSION["loggedIn"]=true;
} // end func cleanMemberSession($login, $pass)


/******************************************************\
 * Function Name : flushMemberSession($session)
 *
 * Task : unset session variables and destroy session
 *
 * Arguments : array $session
 *
 * Returns : true
 *
 \******************************************************/
function flushMemberSession() {
	/*
	Member session destruction function:
	This function unsets all the session variables initialized
	above and then destroys the current session.
	*/
	// use unset to destroy the session variables
	unset($_SESSION["login"]);
	unset($_SESSION["password"]);
	unset($_SESSION["loggedIn"]);

	// and use session_destroy to destroy all data associated
	// with current session:
	session_destroy();

	return true;
} // send func flushMemberSession()


/******************************************************\
 * Function Name : doCSS()
 *
 * Task : output the CSS for the screens
 *
 * Arguments :
 *
 * Returns :
 *
 \******************************************************/
function doCSS() {
	/*
	CSS Output:
	This function simply outputs some cascading style sheet
	data for markup by the user's browser.
	*/
	?>
<style type="text/css">
body{font-family: Arial, Helvetica; font-size: 10pt}
h1{font-size: 12pt}
</style>
	<?php
} // end func doCSS()

# function validates HTML form field data passed to it:
function field_validator($field_descr, $field_data,
  $field_type, $min_length="", $max_length="",
  $field_required=1) {
	/*
	Field validator:
	This is a handy function for validating the data passed to
	us from a user's <form> fields.

	Using this function we can check a certain type of data was
	passed to us (email, digit, number, etc) and that the data
	was of a certain length.
	*/
	# array for storing error messages
	global $messages;

	# first, if no data and field is not required, just return now:
	if(!$field_data && !$field_required){ return; }

	# initialize a flag variable - used to flag whether data is valid or not
	$field_ok=false;

	# this is the regexp for email validation:
	$email_regexp="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|";
	$email_regexp.="(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$";

	# a hash array of "types of data" pointing to "regexps" used to validate the data:
	$data_types=array(
		"email"=>$email_regexp,
		"digit"=>"^[0-9]$",
		"number"=>"^[0-9]+$",
		"alpha"=>"^[a-zA-Z]+$",
		"alpha_space"=>"^[a-zA-Z ]+$",
		"alphanumeric"=>"^[a-zA-Z0-9]+$",
		"alphanumeric_space"=>"^[a-zA-Z0-9 ]+$",
		"string"=>""
	);

	# check for required fields
	if ($field_required && empty($field_data)) {
		$messages[] = "$field_descr is a required field.";
		return;
	}

	# if field type is a string, no need to check regexp:
	if ($field_type == "string") {
		$field_ok = true;
	} else {
		# Check the field data against the regexp pattern:
		$field_ok = ereg($data_types[$field_type], $field_data);
	}

	# if field data is bad, add message:
	if (!$field_ok) {
		$messages[] = "Please enter a valid $field_descr.";
		return;
	}

	# field data min length checking:
	if ($field_ok && ($min_length > 0)) {
		if (strlen($field_data) < $min_length) {
			$messages[] = "$field_descr is invalid, it should be at least $min_length character(s).";
			return;
		}
	}

	# field data max length checking:
	if ($field_ok && ($max_length > 0)) {
		if (strlen($field_data) > $max_length) {
			$messages[] = "$field_descr is invalid, it should be less than $max_length characters.";
			return;
		}
	}
}
?>
