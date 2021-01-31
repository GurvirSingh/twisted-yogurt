<?php include 'components.php';
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="description: goes here">
      <meta name="keywords" content="HTML, CSS, XML, JavaScript">
      <meta name="author" content="Twisted Yogurt">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Thanks</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body  id="bootstrap-override">
    <header>
  		<?php print $nav ?>

  	</header>
<main>
  <div class="contact-hero">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-4">

<h1>Thanks for your order!</h1><br>
<p>Your order has been submitted. A confirmation email is on the way.</p>

<div class="final-order">
<h2>Add Your creation to our community page so others can get a taste!</h2>
<?php print $finalOrders  ?>
</div></div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-8 col-no-padding">
<div class="thanks-pic">

</div></div>
</div>
</div></div>


</main>
<footer class="container">
<?php print $footer?>
</footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
