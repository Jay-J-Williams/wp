<?php
    session_start();

	/* Remember to use require_once at the top of the page to include this file in the index.php file */
	/* Go through the website and create functions to eliminate code duplication (Look at !Doctype, Nav, Movie Panels, Options, and the end of the page) */
	/* Create a Movies Class that uses a foreach loop to extract the days and time the movie plays from the screenings array (ref.Workshop, Solutions W9) */
	/* Use Window Location Includes #Section to solve the JS clicking issue if things fail */
	/* Look at the debug module code for removal of duplication too */

	// Code Duplication Elimination

	function createHeadAndHeader() {
		echo (
			"<!DOCTYPE html>
			<html lang='en'>
				<head>
				<meta charset='utf-8'>
				<meta name='viewport' content='width=device-width, initial-scale=1'>
				<title>Lunardo Booking Page</title>
				<!-- Keep wireframe.css for debugging, add your css to style.css -->
				<link id='wireframecss' type='text/css' rel='stylesheet' href='../wireframe.css' disabled>
				<link id='stylecss' type='text/css' rel='stylesheet' href='style.css'>
				<script src='../wireframe.js'></script>
			</head>

			<body>

				<header>
				<div>Lunardo <img src='../../media/Lunardo-Logo.png' alt='Lunardo Cinema Logo'>Cinema</div>
				</header>"
		);
	}

	function createFooter() {
		echo (
			"<footer>
			  <div>&copy;<script>
				document.write(new Date().getFullYear());
			  </script> Email: LunardoCinema@gmail.com, Phone: 555 555 555, Address: 2 Smith Road, Smithville.  Jay Meredith, S3951987, <a href='https://github.com/Jay-J-Williams/wp'>GitHub Link</a>. Last modified <?= date ('Y F d  H:i', filemtime(\$_SERVER['SCRIPT_FILENAME'])); ?>.</div>
			  <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
			  <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
			  <script src='script.js'></script>
			</footer>"
		);
	}

	// Movie Code Duplication Elimination

	class Movie {
		public $code;
		public $trailer_name;
		public $video_link;
		public $synopsis;
		public $director;
		public $main_cast;
		
		public function getCode() {
			return $this->code;
		}
		
		public function setCode($code) {
			$this->code = $code;
		}

		function getTrailerName() {
			return $this->trailer_name;
		}

		function setTrailerName($trailer_name) {
			$this->trailer_name = $trailer_name;
		}

		function getVideoLink() {
			return $this->video_link;
		}

		function setVideoLink($video_link) {
			$this->video_link = $video_link;
		}

		function getSynopsis() {
			return $this->synopsis;
		}

		function setSynopsis($synopsis) {
			$this->synopsis = $synopsis;
		}

		function getDirector() {
			return $this->director;
		}

		function setDirector($director) {
			$this->director = $director;
		}

		public function getMainCast() {
			return $this->main_cast;
		}

		public function setMainCast($main_cast) {
			$this->main_cast = $main_cast;
		}

		function createMovieInfoSection() {
			$a_id = $this->code.= "Info";
			$main_cast_arr = explode("|", $this->main_cast);
			$actor1 = $main_cast_arr[0];
			$actor2 = $main_cast_arr[1];
			echo(
				"<article id='$a_id'>
					<iframe src='$this->video_link' class='YTVideo' title='$this->trailer_name' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>
					<h1>Synopsis</h1>
					<p>$this->synopsis</p>
					<h1>Director</h1>
					<p>$this->director</p>
					<h1>Main Cast</h1>
					<p>$actor1</p>
					<p>$actor2</p>
				"
			);
			if (count($main_cast_arr) == 3) {
				$actor3 = $main_cast_arr[2];
				echo("	<p>$actor3</p>");
			}
			echo("</article>");
		}
	}

	function createMovieObject($movie, $code, $trailer_name, $video_link, $synopsis) {
		$movie->code = $code;
		$movie->trailer_name = $trailer_name;
		$movie->video_link = $video_link;
		$movie->synopsis = $synopsis;
		return $movie;
	}

	function setMovieInfoSection() {
		$avatar = new Movie();
		$avatar = createMovieObject($avatar, 'ACT', 'Avatar: The Way of Water | Official Trailer', 'https://www.youtube.com/embed/d9MyW72ELq0',
		'Jake Sully and Ney\'tiri have formed a family and are doing everything to stay together. However, they must leave 
		their home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a difficult war against the humans.');
		$avatar->director = 'James Cameron';
		$avatar->main_cast = 'Sam Worthington|Zoe Saldana';

		$weird = new Movie();
		$weird = createMovieObject($weird, 'RMC', 'Weird: The Al Yankovic Story - Official Trailer (2022) Daniel Radcliffe, Quinta Brunson',
		'https://www.youtube.com/embed/Ols03gpTjW4',
		'The unexaggerated true story about the greatest musician of our time. From a conventional upbringing where playing
		the accordion was a sin, "Weird Al" Yankovic rebels and makes his dream of changing the words to world-renowned songs come true. An instant 
		success and sex symbol, Al lives an excessive lifestyle and pursues an infamous romance that nearly destroys him.');
		$weird->director = 'Eric Appel';
		$weird->main_cast = 'Daniel Radcliffe|Evan Rachel Wood|"Weird" Al Yankovic';

		$puss_in_boots = new Movie();
		$puss_in_boots = createMovieObject($puss_in_boots, 'FAM', 'PUSS IN BOOTS: THE LAST WISH | Official Trailer', 'https://www.youtube.com/embed/Y5zqweZAEKI',
		'Puss in Boots discovers that his passion for adventure has taken its toll: he has burnt through eight of his nine lives. Puss 
		sets out on an epic journey to find the mythical Last Wish and restore his nine lives.');
		$puss_in_boots->director = 'Joel Crawford';
		$puss_in_boots->main_cast = 'Antonio Banderas|Salma Hayek';

		$margrete = new Movie();
		$margrete = createMovieObject($margrete, 'AHF', 'Margrete Queen Of The North - Official Trailer', 'https://www.youtube.com/embed/-7OCX98JgGk',
		'The year is 1402, and a woman is at the head of a new Nordic empire. Margarete I has united Denmark, Norway and Sweden in a union that she rules single-handedly
		through her adopted son, King Erik. However, a conspiracy is afoot.');
		$margrete->director = 'Chalotte Sieling';
		$margrete->main_cast = 'Trine Dyrholm|Morten Hee Anderson';

		$get_code = $_GET['movie'];
		$validation = 0;
		$movie_arr = array($avatar, $weird, $puss_in_boots, $margrete);
		foreach ($movie_arr as $movie) {
			if ($_GET['movie'] == $movie->code) {
				$movie -> createMovieInfoSection();
			}
			else {
				$validation+= 1;
			}
		}
			// Booking -> Index Redirection
		if ($validation == 4 && !$_GET['movie']=='AHF') {
			header("Location: index.php");
			exit();
		}
	}

	// Useful Functions

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