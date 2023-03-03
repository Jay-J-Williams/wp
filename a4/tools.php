<?php
    session_start();

	/* Go through the website and create functions to eliminate code duplication (Look at !Doctype, Nav, Movie Panels, Options, and the end of the page) */
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
			'<footer>
			  <div>&copy;<script>
				document.write(new Date().getFullYear());
			  </script> Email: LunardoCinema@gmail.com, Phone: 555 555 555, Address: 2 Smith Road, Smithville.  Jay Meredith, S3951987, <a href="https://github.com/Jay-J-Williams/wp">GitHub Link</a>. Last modified <?= date ("Y F d  H:i", filemtime(\$_SERVER["SCRIPT_FILENAME"])); ?>.</div>
			  <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
			  <div><button id="toggleWireframeCSS" onclick="toggleWireframe()">Toggle Wireframe CSS</button></div>
			  <script src="script.js"></script>
			  <div id="retrieve_bookings_form_div">
				  <form method="post" action="" id="RetrieveBookingsForm">
					<p>Retrieve Bookings Here:</p>
					<input id="retrieval_mobile" type="tel" name="retrieval[mobile]" placeholder="Mobile Number" pattern="[0-9]{10}" value="" required>
					<br>
					<input id="retrieval_email" type="email" name="retrieval[email]" placeholder="Email" value="" required>
					<br>
					<input type="submit" value="Submit">
				  </form>
			  </div>
			</footer>'
		);
	}

	// Function that matches the data provided in the retrieve bookings form to the bookings within the file to redirect the user to 'currentbookings.php'

	function receiveBookings() {
		if (isset($_POST['retrieval']['mobile']) && isset($_POST['retrieval']['email'])) {
			if (isset($_SESSION['received_bookings'])) {
				unset($_SESSION['received_bookings']);
			}
			$mobile = $_POST['retrieval']['mobile'];
			$email = $_POST['retrieval']['email'];
			$bookings = [];
			$booking_number = 1;
			$file = fopen('bookings.txt', 'r');
			$line = fgetcsv($file);
			while($line != false) {
				if ($line[2] == $email && $line[3] == $mobile) {
					$bookings["Booking $booking_number"] = $line;
					$booking_number +=1;
				}
				$line = fgetcsv($file);
			}
			fclose($file);
			if (count($bookings) > 0) {
				$_SESSION['received_bookings'] = $bookings;
				header('location: currentbookings.php');
			} else {
				echo '<p>No Bookings Were Found</p>';
			}
		}
	}

	// Function to create a List of Bookings

	function createBookingsList() {
		$booking_number = 1;
		foreach ($_SESSION['received_bookings'] as $booking) {
			echo "<h2>Booking $booking_number</h2> <br>
				 <p class='ReceivedBookingP'> 
				 Order Date: $booking[0]<br>
				 Name: $booking[1]<br>
				 Email: $booking[2]<br>
				 Mobile: $booking[3]<br>
				 Movie Code: $booking[4]<br>
				 Day of Movie: $booking[5]<br>
				 Time of Movie: $booking[6]<br>
				 Seat Group: $booking[7]<br>
				 Seat Quantity: $booking[8]<br>
				 Total: $booking[9]<br>
				 GST: $booking[10]<br><br></p>";
			$booking_number +=1;
			echo "<div class='BookingsListPosterDiv'>";
			if ($booking[4] == "ACT") {
				echo ("<img src='https://sportshub.cbsistatic.com/i/2022/11/21/4d1fe194-2496-4923-af07-11f47ca498bf/avatar-the-way-of-water-character-posters-1.jpg?auto=webp&width=608&height=900&crop=0.676:1,smart' alt='Avatar 2 Poster'>");
			} elseif ($booking[4] == "RMC") {
				echo ("<img src='https://m.media-amazon.com/images/M/MV5BOWRiNmI1OTItYjc0Zi00YTYwLWI4OTEtMmE0YTNlODJkOTQwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_FMjpg_UX1000_.jpg' alt='Weird Poster'>");
			} elseif ($booking[4] == "FAM") {
				echo ("<img src='https://preview.redd.it/c4s42j0ykjc91.jpg?width=640&crop=smart&auto=webp&s=8129d59e62fbd6e0584626d66d2e052fb9b2ea01' alt='Puss in Boots Poster'>");
			} else {
				echo ("<img src='https://m.media-amazon.com/images/M/MV5BYmRiYjZiYzYtYzNkYy00N2MzLWJmZmItMTZjOGIyOGM5ZWViXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_.jpg' alt='Margrete Poster'>");
			}
			$booking_number-= 1;
			echo "</div>";
			echo "<div id='submit_booking_form_div'>
				  <a href='receipt.php?booking=$booking_number' class='SubmitBooking' >Submit Booking
					<form class='SubmitBookingForm' action='receipt.php' method='get'>
					</form>
                  </a></div>";
		}
	}



	function createReceiptAndTicket($name, $email, $mobile, $seat_count, $seat_group, $seat_price, $total_price, $total_price_gst, $day, $time, $movie) {
		echo "
			<article id='receipt'>
			<h2>Receipt</h2>
			<p>\"Name: $name <br> Email: $email <br> Mobile: $mobile\"
			</p>
			<ul>
				<li><p>\"Number of Seats: $seat_count\"</p></li>
				<li><p>\"Seat Group: $seat_group\"</p></li>
				<li><p>\"Seat Price: $seat_price\"</p></li>
				<li><p>\"Total Price: $total_price\"</p></li>
				<li><p>\"GST: $total_price_gst\"</p></li>
				</ul>
			</article>
			<div class=\"ticket_div\">
				<article class=\"ticket\">
					<h2>Lunardo Cinema Ticket</h2>
					<div class=\"ticket_content_div\">
						<ul class=\"ticket_content_list\">
							<li class=\"ticket_content\"><h5>SEAT GROUP</h5><p><$seat_group</p></li>
							<li class=\"ticket_content\"><h5>NUMBER OF SEATS</h5><p>$seat_count</p></li>
							<li class=\"ticket_content\"><h5>DAY OF VIEWING</h5><p>$day</p></li>
							<li class=\"ticket_content\"><h5>TIME OF VIEWING</h5><p>$time</p></li>
						<ul>
					</div>";
		if ($movie == "ACT") {
			echo "<img src='https://sportshub.cbsistatic.com/i/2022/11/21/4d1fe194-2496-4923-af07-11f47ca498bf/avatar-the-way-of-water-character-posters-1.jpg?auto=webp&width=608&height=900&crop=0.676:1,smart' alt='Avatar 2 Poster'>";
		} elseif ($movie == "RMC") {
			echo "<img src='https://m.media-amazon.com/images/M/MV5BOWRiNmI1OTItYjc0Zi00YTYwLWI4OTEtMmE0YTNlODJkOTQwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_FMjpg_UX1000_.jpg' alt='Weird Poster'>";
		} elseif ($movie == "FAM") {
			echo "<img src='https://preview.redd.it/c4s42j0ykjc91.jpg?width=640&crop=smart&auto=webp&s=8129d59e62fbd6e0584626d66d2e052fb9b2ea01' alt='Puss in Boots Poster'>";
		} else {
			echo "<img src='https://m.media-amazon.com/images/M/MV5BYmRiYjZiYzYtYzNkYy00N2MzLWJmZmItMTZjOGIyOGM5ZWViXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_.jpg' alt='Margrete Poster'>";
		}
		echo "
				</article>
			</div>";
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