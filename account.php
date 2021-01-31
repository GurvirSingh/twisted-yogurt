<?php include 'components.php';
include 'access.php';
$missing = array();


if(array_key_exists('signin',$_POST))
{
  $expected = array("firstName", "lastName", "email");
  $required = array("firstName", "lastName", "email");
  $outputLabel = array("first name", "last name", "email");

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

if(!empty($missing))
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

      <title>Your Account</title>

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
  <?php
  function cookieCheck()
  {
    if(isset($_COOKIE['user']))
      return $_COOKIE['user'];
    else {
      return;
    }
  }
  if(isset($_COOKIE['firstTime']))
  {
    $toastHeading = "Welcome!";
    $toastBody = "Welcome to Twisted Yogurt, " . cookieCheck()."! We're happy to have you.";
    setcookie("firstTime", "", time() - 3600);
		$_COOKIE['firstTime'] = "";
  }
  else {
    $toastHeading = "Welcome back!";
    $toastBody = "Welcome back to Twisted Yogurt, " . cookieCheck()."! We're happy to have you.";
  }

  ?>
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
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
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">

  <h1>Account</h1>
<div class="account-info">
  <form action="" method="post">
    <label for="firstName">First Name</label>
    <input type="text" placeholder="Boba" name="firstName" value="<?php if (isset($firstName)&&!empty($missing)) {echo htmlentities($firstName);} ?>"><br>
    <label for="lastName">Last Name</label>
    <input type="text" placeholder="Fett" name="lastName" value="<?php if (isset($lastName)&&!empty($missing)) {echo htmlentities($lastName);} ?>"><br>
    <label for="email">Email</label>
    <input type="text" placeholder="Mandalorian569@yahoo.com" name="email" value="<?php if (isset($email)&&!empty($missing)) {echo htmlentities($email);} ?>"><br>

      <button type="submit" name="signin">Sign Up</button>

  </form>
</div></div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 col-no-padding">
<div class="account-pic">

</div></div>
</div>
</div></div>
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-12">
<div class="community-recipes">
  <h2>Recent Orders</h2>
<?php print $recentOrders  ?>
</div>
</div>
</div>
</div>

</main>
<footer class="container">
<?php print $footer?>
</footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <?php if(empty($missing)) echo $toastScript?>
    <?php if(!empty($missing)) echo $modalScript;?>
  </body>
</html>
