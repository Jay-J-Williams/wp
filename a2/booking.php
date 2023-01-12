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
      <form action='booking.php' method='get'>
          <p>Choose a Movie:</p>
          <input type='radio' id='avatar' name='MovieChoice' value='Avatar>
          <label for='avatar'>Avatar: The Way of Water</label><br>
          <input type='radio' id='weird' name='MovieChoice' value='Weird'>
          <label for='weird'>Weird: The Al Yankovic Story</label><br>
          <input type='radio' id='puss_in_boots' name='MovieChoice' value='PussInBoots'>
          <label for='puss_in_boots'>Puss in Boots: The Last Wish</label><br>
          <input type='radio' id='margrete' name='MovieChoice' value='Margrete'>
          <label for='margrete'>Margrete: Queen of the North</label><br>

          <br>
          
          <select name='SeatGroup' id='seatgroup'>
            <option value='select' disabled>Select a Seat Group</option>
            <option value='standard_adult[STA]'>Standard Adult</option>
            <option value='standard_concession[STP]'>Standard Concession</option>
            <option value='standard_child[STC]'>Standard Child</option>
            <option value='first_class_adult[FCA]'>First Class Adult</option>
            <option value='first_class_concession[FCP]'>First Class Concession</option>
            <option value='first_class_child[FCC]'>First Class Child</option>
          </select>
          <input type='submit' value="Add">
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
