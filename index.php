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

      <title>Home</title>

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
  <div class="container hero-container">
    <div class="row">
      <div class="col-sm-12 hero-component">
<div class="hero-mobile "></div>
<div class="hero-text">
<h1>Your favorite froyos, boba teas, and smoothies.</h1>
<p>You have the power. We have the treats.
Design your treats your way while enjoying them with friends and family.
</p>
<a href="froyo.php"title="Order Froyo"><button>Order Froyo</button></a>
<div class="arrow">
  <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>

</div>
</div>

</div>
</div>
</div>

<div class="container product-options">
  <div class="row justify-content-center">
    <div class="col-xs-12">
<h2>Featured Products</h2>

</div></div>
  <div class="row justify-content-center ">
    <div class="col-sm-12 col-md-4 col-lg-3 col-no-padding">
      <div class="featured-cont">
  <div class="card text-center">
    <div class="card-img-top yogurt-home"></div>
    <div class="card-body">
      <h3 class="card-title">FROYO</h3>
      <p class="card-text"></p>
      <a href="froyo.php" title="Design a Froyo"><button>Build a Froyo</button></a>
    </div>
  </div>
</div></div>
<div class="col-sm-12 col-md-4 col-lg-3 col-no-padding">
  <div class="featured-cont">
<div class="card text-center">
<div class="card-img-top boba-home"></div>
<div class="card-body">
  <h3 class="card-title">BOBA TEA</h3>
  <p class="card-text"></p>
  <a href="boba.php" title="Design a Tea"><button>Design a Tea</button></a>
</div>
</div>
</div></div>
<div class="col-sm-12 col-md-4 col-lg-3 col-no-padding">
  <div class="featured-cont">
<div class="card text-center">
<div class="card-img-top smoothie-home"></div>
<div class="card-body">
  <h3 class="card-title">Smoothie</h3>
  <p class="card-text"></p>
  <a href="smoothie.php" title="Design a Smoothie"><button>Craft a Smoothie</button></a>
</div>
</div>
</div></div>

</div>
</div>
<div class="container join-box">
<div class="row ">
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-no-padding">
  <div class="join-text">
  <h2>Sign up to save your creation to our Community page so others can try it!</h2>
  <p>On our community page you can view, like and order combinations that other people
  have made. You can also add your own creations so others can try your tasty creations.</p>
  <a href="sign-up.php" title="Sign Up"><button>Sign Up</button></a>
  </div>
<div class="join-picture">
</div>





</div>
</div></div>
</main>
<footer class="container">
<?php print $footer?>
</footer>

</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
