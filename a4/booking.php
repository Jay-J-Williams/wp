<?php 
	require_once 'tools.php';
    require_once 'post-validation.php';
    createHeadAndHeader();
    $postErrors = validateBooking();
?>

    <nav>
      <div>        
        <ul>
            <li><a href='index.php'>HOME</a>
        </ul>
      </div>
    </nav>

    <main>
        <?php
            setMovieInfoSection();
        ?>
        <form action='' method='post' id='BookingForm'>
            <input type='hidden' name='movie' value=<?php $code = $_GET['movie']; echo "'$code'"; ?>>
            <br>
            <fieldset>
                <legend>Choose your Seat Group</legend>
                <select name='SeatGroup' id='seatgroup' onclick='CalculateTotal()'>
                <option value='select' disabled>Select a Seat Group</option>
                <option value='seats[STA]' data-fullprice='21.50' data-discprice='16.00'>Standard Adult</option>
                <option value='seats[STP]' <?php preFillSelect('SeatGroup', 'seats[STP]') ?> data-fullprice='19.00' data-discprice='14.50'>Standard Concession</option>
                <option value='seats[STC]' <?php preFillSelect('SeatGroup', 'seats[STC]') ?> data-fullprice='17.50' data-discprice='13.00'>Standard Child</option>
                <option value='seats[FCA]' <?php preFillSelect('SeatGroup', 'seats[FCA]') ?> data-fullprice='31.00' data-discprice='25.00'>First Class Adult</option>
                <option value='seats[FCP]' <?php preFillSelect('SeatGroup', 'seats[FCP]') ?> data-fullprice='28.00' data-discprice='23.50'>First Class Concession</option>
                <option value='seats[FCC]' <?php preFillSelect('SeatGroup', 'seats[FCC]') ?> data-fullprice='25.00' data-discprice='22.00'>First Class Child</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Choose the Number of Seats</legend>
                <select name='NumberOfSeats' id='number_of_seats' onclick='CalculateTotal()'>
                <option value='select' disabled>Select Number of Seats</option>
                <option value='1'>1</option>
                <option value='2' <?php preFillSelect('NumberOfSeats', '2') ?>>2</option>
                <option value='3' <?php preFillSelect('NumberOfSeats', '3') ?>>3</option>
                <option value='4' <?php preFillSelect('NumberOfSeats', '4') ?>>4</option>
                <option value='5' <?php preFillSelect('NumberOfSeats', '5') ?>>5</option>
                <option value='6' <?php preFillSelect('NumberOfSeats', '6') ?>>6</option>
                <option value='7' <?php preFillSelect('NumberOfSeats', '7') ?>>7</option>
                <option value='8' <?php preFillSelect('NumberOfSeats', '8') ?>>8</option>
                <option value='9' <?php preFillSelect('NumberOfSeats', '9') ?>>9</option>
                <option value='10' <?php preFillSelect('NumberOfSeats', '10') ?>>10</option>
                </select>
            </fieldset>
            <br>
            <br>
            <fieldset>
                <legend>Choose Session</legend>
                <!-- ACT Sessions -->
                <span class='radio_btn' id='ACTSpanMon'>
                    <input type='radio' id='ACTMon' <?php preFillRadio('mon'); ?> name='day' value='mon' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='ACTMon' id='ACTMonLabel'>Monday 9pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanTue'>
                    <input type='radio' id='ACTTue' <?php preFillRadio('tue'); ?> name='day' value='tue' data-pricing='discprice' onclick='CalculateTotal()'>
                    <label for='ACTTue' id='ACTTueLabel'>Tuesday 9pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanWed'>
                    <input type='radio' id='ACTWed' <?php preFillRadio('wed'); ?> name='day' value='wed' data-pricing='discprice' onclick='CalculateTotal()'>
                    <label for='ACTWed' id='ACTWedLabel'>Wednesday 9pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanThu'>
                    <input type='radio' id='ACTThu' <?php preFillRadio('thu'); ?> name='day' value='thu' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='ACTThu' id='ACTThuLabel'>Thursday 9pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanFri'>
                    <input type='radio' id='ACTFri' <?php preFillRadio('fri'); ?> name='day' value='fri' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='ACTFri' id='ACTFriLabel'>Friday 9pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanSat'>
                    <input type='radio' id='ACTSat' <?php preFillRadio('sat'); ?> name='day' value='sat' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='ACTSat' id='ACTSatLabel'>Saturday 6pm</label><br>
                </span>
                <span class='radio_btn' id='ACTSpanSun'>
                    <input type='radio' id='ACTSun' <?php preFillRadio('sun'); ?> name='day' value='sun' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='ACTSun' id='ACTSunLabel'>Sunday 6pm</label><br>
                </span>
                <!-- RMC Sessions -->
                <span class='radio_btn' id='RMCSpanWed'>
                    <input type='radio' id='RMCWed' <?php preFillRadio('wed'); ?> name='day' value='wed' data-pricing='discprice' onclick='CalculateTotal()'>
                    <label for='RMCWed' id='RMCWedLabel'>Wednesday 12pm</label><br>
                </span>
                <span class='radio_btn' id='RMCSpanThu'>
                    <input type='radio' id='RMCThu' <?php preFillRadio('thu'); ?> name='day' value='thu' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='RMCThu' id='RMCThuLabel'>Thursday 12pm</label><br>
                </span>
                <span class='radio_btn' id='RMCSpanFri'>
                    <input type='radio' id='RMCFri' <?php preFillRadio('fri'); ?> name='day' value='fri' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='RMCFri' id='RMCFriLabel'>Friday 12pm</label><br>
                </span>
                <span class='radio_btn' id='RMCSpanSat'>
                    <input type='radio' id='RMCSat' <?php preFillRadio('sat'); ?> name='day' value='sat' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='RMCSat' id='RMCSatLabel'>Saturday 3pm</label><br>
                </span>
                <span class='radio_btn' id='RMCSpanSun'>
                    <input type='radio' id='RMCSun' <?php preFillRadio('sun'); ?> name='day' value='sun' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='RMCSun' id='RMCSunLabel'>Sunday 3pm</label><br>
                </span>
                <!-- FAM Sessions -->
                 <span class='radio_btn' id='FAMSpanMon'>
                    <input type='radio' id='FAMMon' <?php preFillRadio('mon'); ?> name='day' value='mon' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='FAMMon' id='FAMMonLabel'>Monday 12pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanTue'>
                    <input type='radio' id='FAMTue' <?php preFillRadio('tue'); ?> name='day' value='tue' data-pricing='discprice' onclick='CalculateTotal()'>
                    <label for='FAMTue' id='FAMTueLabel'>Tuesday 12pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanWed'>
                    <input type='radio' id='FAMWed' <?php preFillRadio('wed'); ?> name='day' value='wed' data-pricing='discprice' onclick='CalculateTotal()'>
                    <label for='FAMWed' id='FAMWedLabel'>Wednesday 6pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanThu'>
                    <input type='radio' id='FAMThu' <?php preFillRadio('thu'); ?> name='day' value='thu' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='FAMThu' id='FAMThuLabel'>Thursday 6pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanFri'>
                    <input type='radio' id='FAMFri' <?php preFillRadio('fri'); ?> name='day' value='fri' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='FAMFri' id='FAMFriLabel'>Friday 6pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanSat'>
                    <input type='radio' id='FAMSat' <?php preFillRadio('sat'); ?> name='day' value='sat' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='FAMSat' id='FAMSatLabel'>Saturday 12pm</label><br>
                </span>
                <span class='radio_btn' id='FAMSpanSun'>
                    <input type='radio' id='FAMSun' <?php preFillRadio('sun'); ?> name='day' value='sun' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='FAMSun' id='FAMSunLabel'>Sunday 12pm</label><br>
                </span>
                <!-- AHF Sessions -->
                <span class='radio_btn' id='AHFSpanMon'>
                    <input type='radio' id='AHFMon' <?php preFillRadio('mon'); ?> name='day' value='mon' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='AHFMon' id='AHFMonLabel'>Monday 6pm</label><br>
                </span>
                <span class='radio_btn' id='AHFSpanTue'>
                    <input type='radio' id='AHFTue' <?php preFillRadio('tue'); ?> name='day' value='tue' data-pricing='discprice' onclick='CalculateTotal()'>
                    <label for='AHFTue' id='AHFTueLabel'>Tuesday 6pm</label><br>
                </span>
                <span class='radio_btn' id='AHFSpanSat'>
                    <input type='radio' id='AHFSat' <?php preFillRadio('wed'); ?> name='day' value='sat' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='AHFSat' id='AHFSatLabel'>Saturday 10pm</label><br>
                </span>
                <span class='radio_btn' id='AHFSpanSun'>
                    <input type='radio' id='AHFSun' <?php preFillRadio('thu'); ?> name='day' value='sun' data-pricing='fullprice' onclick='CalculateTotal()'>
                    <label for='AHFSun' id='AHFSunLabel'>Sunday 10pm</label><br>
                </span>
            </fieldset>
            <br>
            <fieldset>
                <legend>Enter Contact Information</legend>
                <input id='name' type='text' name='user[name]' placeholder='Full Name' pattern="[A-Za-z\W+]{1,64}" value='<?php preFillText("name"); ?>' required>
                <p class='error name-error'> <?php if (isset($postErrors['user']['name'])) {
                $nameError = $postErrors['user']['name'];
                echo "$nameError";
                unset($postErrors['user']['name']); ?> <style>.name-error{display: block}</style> <?php } ?></p>
                <br>
                <input id='email' type='email' name='user[email]' placeholder='Email' value='<?php preFillText("email"); ?>' required>
                <p class='error email-error'> <?php if (isset($postErrors['user']['email'])) {
                $emailError = $postErrors['user']['email'];
                echo "$emailError";
                unset($postErrors['user']['email']); ?> <style>.email-error{display: block}</style> <?php } ?></p>
                <br>
                <input id='mobile' type='tel' name='user[mobile]' placeholder='Mobile Number' pattern="[0-9]{10}" value='<?php preFillText("mobile"); ?>' required>
                <p class='error mobile-error'> <?php if (isset($postErrors['user']['mobile'])) {
                $mobileError = $postErrors['user']['mobile'];
                echo "$mobileError";
                unset($postErrors['user']['mobile']); ?> <style>.mobile-error{display: block}</style> <?php } ?></p>
                <br>
                <span id='checkbox_span'>
                    <input type='checkbox' id='remember_me' onclick='ChangeCheckbox()'>
                    <label for='remember_me' id='checkbox_label'>Remember me</label>
                </span>
                <br>
                <input type='submit' value="Submit">
            <br>
            </fieldset>
            <p id='total_price'>Total Price = $</p>
        </form>
        
    </main>
    <?php
        createFooter();
        receiveBookings();
    ?>

    <footer>
        <h3>Debug Area</h3>
        <?php 
            /*try {*/
                debugModule();
                echo "<br><br>";
                echo "Error ";
                print_r($postErrors);/*
            } catch(Error $e) {
                echo "tools.php is unavailable";
            }*/
        ?>
    </footer>
    <script>CalculateTotal();</script>
  </body>
</html>
