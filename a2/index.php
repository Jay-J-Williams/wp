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
      <div>Lunardo <img src='../../media/Lunardo-Logo.png' alt='Lunardo Cinema Logo'/> Cinema</div>
    </header>

    <nav>
      <div>
        <ul>
            <li><a href='booking.php'>BOOKING</a>
        </ul>
      </div>
    </nav>

    <main>
      <article id='AboutUs'>
        <img src='../../media/Lunardo-Logo.png' alt='Lunardo Cinema Logo'/>
        <p>We are based in Smithville, and we have recently reopened for business. With this reopening, comes many renovations and new technologies.
        There are new seats for standard and first class ticket holders, and brand new projection and sound systems with 3D Dolby Vision projection
        and Dolby Atmos sound. To learn about our new Dolby technologies, head to <a href='https://professional.dolby.com/cinema/'>Dolby Cinema</a>
        and <a href='https://professional.dolby.com/cinema/dolby-atmos'>Dolby Atmos</a>.
        </p>
      </article>
      <br>
      <article id='SeatsAndPrices'>
      <table>
        <tr>
            <th>Seat Type</th>
            <th>Seat Code</th>
            <th>Discounted Prices</th>
            <th>Normal Prices</th>
        </tr>
        <tr>
            <td>Standard Adult</td>
            <td>STA</td>
            <td>16.00</td>
            <td>21.50</td>
        </tr>
        <tr>
            <td>Standard Concession</td>
            <td>STP</td>
            <td>14.50</td>
            <td>19.00</td>
        </tr>
        <tr>
            <td>Standard Child</td>
            <td>STC</td>
            <td>13.00</td>
            <td>17.50</td>
        </tr>
        <tr>
            <td>First Class Adult</td>
            <td>FCA</td>
            <td>25.00</td>
            <td>31.00</td>
        </tr>
        <tr>
            <td>First Class Concession</td>
            <td>FCP</td>
            <td>23.50</td>
            <td>28.00</td>
        </tr>
        <tr>
            <td>First Class Child</td>
            <td>FCC</td>
            <td>22.00</td>
            <td>25.00</td>
        </tr>
      </table>
      <img src='../../media/Profern-Standard-Twin.png' alt='Profern Standard Twin'/>
      <img src='../../media/Profern-Verona-Twin.png' alt='Profern Verona Twin'/>
      </article>
      <br>
      <article id='NowShowing'>
      <p>Blah Blah Blah</p>
      </article>
    </main>
    <br><br>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Email: LunardoCinema@gmail.com, Phone: 555 555 555, Address: 2 Smith Road, Smithville.  Jay Meredith, S3951987, <a href=https://github.com/Jay-J-Williams/wp>GitHub Link</a>. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
