<?php 
	require_once 'tools.php';
	createHeadAndHeader();
	receiveBookings();

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
	<?php
	if (isset($_GET['booking'])) {
		$booking_number = $_GET['booking'];
		$name = $_SESSION['received_bookings']["Booking $booking_number"][1];
		$email = $_SESSION['received_bookings']["Booking $booking_number"][2];
		$mobile = $_SESSION['received_bookings']["Booking $booking_number"][3];
		$movie = $_SESSION['received_bookings']["Booking $booking_number"][4];
		$seat_count = $_SESSION['received_bookings']["Booking $booking_number"][8];
		$seat_group = $_SESSION['received_bookings']["Booking $booking_number"][7];
		$total_price = $_SESSION['received_bookings']["Booking $booking_number"][10];
		$total_price_gst = $_SESSION['received_bookings']["Booking $booking_number"][11];
	}
	createReceiptAndTicket($name, $email, $mobile, $seat_count, $seat_group, $seat_price, $total_price, $total_price_gst, $day, $time, $movie);
	?>
</body>
</main>
<?php
	createFooter();
?>
<footer>
    <h3>Debug Area</h3>
    <?php 
        debugModule();
    ?>
</footer>
</html>