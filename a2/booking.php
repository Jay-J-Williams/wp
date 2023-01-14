<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Booking Page</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <div>Lunardo <img src='../../media/Lunardo-Logo.png' alt='Lunardo Cinema Logo', width='100', height='100'/> Cinema</div>
    </header>

    <nav>
      <div>        
        <ul>
            <li><a href='index.php'>HOME</a>
        </ul>
      </div>
    </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
      <form action='booking.php' method='post'>
          <p>Choose a Movie:</p>
          <span class='radio_btn'>
              <input type='radio' checked="checked" id='avatar' name='MovieChoice' value='Avatar'>
              <label for='avatar'>Avatar: The Way of Water</label><br>
          </span>
          <span class='radio_btn'>
              <input type='radio' id='weird' name='MovieChoice' value='Weird'>
              <label for='weird'>Weird: The Al Yankovic Story</label><br>
          </span>
          <span class='radio_btn'>
              <input type='radio' id='puss_in_boots' name='MovieChoice' value='PussInBoots'>
              <label for='puss_in_boots'>Puss in Boots: The Last Wish</label><br>
          </span>
          <span class='radio_btn'>
              <input type='radio' id='margrete' name='MovieChoice' value='Margrete'>
              <label for='margrete'>Margrete: Queen of the North</label><br>
          </span>

          <br>
          <p>Choose Seats:</p>
          <select name='SeatGroup' id='seatgroup' required>
            <option value='select' disabled>Select a Seat Group</option>
            <option value='seats[STA]' data-fullprice='21.50' data-discprice='16.00'>Standard Adult</option>
            <option value='seats[STP]' data-fullprice='19.00' data-discprice='14.50'>Standard Concession</option>
            <option value='seats[STC]' data-fullprice='17.50' data-discprice='13.00'>Standard Child</option>
            <option value='seats[FCA]' data-fullprice='31.00' data-discprice='25.00'>First Class Adult</option>
            <option value='seats[FCP]' data-fullprice='28.00' data-discprice='23.50'>First Class Concession</option>
            <option value='seats[FCC]' data-fullprice='25.00' data-discprice='22.00'>First Class Child</option>
          </select>
          <select name='NumberOfSeats' id='number_of_seats' required>
            <option value='select' disabled>Select Number of Seats</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            <option value='7'>7</option>
            <option value='8'>8</option>
            <option value='9'>9</option>
            <option value='10'>10</option>
          </select>
          <br>
          <br>
          <p>Choose Day:</p>
          <span class='radio_btn'>
              <input type='radio' checked="checked" id='Mon' name='day' value='mon'>
              <label for='Mon'>Monday</label><br>
          </span>
          <span class='radio_btn'>
              <input type='radio' id='Tue' name='day' value='tue'>
              <label for='Tue'>Tuesday</label><br>
          </span>
          <span class='radio_btn'>
              <input type='radio' id='Wed' name='day' value='wed'>
              <label for='Wed'>Wednesday</label><br>
          </span>
          <span class='radio_btn'>
              <input type='radio' id='Thu' name='day' value='thu'>
              <label for='Thu'>Thursday</label><br>
          </span>
          <span class='radio_btn'>
              <input type='radio' id='Fri' name='day' value='fri'>
              <label for='Fri'>Friday</label><br>
          </span>
          <span class='radio_btn'>
              <input type='radio' id='Sat' name='day' value='sat'>
              <label for='Sat'>Saturday</label><br>
          </span>
          <span class='radio_btn'>
              <input type='radio' id='Sun' name='day' value='sun'>
              <label for='Sun'>Sunday</label><br>
          </span>
          <br>
          <p>Enter Contact Information:</p>
          <input type='text' name='user[name]' placeholder='Full Name' required>
          <br>
          <input type='email' name='user[email]' placeholder='Email' required>
          <br>
          <input type='number' name='user[mobile]' placeholder='Mobile Number' required>
          <br>
          <input type='submit' value="Submit">
          <br>
      </form>
    </main>
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Email: LunardoCinema@gmail.com, Phone: 555 555 555, Address: 2 Smith Road, Smithville.  Jay Meredith, S3951987, <a href=https://github.com/Jay-J-Williams/wp>GitHub Link</a>. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
    <aside id="debug">
      <hr>
      <h3>Debug Area</h3>
      <pre>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php print_r($_SESSION) ?>
      </pre>
    </aside>

  </body>
</html>
