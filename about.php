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

      <title>About Twisted Yogurt</title>

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
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-12 about-hero">

      <h1> About Us</h1>

<div class="reviews-container">
  <div class="col-xs-12 col-md-12">
  <h2>Customer Reviews</h2>
</div>
<div class="col-xs-12 col-md-5 review col-lg-5">
  <div class="stars">
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
  </div>
  <div class="review-text">
    <p>“They had so many toppings I almost had to get another cup lol great choices of flavors and clean.” </p>
    <p class="left">-McKennan O.</p>
  </div>
</div>
<div class="col-xs-12 col-md-5 col-lg-5 review">
  <div class="stars">
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
  </div>
  <div class="review-text">
        <p>“I love Boba and my kids love Froyo. This place makes the whole family happy.” </p>
    <p class="left">-Rachel Y.</p>
  </div>
  </div>
  <div class="col-xs-12 col-md-5 col-lg-5 review">
  <div class="stars">
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
    <i class="fa fa-heart" aria-hidden="true"></i>
  </div>
    <div class="review-text">
    <p>“Great choices of flavors. My kids love this place.” </p>
    <p class="left">-Britney R.</p>
  </div>
</div>
</div>


</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-xs-12 col-md-12 col-xl-4 mission-container">
  <div class="mission">
  <h2>Mission</h2>
<p>Our mission at Twisted Yogurt is inspiring families striving for a fun and healthy lifestyle to have a hand in crafting their own experience with ingenuity, creativity and innovation. We envision to enthusiastically empower collaborative "outside the box" thinking in order that we may continue to exceed customer expectations. It is our belief that through a user-first mentality emphasizing customization that our customers will feel a part of our story and our family.
</p>
</div>
</div>
<div class="col-xs-12 col-md-12 characters">

</div>
</div>
<div class="row logos">
<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 logo">
<img src="images/angies-logo.png" alt="Angie's List">

</div>
<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 logo ">
<img src="images/BBB-Logo.png" alt="Better Business Bureau">

</div>
<div class="col-xs-12 col-md-4 col-lg-4 logo">
<img src="images/yelp-logo.png" alt="Find us on Yelp">

</div>
</div>
</div>

</main>
<footer class="container">
<?php print $footer?>
</footer>

</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
