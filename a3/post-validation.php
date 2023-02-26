<?php

error_reporting( E_ERROR | E_WARNING | E_PARSE );

/* Call this function in the booking page like so:
   $postErrors = validateBooking();
   If the array is empty, then no errors were generated
*/
function validateBooking() {
  $usernameRegex = "^[-A-Za-z '.]{1,64}^";
  $mobileRegex = "^61[0-9]{2}[0-9]{6}^";
  $errors = []; // new empty array to return multiple error messages
  if (isset($_POST['user']['name'])) {
    $username = trim($_POST['user']['name']);
    if ( $username == '') {
        $errors['user']['name'] = "Name can't be blank";
    } else {
        if ( strlen($username) > 64) {
            $errors['user']['name'] = "Name can't be longer than 64 characters";
        } else {
            if (!preg_match($usernameRegex, $username)) {
                $errors['user']['name'] = "Name can't contain numbers or special characters";
            }
        }
    }
    // more advanced name checks here with better error message
  }
  if (isset($_POST['user']['mobile'])) {
      $mobile = trim($_POST['user']['mobile']);
      if ($mobile == '') {
          $errors['user']['mobile'] = "Mobile can't be blank'";
      }
      else {
          if (!preg_match($mobileRegex, $mobile)) {
              $errors['user']['mobile'] = "Mobile must be in the Australian format e.g. 6155222000";
          }
      }
  }
  if (isset($_POST['user']['email'])) {
     $email = trim($_POST['user']['email']);
     if ($email == '') {
        $errors['user']['email'] = "Email can't be blank";
     } else {
         $email = filter_var($email, FILTER_SANITIZE_EMAIL);
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $errors['user']['email'] = "Email must be valid";
         }
        // more advanced email checks here with better error message
     }
        // ... repeat for all other form field checks
        // empty array -> no errors; populated array -> errors. 
  }
  if (isset($_POST['movie'])) {
      $movieArr = array("ACT", "RMC", "FAM", "AHF");
      $movieCodePassed = false;
      for ($i = 0; $i < count($movieArr); $i++) {
          if ($_POST['movie'] == $movieArr[$i]) {
              $movieCodePassed = true;
          }
      }
      if (!$movieCodePassed) {
          header('location: index.php');
          exit();
      }
      if (isset($_POST['day'])) {
          if ($_POST['movie'] == $movieArr[0] || $_POST['movie'] == $movieArr[2]) {
              $dayArr = array("mon", "tue", "wed", "thu", "fri", "sat", "sun");
          } elseif ($_POST['movie'] == $movieArr[1]) {
              $dayArr = array("wed", "thu", "fri", "sat", "sun");
          } elseif ($_POST['movie'] == $movieArr[3]) {
              $dayArr = array("mon", "tue", "sat", "sun");
          }
          $dayPassed = false;
          for ($i = 0; $i < count($movieArr); $i++) {
              if ($_POST['day'] == $dayArr[$i]) {
                  $dayPassed = true;
              }
          }
          if (!$dayPassed) {
          header('location: index.php');
              exit();
          }
      }
  }
  if (isset($_POST['SeatGroup'])) {
      $seatGroupArr = array("seats[STA]", "seats[STP]", "seats[STC]", "seats[FCA]", "seats[FCP]", "seats[FCC]");
      $seatGroupPassed = false;
      for ($i = 0; $i < count($seatGroupArr); $i++) {
          if ($_POST['SeatGroup'] == $seatGroupArr[$i]) {
              $seatGroupPassed = true;
          }
      }
      if (!$seatGroupPassed) {
          header('location: index.php');
          exit();
      }
  }
  if (isset($_POST['NumberOfSeats'])) {
      if ($_POST['NumberOfSeats'] == '') {
          header('location: index.php');
          exit();
      } else {
          $numberOfSeats = $_POST['NumberOfSeats'];
          intval($numberOfSeats);
          if ($numberOfSeats < 0 || $numberOfSeats > 10) {
              header('location: index.php');
              exit();
          }
      }
  }
  if (isset($_POST['user']) && count($_POST['user']) == 0) {
      unset($_POST['user']);
  }
  if (count($errors) == 0 && count($_POST) > 0) {
          $_SESSION['Booking'] = $_POST;
          header('location: receipt.php');
  }
  return $errors;
}

function preFillText($type) {
    if (isset($_POST['user'][$type])) {
        $value = $_POST['user'][$type];
        echo "$value";
    }
}

function preFillRadio($day) {
    if (isset($_POST['day']) && $_POST['day'] == $day) {
        echo "checked = 'checked'";
    } elseif (isset($_GET['movie'])) {
        if ($_GET['movie'] == 'RMC') {
            if ($day == 'wed') {
                echo "checked = 'checked'";
                $_POST['day'] = 'wed';
            }
        } else {
            if ($day == 'mon') {
                echo "checked = 'checked'";
                $_POST['day'] = 'mon';
            }
        }
    }
}

function preFillSelect($selectname, $value) {
    if (isset($_POST[$selectname]) && $_POST[$selectname] == $value) {
        echo "selected = 'selected'";
    }
}

?>