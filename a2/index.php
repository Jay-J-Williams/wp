<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Home Page</title>

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
            <li><a href='booking.php'>BOOKING</a>
        </ul>
      </div>
    </nav>

    <main>
      <article id='About Us'>
        <img src='../../media/Lunardo-Logo.png' alt='Section related image', width='600', height='600'/>
        <p>"Short Description on Section."
      </article>
      <article id='Seats and Prices'>
      </article>
      <article id='Now Showing'>
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Email: LunardoCinema@gmail.com, Phone: 555 555 555, Address: 2 Smith Road, Smithville.  Jay Meredith, S3951987, <a href=https://github.com/Jay-J-Williams/wp>GitHub Link</a>. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
