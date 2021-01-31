<?php 
session_start();
error_reporting(1);
include 'components.php';
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="Review your order to see if you are ready to check out or if you need more.">
      <meta name="keywords" content="HTML, CSS, XML, JavaScript">
      <meta name="author" content="Twisted Yogurt">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Review Your Order</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body  id="bootstrap-override">
    <header>
  		<?php print $nav ?>

  	</header>
<main>

  <div class="container review-cont">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="row justify-content-md-center">
        <div class="col-sm-10 col-md-12 col-lg-10 ">
        <div class="container">
          <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 ">
      <h1>Review Order</h1>
</div>
</div>
<div class="row">
 
  <div class="col-xs-12 col-md-12 col-lg-12">

  <?php 
// submit if next is clicked
if(isset($_POST['submit_boba'])){

  $size = $_SESSION['size'];
  $flavor = $_SESSION['flavor'];
  $jellie = $_SESSION['jellie'];

  echo "SIZE: " . $size . "<br/>";
  echo "FLAVOR: " .$flavor . "<br/>";
  echo "JELLIE: " .$jellie . "<br/>";

  // get User Name
  include("dbconn.inc.php");
    $conn = dbConnect();

    $username = $_SESSION['user'];
    $sql = "SELECT `AID` FROM `accounts` WHERE email = '$username' ";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $usedID = $row["AID"];
        }
    }
    // var_dump($_SESSION);


    date_default_timezone_set("America/Chicago");
    $time = date("h:i:sa");
  
  // Insert data to Database
  $sql="INSERT INTO `ShopOrder`(`product`,`size`, `flavor`, `jellie`, `customerID`, `orderTime`) VALUES('Boba','$size','$flavor','$jellie', $usedID, '$time')";

  if ($conn->query($sql) === TRUE) {
  echo "Entered successfully";
  unset($_SESSION['size']);
  unset($_SESSION['flavor']);
  unset($_SESSION['jellie']);
  // redirect to thanks page
  header('Location:thanks.php');
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
} else {

    $size = $_POST['radio-size'];
    $flavor = $_POST['radio-flavor'];
    $jellie = $_POST['radio-jellie'];

    $_SESSION['size'] = $size;
    $_SESSION['flavor'] = $flavor;
    $_SESSION['jellie'] = $jellie;

    // var_dump($_SESSION);

    echo "SIZE: " . $size . "<br/>";
    echo "FLAVOR: " .$flavor . "<br/>";
    echo "JELLIE: " .$jellie . "<br/>";

}
?>



<br>
<a href="" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
</p>

  <div class="adding">
  <div class="amount-items">
    <div class="review-amount" onclick="increment()"><i class="fa fa-plus" aria-hidden="true"></i>
</div>
    <input id='reviewOrder' type=number min=1 max=20 value="1">
<div class="review-amount" onclick="decrement()"><i class="fa fa-minus" aria-hidden="true"></i>
</div>
</div>
 <label>$11.99</label>
</div>
<br>

<div class="total">
<label>Total</label> <label id="total">11.99</label>
</div>
<div class="total">
<label>Tax</label> <label id="tax">2.59</label>
</div>
<div class="total">
<label>Subtotal</label> <label id="subtotal">13.67</label>
</div>
    <div class="total">
<a href="build.php" title="add more"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
<a href="build.php" title="add more to cart"><i class="fa fa-plus-circle" aria-hidden="true"> Add more to cart</i></a>

</div>
    <form action="boba_process.php" method="POST" class="review-submit">
<button type="submit" name="submit_boba" title="Submit">Next</button>
</form>
</div>
</div></div>
</div>
</div>
</div>

<script>
function runMe() {
    console.log("I RAn");
  
}
</script>

<div class="hidden-xs col-md-6 col-no-padding ">
<div class="checkout-pic"></div>
</div>
</div></div>



</main>
<footer class="container">
<?php print $footer?>
</footer>


<script>
function precise(x) {
  return Number.parseFloat(x).toPrecision(4);
}

   function increment() {
      document.getElementById('reviewOrder').stepUp();
      let mul = document.getElementById('reviewOrder').value;
      let total = 11.99;
      let tax = 2.59;
      let st = 13.67;

      total = precise(total * mul);
      tax = precise(tax * mul);
      st = precise(st * mul);

      document.querySelector('#total').textContent = total;
      document.querySelector('#tax').textContent = tax;
      document.querySelector('#subtotal').textContent = st;
   }
   function decrement() {
       
      let mul = document.getElementById('reviewOrder').value;
      if(mul == 1){ return;}
      let total = document.querySelector('#total').textContent;
      let tax = document.querySelector('#tax').textContent;
      let st = document.querySelector('#subtotal').textContent;

    //   console.log(total);
      total = precise(total - 11.99);
      tax = precise(tax - 2.59);
      st = precise(st - 13.67);

      document.querySelector('#total').textContent = total;
      document.querySelector('#tax').textContent = tax;
      document.querySelector('#subtotal').textContent = st;

      document.getElementById('reviewOrder').stepDown();
   }
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
