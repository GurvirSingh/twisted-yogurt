<?php include 'components.php';
$missing = array();
$cardValid = "";
$cvvValid="";
$modalButton = "Fill Out Fields";
if(array_key_exists('signin',$_POST))
{
  $expected = array("name", "email", "card", "cvv", "expMonth", "expYear");
  $required = array("name", "email", "card", "cvv", "expMonth", "expYear");
  $outputLabel = array("name", "email", "card number", "CVV", "expiration month", "expiration year");

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
  $cardLength = strlen($card);
  $cvvLength = strlen($cvv);
  $cardErrMsg = "";
  $cvvErrMsg = "";
  if($cardLength >= 13 && $cardLength <= 16 && ($cvvLength == 3 || $cvvLength == 4))
  {
    $cardValid = "true";
    $cvvValid = "true";
    $to= $email;
    $subject="Payment Confirmation for $name";
    $header="From: twistedyogurt@gmail.com";
    $message = "Thank you for ordering from Twisted Yogurt. Your order is being processed and we will let you know when it's ready!";
    $mailSent = mail($to,$subject,$message,$header);
    if ($mailSent) {

      $toastHeading = "Payment Processed!";
      $toastBody = "Your order has been confirmed. Please check your email for your confirmation.";

    } else {
        $toastHeading = "Email did not send!";
        $toastBody = "<p>Something went wrong with our email system.  We will call you to confirm your order.";
    }
  }
  if($cvvLength != 3 && $cvvLength != 4){
    $cvvValid = "false";
    $cvvErrMsg = "Your cvv needs to be 3 or 4 digits.";
  }
  if($cardLength < 13 || $cardLength > 16)
  {
    $cardValid = "false";
    $cardErrMsg = "Your card number needs to be between 13 and 16 digits.";
  }

    $modalTitle = "Invalid credit card!";

    $modalBody = "You have entered an invalid credit card. $cardErrMsg $cvvErrMsg";

    $modalButton = "Fix Information";


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

function dropListChecked($fieldName,$v){
  global $missing;
  global $cvvValid;
  global $cardValid;
  if (isset($_POST[$fieldName])&&((!empty($missing)||$cardValid=='false'||$cvvValid=="false"))&& $_POST[$fieldName] == $v){
    $checked = "selected";
  } else {
    $checked = "";
  }
  echo $checked;
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

      <title>Checkout</title>

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
              <button type='button' data-dismiss='modal'><?=$modalButton?></button>
            </div>
          </div>
        </div>
        </div>
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="100000">
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

  <div class="container pay-cont">
        <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
            <h1>Payment Info</h1>
<div class="pay">
    <form action="" method="POST">
      <label for="name">Name*</label>
      <input type="text" placeholder="Boba" name="name" value="<?php if (isset($name)&&(!empty($missing)||$cardValid=='false'||$cvvValid=="false")) {echo htmlentities($name);} ?>"><br>
      <label for="email">Email*</label>
      <input type="text" placeholder="Mandalorian569@yahoo.com" name="email" value="<?php if (isset($email)&&(!empty($missing)||$cardValid=='false'||$cvvValid=="false")) {echo htmlentities($email);} ?>"><br>
      <label for="card">Card Number*</label>
      <input type="number" placeholder="555 5555 555" name="card" value="<?php if (isset($card)&&(!empty($missing)||$cardValid=='false'||$cvvValid=="false")) {echo htmlentities($card);} ?>"><br>
      <label for="cvv">CVV*</label>
      <input type="number" placeholder="555" name="cvv" value="<?php if (isset($cvv)&&(!empty($missing)||$cardValid=='false'||$cvvValid=="false")) {echo htmlentities($cvv);} ?>"><br>

        <label for="expMonth">Expiration Date*</label>
        <div class="exp-date">

      <select name="expMonth" id="month">
          <option value="">Month</option>
          <option value="0" <?php dropListChecked('expMonth','0') ?>>January</option>
          <option value="1" <?php dropListChecked('expMonth','1') ?>>February</option>
          <option value="2" <?php dropListChecked('expMonth','2') ?>>March</option>
          <option value="3" <?php dropListChecked('expMonth','3') ?>>April</option>
          <option value="4" <?php dropListChecked('expMonth','4') ?>>May</option>
          <option value="5" <?php dropListChecked('expMonth','5') ?>>June</option>
          <option value="6" <?php dropListChecked('expMonth','6') ?>>July</option>
          <option value="7" <?php dropListChecked('expMonth','7') ?>>August</option>
          <option value="8" <?php dropListChecked('expMonth','8') ?>>September</option>
          <option value="9" <?php dropListChecked('expMonth','9') ?>>October</option>
          <option value="10" <?php dropListChecked('expMonth','10') ?>>November</option>
          <option value="11" <?php dropListChecked('expMonth','0') ?>>December</option>
      </select>
      <select name="expYear" id="year">
          <option value="">Year</option>
          <option value="2025" <?php dropListChecked('expYear','2025') ?>>2025</option>
          <option value="2024" <?php dropListChecked('expYear','2024') ?>>2024</option>
          <option value="2023" <?php dropListChecked('expYear','2023') ?>>2023</option>
          <option value="2022" <?php dropListChecked('expYear','2022') ?>>2022</option>
          <option value="2021" <?php dropListChecked('expYear','2021') ?>>2021</option>
      </select>
    </div>
    <a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>   <button name="signin" type="submit">Submit</button>
    </form>

</div></div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8">
<div class="pay-pic"></div>
</div>
</div>
</div>


</main>
<footer class="container">
<?php print $footer?>
</footer>


<script>
   function increment() {
      document.getElementById('reviewOrder').stepUp();
   }
   function decrement() {
      document.getElementById('reviewOrder').stepDown();
   }
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <?php if(isset($_POST['signin']) && empty($missing) && $cardValid=="true" && $cvvValid=="true") echo $toastScript?>
    <?php if(!empty($missing) || $cardValid=="false" || $cvvValid=="false") echo $modalScript;?>
  </body>
</html>
