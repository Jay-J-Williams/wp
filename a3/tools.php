<?php
  session_start();

	/* Remember to use require_once at the top of the page to include this file in the index.php file */
	/* Go through the website and create functions to eliminate code duplication (Look at !Doctype, Nav, Movie Panels, Options, and the end of the page) */
	/* Create a Movies Class that uses a foreach loop to extract the days and time the movie plays from the screenings array (ref.Workshop, Solutions W9) */
	/* Use Window Location Includes #Section to solve the JS clicking issue if things fail*/

function debugModule() {
	echo "<ore id='debug'>";
	echo "POST ";
	print_r($_POST);
	echo "<br><br> GET ";
	print_r($_GET);
	echo "<br><br> SESSION ";
	print_r($_SESSION);
	echo "</pre>";
}

function printMyCode() {
	$allLinesOfCode = file($_SERVER['SCRIPT_FILENAME']);
	echo "<pre id='myCode'><ol>";
	foreach($allLinesOfCode as $oneLineOfCode) {
		echo "<li>" .rtrim(htmlentities($oneLineOfCode)) . "</li>";
	}
	echo "<ol></pre>";
}

	/* Call the functions above at the bottom of the pages */

function php2js( $arr, $arrName) {
	$arrJSON = json_encode($arr, JSON_PRETTY_PRINT);
	echo <<<"CDATA"
	<script>
		var $arrName = $arrJSON;
	</script>
CDATA;
}

	/* Use the function above in every page that needs the unit prices */ 

?>