<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Booking Page</title>
    <?php 
        require_once 'tools.php';
    ?>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type='text/css' rel='stylesheet' href='style.css'>
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <div>Lunardo <img src='../../media/Lunardo-Logo.png' alt='Lunardo Cinema Logo'>Cinema</div>
    </header>

    <nav>
      <div>        
        <ul>
            <li><a href='index.php'>HOME</a>
        </ul>
      </div>
    </nav>

    <main>
        <article id='ACTInfo'>
            <iframe src="https://www.youtube.com/embed/d9MyW72ELq0" class='YTVideo' title="Avatar: The Way of Water | Official Trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h1>Synopsis</h1>
            <p>Jake Sully and Ney'tiri have formed a family and are doing everything to stay together. However, they must leave their home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a difficult war against the humans.</p>
            <h1>Director</h1>
            <p>James Cameron</p>
            <h1>Main Cast</h1>
            <p>Sam Worthington</p>
            <p>Zoe Saldana</p>
        </article>
        <article id='RMCInfo'>
            <iframe src="https://www.youtube.com/embed/Ols03gpTjW4" class='YTVideo' title="Weird: The Al Yankovic Story - Official Trailer (2022) Daniel Radcliffe, Quinta Brunson" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h1>Synopsis</h1>
            <p>The unexaggerated true story about the greatest musician of our time. From a conventional upbringing where playing the accordion was a sin, "Weird Al" Yankovic rebels and makes his dream of changing the words to world-renowned songs come true. An instant success and sex symbol, Al lives an excessive lifestyle and pursues an infamous romance that nearly destroys him.</p>
            <h1>Director</h1>
            <p>Eric Appel</p>
            <h1>Main Cast</h1>
            <p>Daniel Radcliffe</p>
            <p>Evan Rachel Wood</p>
            <p>"Weird Al" Yankovic</p>
        </article>
        <article id='FAMInfo'>
            <iframe src="https://www.youtube.com/embed/Y5zqweZAEKI" class='YTVideo' title="PUSS IN BOOTS: THE LAST WISH | Official Trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h1>Synopsis</h1>
            <p>Puss in Boots discovers that his passion for adventure has taken its toll: he has burnt through eight of his nine lives. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine lives.</p>
            <h1>Director</h1>
            <p>Joel Crawford</p>
            <h1>Main Cast</h1>
            <p>Antonio Banderas</p>
            <p>Salma Hayek</p>
        </article>
        <article id='AHFInfo'>
            <iframe src="https://www.youtube.com/embed/-7OCX98JgGk" class='YTVideo' title="Margrete Queen Of The North - Official Trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h1>Synopsis</h1>
            <p>The year is 1402, and a woman is at the head of a new Nordic empire. Margarete I has united Denmark, Norway and Sweden in a union that she rules single-handedly through her adopted son, King Erik. However, a conspiracy is afoot.</p>
            <h1>Director</h1>
            <p>Chalotte Sieling</p>
            <h1>Main Cast</h1>
            <p>Trine Dyrholm</p>
            <p>Morten Hee Anderson</p>
        </article>
        <form action='booking.php' method='post'>
            <br>
            <fieldset>
                <legend>Choose your Seat Group</legend>
                <select name='SeatGroup' id='seatgroup'>
                <option value='select' disabled>Select a Seat Group</option>
                <option value='seats[STA]' data-fullprice='21.50' data-discprice='16.00'>Standard Adult</option>
                <option value='seats[STP]' data-fullprice='19.00' data-discprice='14.50'>Standard Concession</option>
                <option value='seats[STC]' data-fullprice='17.50' data-discprice='13.00'>Standard Child</option>
                <option value='seats[FCA]' data-fullprice='31.00' data-discprice='25.00'>First Class Adult</option>
                <option value='seats[FCP]' data-fullprice='28.00' data-discprice='23.50'>First Class Concession</option>
                <option value='seats[FCC]' data-fullprice='25.00' data-discprice='22.00'>First Class Child</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Choose the Number of Seats</legend>
                <select name='NumberOfSeats' id='number_of_seats'>
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
            </fieldset>
            <br>
            <br>
            <fieldset>
                <legend>Choose Session</legend>
                <!-- ACT Sessions -->
                <span class='radio_btn' id='ACTSpanMon'>
                    <input type='radio' checked="checked" id='ACTMon' name='day' value='mon' data-pricing='fullprice'>
                    <label for='ACTMon' id='ACTMonLabel'>Monday 9pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanTue'>
                    <input type='radio' id='ACTTue' name='day' value='tue' data-pricing='discprice'>
                    <label for='ACTTue' id='ACTTueLabel'>Tuesday 9pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanWed'>
                    <input type='radio' id='ACTWed' name='day' value='wed' data-pricing='discprice'>
                    <label for='ACTWed' id='ACTWedLabel'>Wednesday 9pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanThu'>
                    <input type='radio' id='ACTThu' name='day' value='thu' data-pricing='fullprice'>
                    <label for='ACTThu' id='ACTThuLabel'>Thursday 9pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanFri'>
                    <input type='radio' id='ACTFri' name='day' value='fri' data-pricing='fullprice'>
                    <label for='ACTFri' id='ACTFriLabel'>Friday 9pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanSat'>
                    <input type='radio' id='ACTSat' name='day' value='sat' data-pricing='fullprice'>
                    <label for='ACTSat' id='ACTSatLabel'>Saturday 6pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanSun'>
                    <input type='radio' id='ACTSun' name='day' value='sun' data-pricing='fullprice'>
                    <label for='ACTSun' id='ACTSunLabel'>Sunday 6pm</label><br>
                </span>
                <!-- RMC Sessions -->
                <span class='radio_btn' id='RMCSpanWed'>
                    <input type='radio' id='RMCWed' name='day' value='wed' data-pricing='discprice'>
                    <label for='RMCWed' id='RMCWedLabel'>Wednesday 12pm</label><br>
                </span>
                <span class='radio_btn' id='RMCSpanThu'>
                    <input type='radio' id='RMCThu' name='day' value='thu' data-pricing='fullprice'>
                    <label for='RMCThu' id='RMCThuLabel'>Thursday 12pm</label><br>
                </span>
                <span class='radio_btn' id='RMCSpanFri'>
                    <input type='radio' id='RMCFri' name='day' value='fri' data-pricing='fullprice'>
                    <label for='RMCFri' id='RMCFriLabel'>Friday 12pm</label><br>
                </span>
                <span class='radio_btn' id='RMCSpanSat'>
                    <input type='radio' id='RMCSat' name='day' value='sat' data-pricing='fullprice'>
                    <label for='RMCSat' id='RMCSatLabel'>Saturday 3pm</label><br>
                </span>
                <span class='radio_btn' id='RMCSpanSun'>
                    <input type='radio' id='RMCSun' name='day' value='sun' data-pricing='fullprice'>
                    <label for='RMCSun' id='RMCSunLabel'>Sunday 3pm</label><br>
                </span>
                <!-- FAM Sessions -->
                 <span class='radio_btn' id='FAMSpanMon'>
                    <input type='radio' checked="checked" id='FAMMon' name='day' value='mon' data-pricing='fullprice'>
                    <label for='FAMMon' id='FAMMonLabel'>Monday 12pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanTue'>
                    <input type='radio' id='FAMTue' name='day' value='tue' data-pricing='discprice'>
                    <label for='FAMTue' id='FAMTueLabel'>Tuesday 12pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanWed'>
                    <input type='radio' id='FAMWed' name='day' value='wed' data-pricing='discprice'>
                    <label for='FAMWed' id='FAMWedLabel'>Wednesday 6pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanThu'>
                    <input type='radio' id='FAMThu' name='day' value='thu' data-pricing='fullprice'>
                    <label for='FAMThu' id='FAMThuLabel'>Thursday 6pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanFri'>
                    <input type='radio' id='FAMFri' name='day' value='fri' data-pricing='fullprice'>
                    <label for='FAMFri' id='FAMFriLabel'>Friday 6pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanSat'>
                    <input type='radio' id='FAMSat' name='day' value='sat' data-pricing='fullprice'>
                    <label for='FAMSat' id='FAMSatLabel'>Saturday 12pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanSun'>
                    <input type='radio' id='FAMSun' name='day' value='sun' data-pricing='fullprice'>
                    <label for='FAMSun' id='FAMSunLabel'>Sunday 12pm</label><br>
                </span>
                <!-- AHF Sessions -->
                <span class='radio_btn' id='AHFSpanMon'>
                    <input type='radio' checked="checked" id='AHFMon' name='day' value='mon' data-pricing='fullprice'>
                    <label for='AHFMon' id='AHFMonLabel'>Monday 6pm</label><br>
                </span>
                <span class='radio_btn' id='AHFSpanTue'>
                    <input type='radio' id='AHFTue' name='day' value='tue' data-pricing='discprice'>
                    <label for='AHFTue' id='AHFTueLabel'>Tuesday 6pm</label><br>
                </span>
                <span class='radio_btn' id='AHFSpanSat'>
                    <input type='radio' id='AHFSat' name='day' value='sat' data-pricing='fullprice'>
                    <label for='AHFSat' id='AHFSatLabel'>Saturday 10pm</label><br>
                </span>
                <span class='radio_btn' id='AHFSpanSun'>
                    <input type='radio' id='AHFSun' name='day' value='sun' data-pricing='fullprice'>
                    <label for='AHFSun' id='AHFSunLabel'>Sunday 10pm</label><br>
                </span>
            </fieldset>
            <br>
            <fieldset>
                <legend>Enter Contact Information</legend>
                <input type='text' name='user[name]' placeholder='Full Name' required>
                <br>
                <input type='email' name='user[email]' placeholder='Email' required>
                <br>
                <input type='number' name='user[mobile]' placeholder='Mobile Number' required>
                <br>
                <input type='submit' value="Submit">
            <br>
            </fieldset>
        </form>
    </main>
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Email: LunardoCinema@gmail.com, Phone: 555 555 555, Address: 2 Smith Road, Smithville.  Jay Meredith, S3951987, <a href=https://github.com/Jay-J-Williams/wp>GitHub Link</a>. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      <script src='script.js'></script>
    </footer>

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
