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
        <img src='https://www.classification.gov.au/sites/default/files/styles/featured_image/public/2019-08/classification-m-square.png?itok=e3fazVbS' alt='M Rating Logo'/>
        <img src='https://www.classification.gov.au/sites/default/files/styles/featured_image/public/2019-08/classification-m-square.png?itok=e3fazVbS' alt='M Rating Logo'/>
        <br>
        <span class='Posters'>
            <span class='AvatarFlip'>
                <span class='AvatarInner'>
                    <span class='AvatarFront'>
                        <img src='https://sportshub.cbsistatic.com/i/2022/11/21/4d1fe194-2496-4923-af07-11f47ca498bf/avatar-the-way-of-water-character-posters-1.jpg?auto=webp&width=608&height=900&crop=0.676:1,smart' alt='Avatar 2 Poster'/>
                    </span>
                    <span class='AvatarBack'>
                        <h1>Avatar: The Way of Water</h1>
                        <p>Jake Sully and Ney'tiri have formed a family and are doing everything to stay together. However, they must leave their home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a difficult war against the humans.</p>
                        <p>Book Now Example</p>
                    </span>
                </span>
            </span>
            <span class='WeirdFlip'>
                <span class='WeirdInner'>
                    <span class='WeirdFront'>
                        <img src='https://m.media-amazon.com/images/M/MV5BOWRiNmI1OTItYjc0Zi00YTYwLWI4OTEtMmE0YTNlODJkOTQwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_FMjpg_UX1000_.jpg' alt='Weird Poster'/>
                    </span>
                    <span class='WeirdBack'>
                        <h1>Weird: The Al Yankovic Story</h1>
                        <p>The unexaggerated true story about the greatest musician of our time. From a conventional upbringing where playing the accordion was a sin, "Weird Al" Yankovic rebels and makes his dream of changing the words to world-renowned songs come true. An instant success and sex symbol, Al lives an excessive lifestyle and pursues an infamous romance that nearly destroys him.</p>
                        <p>Book Now Example</p>
                    </span>
                </span>
            </span>
            <br>
            <span class='PussInBootsFlip'>
                <span class='PussInBootsInner'>
                    <span class='PussInBootsFront'>
                        <img src='https://preview.redd.it/c4s42j0ykjc91.jpg?width=640&crop=smart&auto=webp&s=8129d59e62fbd6e0584626d66d2e052fb9b2ea01' alt='Puss in Boots Poster'/>
                    </span>
                    <span class='PussInBootsBack'>
                        <h1>Puss in Boots: The Last Wish</h1>
                        <p>Puss in Boots discovers that his passion for adventure has taken its toll: he has burnt through eight of his nine lives. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine lives.</p>
                        <p>Book Now Example</p>
                    </span>
                </span>
            </span>
            <span class='MargreteFlip'>
                <span class='MargreteInner'>
                    <span class='MargreteFront'>
                        <img src='https://m.media-amazon.com/images/M/MV5BYmRiYjZiYzYtYzNkYy00N2MzLWJmZmItMTZjOGIyOGM5ZWViXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_.jpg' alt='Margrete Poster'/>
                    </span>
                    <span class='MargreteBack'>
                        <h1>Margrete: Queen of the North</h1>
                            <p>The year is 1402, and a woman is at the head of a new Nordic empire. Margarete I has united Denmark, Norway and Sweden in a union that she rules single-handedly through her adopted son, King Erik. However, a conspiracy is afoot.</p>
                            <p>Book Now Example</p>
                    </span>
                </span>
            </span>
        </span>
        <br>
        <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Australian_Classification_Parental_Guidance_%28PG%29.svg/1200px-Australian_Classification_Parental_Guidance_%28PG%29.svg.png' alt='PG Rating Logo'/>
        <img src='https://www.classification.gov.au/sites/default/files/styles/featured_image/public/2019-08/classification-ma15-square.png?itok=EGe6NmpV' alt='MA Rating Logo'/>
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
