<?php include 'components.php';
$missing = array();

if(array_key_exists('signin',$_POST))
{
  $required = array("email");

  foreach($required as $field)
  {
    $userInput = $_POST[$field];

    if(!is_array($userInput))
      $userInput = trim($userInput);

    if(in_array($field, $required) && empty($userInput))
      array_push($missing, $field);
    else {
      ${$field} = $userInput;
    }
  }

  if(empty($missing))
  {
    $to=$email;
    $subject="Twisted Yogurt Password Reset for $email";
    $header="From: twistedyogurt@gmail.com";
    $message="Hi, you can reset your password using our password recovery tool. Thank you for being a great customer! Your friends at Twisted Yogurt.";
    $mailSent = mail($to,$subject,$message,$header);
    if ($mailSent) {

      $toastHeading = "Email sent!";
      $toastBody = "A password reset link has been sent to $email.";

    } else {
        $toastHeading = "Email did not send!";
        $toastBody = "<p>Something went wrong with our email system.  Please email us directly. Thank you.";
    }
  }
  else
  {
    $missingFieldList = implode(" and ",$missing);
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

      <title>Forgot Password</title>

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
  <div class="forgot-container">
  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-sm-12 col-md-8 col-lg-6 col-no-padding ">
<div class="sign-in-form-bg ">
  <div class="sign-in-form">
  <form action="" method="post">
    <h1>Forgot Password</h1>
    <p>Forgot your password? No problem! Just put in your email and we will send you an email with your password. </p>
    <hr>

    <label for="email">Email</label>
    <input type="text" placeholder="Mandalorian569@yahoo.com" name="email"><br>

      <button type="submit" name="signin">Send </button>

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
    <?php if(!empty($missing)) echo $modalScript;?>
  </body>
</html>
