<?php 
	require_once 'tools.php';
	createHeadAndHeader();
	if (empty($_SESSION)) {
		header('location: index.php');
	}
	$order_date = date("d-m-Y");
	$_SESSION['order_date'] = $order_date;

	if ($_SESSION['Booking']['movie'] == 'ACT') {
		if ($_SESSION['Booking']['day'] == 'sat' || $_SESSION['Booking']['day'] == 'sun') {
			$time = "6pm";
		} else {
			$time = "9pm";
		}
	} elseif ($_SESSION['Booking']['movie'] == 'RMC') {
		if ($_SESSION['Booking']['day'] == 'sat' || $_SESSION['Booking']['day'] == 'sun') {
			$time = "3pm";
		} else {
			$time = "12pm";
		}
	} elseif ($_SESSION['Booking']['movie'] == 'FAM') {
		if ($_SESSION['Booking']['day'] == 'sat' || $_SESSION['Booking']['day'] == 'sun') {
			$time = "12pm";
		} elseif ($_SESSION['Booking']['day'] == 'mon' || $_SESSION['Booking']['day'] == 'tue') {
			$time = "12pm";
		} else {
			$time = "6pm";
		}
	} elseif ($_SESSION['Booking']['movie'] == 'AHF') {
		if ($_SESSION['Booking']['day'] == 'sat' || $_SESSION['Booking']['day'] == 'sun') {
			$time = "12pm";
		} else {
			$time = "6pm";
		}
	}
	$_SESSION['Booking']['time'] = $time;

	if ($_SESSION['Booking']['day'] == 'tue' || $_SESSION['Booking']['day'] == 'wed') {
		$pricing = "discprice";
	} else {
		$pricing = "fullprice";
	}

    switch ($_SESSION['Booking']['SeatGroup']) {
        case 'seats[STA]':
            $fullprice = 21.50;
            $discprice = 16.00;
            break;

        case 'seats[STP]':
            $fullprice = 19.00;
            $discprice = 14.50;
            break;

        case 'seats[STC]':
            $fullprice = 17.50;
            $discprice = 13.00;
            break;

        case 'seats[FCA]':
            $fullprice = 31.00;
            $discprice = 25.00;
            break;

        case 'seats[FCP]':
            $fullprice = 28.00;
            $discprice = 23.50;
            break;

        case 'seats[FCC]':
            $fullprice = 25.00;
            $discprice = 22.00;
            break;

        default:
            $fullprice = 0.00;
            $discprice = 0.00;
    }
	if ($pricing == "fullprice") {
		$seat_price = $fullprice;
	} else {
		$seat_price = $discprice;
	}

	$total_price = $seat_price * $_SESSION['Booking']['NumberOfSeats'];
	$total_price_gst = $total_price / 11;
	$total_price_gst = round($total_price_gst, 2);
	$_SESSION['seat_price'] = $seat_price;
	$_SESSION['total_price'] = $total_price;
	$_SESSION['total_price_gst'] = $total_price_gst;
	$name = $_SESSION['Booking']['user']['name'];
	$email = $_SESSION['Booking']['user']['email'];
	$mobile = $_SESSION['Booking']['user']['mobile'];

	$movie = $_SESSION['Booking']['movie'];
	$day = $_SESSION['Booking']['day'];
	$seat_group = $_SESSION['Booking']['SeatGroup'];
	$seat_count = $_SESSION['Booking']['NumberOfSeats'];

	$file_output = array($order_date, $name, $email, $mobile, $movie, $day, $time, $seat_group, $seat_count, $seat_price, $total_price, $total_price_gst);
	$file = fopen("bookings.txt","a");
	fputcsv($file, $file_output);
	fclose($file);
?>
<main>
<body>
	<article id='receipt'>
		<h2>Receipt</h2>
		<p><?php  echo "Name: $name <br> Email: $email <br> Mobile: $mobile";
		?></p>
		<ul>
			<li><p><?php echo "Number of Seats: $seat_count";?></p></li>
			<li><p><?php echo "Seat Group: $seat_group";?></p></li>
			<li><p><?php echo "Seat Price: $seat_price";?></p></li>
			<li><p><?php echo "Total Price: $total_price";?></p></li>
			<li><p><?php echo "GST: $total_price_gst";?></p></li>
		</ul>
	</article>
	<div class="ticket_div">
		<article class="ticket">
			<h2>Lunardo Cinema Ticket</h2>
			<div class="ticket_content_div">
				<ul class="ticket_content_list">
					<li class="ticket_content"><h5>SEAT GROUP</h5><p><?php echo "$seat_group";?></p></li>
					<li class="ticket_content"><h5>NUMBER OF SEATS</h5><p><?php echo "$seat_count";?></p></li>
					<li class="ticket_content"><h5>DAY OF VIEWING</h5><p><?php echo "$day"; ?></p></li>
					<li class="ticket_content"><h5>TIME OF VIEWING</h5><p><?php echo "$time";?></p></li>
				<ul>
			</div>
			<?php if ($movie == "ACT") {
				echo ("<img src='https://sportshub.cbsistatic.com/i/2022/11/21/4d1fe194-2496-4923-af07-11f47ca498bf/avatar-the-way-of-water-character-posters-1.jpg?auto=webp&width=608&height=900&crop=0.676:1,smart' alt='Avatar 2 Poster'>");
			} elseif ($movie == "RMC") {
				echo ("<img src='https://m.media-amazon.com/images/M/MV5BOWRiNmI1OTItYjc0Zi00YTYwLWI4OTEtMmE0YTNlODJkOTQwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_FMjpg_UX1000_.jpg' alt='Weird Poster'>");
			} elseif ($movie == "FAM") {
				echo ("<img src='https://preview.redd.it/c4s42j0ykjc91.jpg?width=640&crop=smart&auto=webp&s=8129d59e62fbd6e0584626d66d2e052fb9b2ea01' alt='Puss in Boots Poster'>");
			} else {
				echo ("<img src='https://m.media-amazon.com/images/M/MV5BYmRiYjZiYzYtYzNkYy00N2MzLWJmZmItMTZjOGIyOGM5ZWViXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_.jpg' alt='Margrete Poster'>");
			}
			?>
		</article>
	</div>
</body>
</main>
<?php
createFooter();
?>
</html>