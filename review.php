<?php include 'components.php';
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

    <p>Froyo: Vanilla<br>
Fruits: Strawberry, Blueberry<br>
Candy: M&M's, Chocolate Chips<br>
Nuts: Granola Chunks<br>
Syrup: Chocolate, Caramel
<br>
<a href="" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
</p>

  <div class="adding">
  <div class="amount-items">
    <div class="review-amount" onclick="increment()"><i class="fa fa-plus" aria-hidden="true"></i>
</div>
    <input id=reviewOrder type=number min=1 max=20>
<div class="review-amount" onclick="decrement()"><i class="fa fa-minus" aria-hidden="true"></i>
</div>
</div>
 <label>$11.99</label>
</div>
<br>

<div class="total">
<label>Total</label> <label>$11.99</label>
</div>
<div class="total">
<label>Tax</label><label>$2.59</label>
</div>
<div class="total">
<label>Subtotal</label><label>$13.67</label>
</div>
    <div class="total">
<a href="build.php" title="add more"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
<a href="build.php" title="add more to cart"><i class="fa fa-plus-circle" aria-hidden="true"> Add more to cart</i></a>

</div>
    <form action="thanks.php" method="POST" class="review-submit">
<button type="submit" name="submit" title="Submit">Next</button>
</form>
</div>
</div></div>
</div>
</div>
</div>

<div class="hidden-xs col-md-6 col-no-padding ">
<div class="checkout-pic"></div>
</div>
</div></div>



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
  </body>
</html>
