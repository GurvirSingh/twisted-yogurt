<?php include 'components.php';
$missing = array();

if(array_key_exists('signin',$_POST))
{
  $expected = array("firstName", "lastName", "email", "message");
  $required = array("firstName", "lastName", "email", "message");
  $outputLabel = array("first name", "last name", "email", "message");

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
    $to="stealthtouchpandas@gmail.com";
    $subject="Twisted Yogurt Contact Submission From $firstName $lastName";
    $header="From: $email";
    $mailSent = mail($to,$subject,$message,$header);
    if ($mailSent) {
       echo "<div class='email-body' style='width:100%; height:700px; background-image:('...images/email-background.jpg;')";
      $toastHeading = "Submission sent!";
      $toastBody = "Thank you for submitting your message. We will be in touch within 2 business days.";
      echo "</div>";
    } else {
        $toastHeading = "Email did not send!";
        $toastBody = "<p>Something went wrong with our email system.  Please email us directly. Thank you.";
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

      <title>Contact Us</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body  id="bootstrap-override">
    <div class="wrapper">
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
  <div class="contact-hero">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

  <h1>Get In Touch</h1>
<div class="contact-info">
  <p><i class="fa fa-map-marker" aria-hidden="true"></i>
  123 Mockup St., Saginaw TX</p>
  <p> <i class="fa fa-phone" aria-hidden="true"></i>
(+1) 123 456 7890 </p>
<p><i class="fa fa-envelope" aria-hidden="true"></i>
 twistedyogurt@gmail.com</p>
  <div class="contact-socials">
  <a href='#'><i class='fa fa-facebook-f social-icon'></i></a>
  <a href='#'><i class='fa fa-twitter social-icon'></i></a>
  <a href='#'><i class='fa fa-instagram social-icon'></i></a>
</div></div>
</div>
<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 col-no-padding">
<div class="contact-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.7005963395904!2d-97.38465718485962!3d32.87964028094119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864ddf6dbec00001%3A0x44989d7e59d620b1!2sFrozen%20Yogurt%20Saginaw%2C%20TX!5e0!3m2!1sen!2sus!4v1606216693568!5m2!1sen!2sus"
   width="100%" height="750px" border-radius="50%" frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>
  </div>
</div>
</div>

  <div class="message-container">
  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-sm-12 col-md-8 col-lg-8 col-no-padding ">
<div class="sign-in-form-bg ">
  <div class="sign-in-form">
  <form action="" method="post">
    <h1>Message Us!</h1>
      <label for="firtsName">First Name</label>
<input type="text" placeholder="Boba" name="firstName" value="<?php if (isset($firstName)&&!empty($missing)) {echo htmlentities($firstName);} ?>"><br>
      <label for="lastName">Last Name</label>
      <input type="text" placeholder="Fett" name="lastName" value="<?php if (isset($lastName)&&!empty($missing)) {echo htmlentities($lastName);} ?>"><br>
    <label for="email">Email</label>
    <input type="text" placeholder="Mandalorian569@yahoo.com" name="email" value="<?php if (isset($email)&&!empty($missing)) {echo htmlentities($email);} ?>"><br>
    <label for="email">Message</label>
    <textarea name="message" placeholder="This is the way." name="message"><?php if (isset($message)&&!empty($missing)) {echo htmlentities(nl2br($message));} ?></textarea>
      <button type="submit" name="signin">Send </button>


  </form>
</div></div>

</div>

      </div></div>
    </div>

</main>
<footer class="container">
<?php print $footer?>
</footer>

</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <?php if(isset($_POST['signin']) && empty($missing)) echo $toastScript?>
    <?php if(!empty($missing)) echo $modalScript;?>
  </body>
</html>
