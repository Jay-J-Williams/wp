<?php 
	require_once 'tools.php';
    createHeadAndHeader();
    receiveBookings();
?>

    <nav>
      <div>
        <ul>
            <li><a href='#AboutUs' id='AboutUsLink' onclick='LinkColorChange("#AboutUs")'>ABOUT US</a>
            <li><a href='#SeatsAndPrices' id='SeatsAndPricesLink' onclick='LinkColorChange("#SeatsAndPrices")'>SEATS AND PRICES</a>
            <li><a href='#NowShowing' id='NowShowingLink' onclick='LinkColorChange("#NowShowing")'>NOW SHOWING</a>
        </ul>
      </div>
    </nav>

    <main>
      <article id='AboutUs'>
        <h2>About Us</h2>
        <br>
        <img src='../../media/Lunardo-Logo.png' alt='Lunardo Cinema Logo'>
        <p>We are based in Smithville, and we have recently reopened for business. With this reopening, comes many renovations and new technologies.
        There are new seats for standard and first class ticket holders, and brand new projection and sound systems with 3D Dolby Vision projection
        and Dolby Atmos sound. To learn about our new Dolby technologies, head to <a href='https://professional.dolby.com/cinema/'>Dolby Cinema</a>
        and <a href='https://professional.dolby.com/cinema/dolby-atmos'>Dolby Atmos</a>.
        </p>
      </article>
      <br>
      <article id='SeatsAndPrices'>
      <h2>Seats and Prices</h2>
      <br>
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
      <div class='flex-container'>
          <div>
             <img src='../../media/Profern-Standard-Twin.png' alt='Profern Standard Twin'>
          </div>
          <div>
             <img src='../../media/Profern-Verona-Twin.png' alt='Profern Verona Twin'>
          </div>
      </div>
      <div class='flex-container'>
          <div>
            <p>Standard Seat</p>
          </div>
          <div>
            <p>First Class Seat</p>
          </div>
      </div>
      </article>
      <br>
      <article id='NowShowing'>
        <h2>Now Showing</h2>
        <br>
        <div class='Posters'>
            <div class='AvatarFlip'>
                <div class='AvatarInner'>
                    <div class='AvatarFront'>
                        <button class='FlipButtonAvatar'></button>
                        <img src='https://sportshub.cbsistatic.com/i/2022/11/21/4d1fe194-2496-4923-af07-11f47ca498bf/avatar-the-way-of-water-character-posters-1.jpg?auto=webp&width=608&height=900&crop=0.676:1,smart' alt='Avatar 2 Poster'>
                        <img id='AvatarRating' src='https://www.classification.gov.au/sites/default/files/styles/featured_image/public/2019-08/classification-m-square.png?itok=e3fazVbS' alt='M Rating Logo'>
                    </div>
                    <div class='AvatarBack'>
                        <h1>Avatar: The Way of Water</h1>
                        <p>Jake Sully and Ney'tiri have formed a family and are doing everything to stay together. However, they must leave their home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a difficult war against the humans.</p>
                        <br>
                        <a href='booking.php?movie=ACT' class='BookNow' >Book Now
                            <form class='MovieCode' action='booking.php' method='get'>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
            <div class='WeirdFlip'>
                <div class='WeirdInner'>
                    <div class='WeirdFront'>
                        <button class='FlipButtonWeird'></button>
                        <img src='https://m.media-amazon.com/images/M/MV5BOWRiNmI1OTItYjc0Zi00YTYwLWI4OTEtMmE0YTNlODJkOTQwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_FMjpg_UX1000_.jpg' alt='Weird Poster'>
                        <img id='WeirdRating' src='https://www.classification.gov.au/sites/default/files/styles/featured_image/public/2019-08/classification-m-square.png?itok=e3fazVbS' alt='M Rating Logo'>
                    </div>
                    <div class='WeirdBack'>
                        <h1>Weird: The Al Yankovic Story</h1>
                        <p>The unexaggerated true story about the greatest musician of our time. From a conventional upbringing where playing the accordion was a sin, "Weird Al" Yankovic rebels and makes his dream of changing the words to world-renowned songs come true. An instant success and sex symbol, Al lives an excessive lifestyle and pursues an infamous romance that nearly destroys him.</p>
                        <br>
                        <a href='booking.php?movie=RMC' class='BookNow' >Book Now
                            <form class='MovieCode' action='booking.php' method='get'>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
            <div class='PussInBootsFlip'>
                <div class='PussInBootsInner'>
                    <div class='PussInBootsFront'>
                        <button class='FlipButtonPussInBoots'></button>
                        <img src='https://preview.redd.it/c4s42j0ykjc91.jpg?width=640&crop=smart&auto=webp&s=8129d59e62fbd6e0584626d66d2e052fb9b2ea01' alt='Puss in Boots Poster'>
                        <img id='PussInBootsRating' src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Australian_Classification_Parental_Guidance_%28PG%29.svg/1200px-Australian_Classification_Parental_Guidance_%28PG%29.svg.png' alt='PG Rating Logo'>
                    </div>
                    <div class='PussInBootsBack'>
                        <h1>Puss in Boots: The Last Wish</h1>
                        <p>Puss in Boots discovers that his passion for adventure has taken its toll: he has burnt through eight of his nine lives. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine lives.</p>
                        <br>
                        <a href='booking.php?movie=FAM' class='BookNow'>Book Now
                            <form class='MovieCode' action='booking.php' method='get'>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
            <div class='MargreteFlip'>
                <div class='MargreteInner'>
                    <div class='MargreteFront'>
                        <button class='FlipButtonMargrete'></button>
                        <img src='https://m.media-amazon.com/images/M/MV5BYmRiYjZiYzYtYzNkYy00N2MzLWJmZmItMTZjOGIyOGM5ZWViXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_.jpg' alt='Margrete Poster'>
                        <img id='MargreteRating' src='https://www.classification.gov.au/sites/default/files/styles/featured_image/public/2019-08/classification-ma15-square.png?itok=EGe6NmpV' alt='MA Rating Logo'>
                    </div>
                    <div class='MargreteBack'>
                        <h1>Margrete: Queen of the North</h1>
                            <p>The year is 1402, and a woman is at the head of a new Nordic empire. Margarete I has united Denmark, Norway and Sweden in a union that she rules single-handedly through her adopted son, King Erik. However, a conspiracy is afoot.</p>
                            <br>
                            <a href='booking.php?movie=AHF' class='BookNow' >Book Now
                                <form class='MovieCode' action='booking.php' method='get'>
                                </form>
                            </a>
                    </div>
                </div>
            </div>
        </div>
      </article>
    </main>
    <br><br>

    <?php
        createFooter();
    ?>

    <footer>
        <h3>Debug Area</h3>
        <?php 
            try {
                debugModule();
            } catch(Error $e) {
                echo "tools.php is unavailable";
            }
        ?>
    </footer>

  </body>
</html>
