<?php include 'components.php';
include("dbconn.inc.php");
if(!isset($_SESSION))
{
  session_start();
}
$_SESSION['access'] = "";
$email = "";
$password = "";
$valid = "false";
$modalBody = "";
$error = false;
$conn = dbConnect();

if (isset($_GET['signout'])){
  $_SESSION['access'] = false;
  $_SESSION['login'] = false;
  $_SESSION = array();
  session_destroy();
  header('Location: index.php');
}



if(isset($_POST['email']) && isset($_POST['psw']) && !empty($_POST['email']) && !empty($_POST['psw']))
{

  $username = $_POST['email'];
  
  $_SESSION['user'] = $username;

  $password = $_POST['psw'];
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

  $sql = "SELECT `password` FROM `accounts` WHERE email = '$username' ";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "Invalid info!1";
    while($row = $result->fetch_assoc()) {
      echo "Invalid info!222";
      $check_pass = $row["password"];
    }
    if (password_verify($password, $check_pass)) {
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
        // var_dump($_SESSION);
        header('Location: account.php');
    } else {
      echo "inside else!";
      $modalTitle = "<h2>Missing Info!</h2>";
      $modalBody = "<p>Please enter a valid email and password. Thank you!</p>
                  ";
                  $error = true;
    }
  } else{
    $modalTitle = "<h2>Missing Info!</h2>";
    $modalBody = "<p>Please enter a valid email and password. Thank you!</p>
                  ";
                  $error = true;
    }
    $stmt->close();
    $conn->close();
  }
  else if (isset($_POST['email']) || isset($_POST['psw'])){ //If only one field is filled out
    $modalTitle = "<h2>Missing Info!</h2>";
    $modalBody = "<p>Please enter a valid email and password. Thank you!</p>
                  ";
                  $error = true;

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

      <title>Sign In</title>

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
  <div class="sign-in-container">
  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-sm-12 col-md-8 col-lg-6 col-no-padding ">
<div class="sign-in-form-bg ">
  <div class="sign-in-form">
  <form action="sign-in.php" method="POST">
      <h1>Sign In</h1>
<p>New user? <a href="sign-up.php">Create an account</a></p>


      <label for="email">Email</label>
      <input type="text" placeholder="Enter Email" name="email" value=""><br>
      <label for="psw">Password</label>
      <input type="password" placeholder="Enter Password" name="psw" value=""><br>



      <button type="submit" title="Sign In" name="signin">Sign In</button>
  <p><span class="forgot"><a href="forgot.php" title="Forgot Password?">Forgot Password?</a><span></p>
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
<?php if($valid == "false" && !empty($missing) || $error == true) echo $modalScript;?>

  </body>
</html>
