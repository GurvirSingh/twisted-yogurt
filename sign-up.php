<?php 
include 'components.php';
include("dbconn.inc.php");
error_reporting(1);
// session_start();

$missing = array();
$valid = "false";
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['psw'];
$modalBody = "";
$conn = dbConnect();

if(array_key_exists('signin',$_POST))
{
  $expected = array("firstName", "lastName", "email", "psw");
  $required = array("firstName", "lastName", "email", "psw");
  $outputLabel = array("first name", "last name", "email", "password");

  foreach($expected as $index => $field)
  {
    $userInput = $_POST[$field];

    if(!is_array($userInput))
      $userInput = trim($userInput);

    if(in_array($field, $required) && empty($userInput))
      array_push($missing, $outputLabel[$index]);
    else {
      ${$field} = $userInput;
    }
  }

  if(empty($missing))
  {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $modalTitle = "<h2>Invalid Info!</h2>";
      $modalBody = "<p>Please enter a valid email. It can not start with a special character or a number and must have an @ sign included. </p>
                    ";
    }
    if(strlen($password) < 7)
    {
      $modalBody .= "<p>Please enter a valid password. It must be at least 7 characters.</p>";
    }
    else{
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $stmt = $conn->stmt_init();

      $sql = "SELECT * FROM Accounts WHERE email = ?";

      	$emailValid = 0;

        if ($stmt->prepare($sql)){
					$stmt->bind_param('s', $email);
					$stmt->execute();
					$stmt->store_result();
					if($stmt->num_rows !== 0){
						$emailValid = 1;
					}
				}
        if($emailValid === 0)
        {
          $sql = "INSERT INTO `Accounts`(`firstName`, `lastName`, `email`, `password`) VALUES (?, ?, ?, ?)";
          if($stmt->prepare($sql)){
						$stmt->bind_param('ssss',$firstName, $lastName, $email, $hashed_password);
						$stmt_prepared = 1;
					}
          if ($stmt_prepared == 1){
						if ($stmt->execute()){
              $valid="true";
              $_SESSION['access'] = true;
              $_SESSION['aid'] = $AID;
              setcookie("aid", $AID, time() + 14400);
              $_COOKIE['aid'] = $AID;
              setcookie("user", $email, time() + 14400);
              $_COOKIE['user'] = $email;
              setcookie("firstName", $firstName, time() + 14400);
              $_COOKIE['firstName'] = $firstName;
              setcookie("lastName", $lastName, time() + 14400);
              $_COOKIE['lastName'] = $lastName;
              setcookie("password", $hashed_password, time() + 14400);
              $_COOKIE['password'] = $hashed_password;
              $_SESSION['login'] = "true";

              setcookie("firstTime", "true", time() + 14400);
              $_COOKIE['firstTime'] = "true";
              $to=$email;
              $subject="Twisted Yogurt Account by $firstName $lastName Created";
              $header="From: twistedyogurt@gmail.com";
              $message="Welcome to Twisted Yogurt. Your account has been officially created. <a href='sign-in.php'>Sign in</a> and order your very own FroYo today!";
              $mailSent = mail($to,$subject,$message,$header);
              $toastBody = "Your account $email has been created! Visit <a href='account.php'>your accounts page</a>.";
              if ($mailSent) {
                $toastBody.="An email has been sent to you for confirmation.";
              } else {
                  $toastHeading = "Email did not send!";
                  $toastBody = "<p>Something went wrong with our email system. We will send you a confirmation when it is repaired. Thank you.";
                  header("Location: account.php");
              }
              header('Location: account.php');

						} else {
							//If the execution failed
							$modalTitle = "Database error"; //Set modal for error details.
							$modalBody = "The account was not added to the database.  Please contact the webmaster.";
						}
					} else{
            $modalTitle = "Query error"; //Modal details.
            $modalBody = "Database query failed.  Please contact the webmaster.";
          }
          $stmt->close();
          $conn->close();
        }
        else{
					$modalTitle = "Account Taken"; //Modal details if the email is taken.
					$modalBody = "An account with this email is already taken. Please use a different email.";
				}
    }



  }
  else
  {
    $missingFieldList = "";
    foreach($missing as $m)
    {
      if($m == end($missing))
      {
        if(sizeof($missing) > 1)
        {
          $missingFieldList.="and $m";
        }
        else {
          $missingFieldList.="$m";
        }
      }
      else{
        if(sizeof($missing) == 2)
        {
          $missingFieldList.="$m ";
        }
        else
        {
          $missingFieldList.="$m, ";
        }
      }
    }
    $modalTitle = "<h2>Fields Missing</h2>";
    $modalBody = "<p>Please fill in your $missingFieldList.</p>";

  }
}
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="description: goes here">
      <meta name="keywords" content="HTML, CSS, XML, JavaScript">
      <meta name="author" content="Twisted Yogurt">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Sign Up</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body  id="bootstrap-override">
    <header>
  		<?php print $nav ?>

  	</header>
<main>
  <div class='modal' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModal' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered' role='document'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h3 class='modal-title'><?=$modalTitle?></h3>
              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
            <div class='modal-body'>
              <p><?=$modalBody?></p>
            </div>
            <div class='modal-footer'>
              <button type='button' data-dismiss='modal'>Fill Out Fields</button>
            </div>
          </div>
        </div>
        </div>
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
  <div class="toast-header">
    <img src="images/froyo.png" class="rounded mr-2" alt="Twisted Yogurt Froyo Mascot">
    <strong class="mr-auto"><?=$toastHeading?></strong>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    <?=$toastBody?>
  </div>
</div>
  <div class="sign-up-container">
  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-sm-12 col-md-8 col-lg-6 col-no-padding ">
<div class="sign-in-form-bg ">
  <div class="sign-in-form">
  <form action="sign-up.php" method="post">
    <h1>Sign Up</h1>
    <p>Already a user? <a href="sign-in.php">Sign In</a></p>

    <label for="firstName">First Name</label>
    <input type="text" placeholder="Boba" name="firstName" value="<?php if(isset($firstName)&&!empty($missing)){echo htmlentities($firstName);} ?>"><br>
    <label for="lastName">Last Name</label>
    <input type="text" placeholder="Fett" name="lastName" value="<?php if(isset($lastName)&&!empty($missing)){echo htmlentities($lastName);} ?>"><br>
    <label for="email">Email</label>
    <input type="text" placeholder="Mandalorian569@yahoo.com" name="email" value="<?php if(isset($email)&&!empty($missing) && $valid=="true") {echo htmlentities($email);} ?>"><br>

    <label for="psw">Password</label>
    <input type="password" placeholder="************" name="psw" value=""><br>


      <button type="submit" name="signin">Sign Up</button>


  </form>

</div></div>

</div>

      </div></div>
    </div></div>

</main>
<footer class="container">
<?php print $footer?>
</footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <?php if(isset($_POST['signin']) && empty($missing)) echo $toastScript?>
    <?php if($valid=="false" && !empty($missing)) echo $modalScript;?>
  </body>
</html>
