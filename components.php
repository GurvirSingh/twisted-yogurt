<?php
error_reporting(0);
session_start();

function determineLog(){
  if(isset($_SESSION['access']))
  {
      return "<a href='sign-in.php?signout' class='nav-link'>Log Out</a>";
  }

  else {
    return "<a class='nav-link' href='sign-in.php'>Log In</a>";
  }
}

$log = determineLog();
function account(){
  global $log;
  if(isset($_SESSION['access']))
  {
      return "<button class='nav-item dropdown sign-in account d-none d-md-block'><a href=''title='Account' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button'  aria-haspopup='true' aria-expanded='false'>Account<i class='ml-1 fa fa-user'></i></a>
        <ul class='dropdown-menu' aria-labelledby='nav-link'>
          <li class='nav-menu dropdown-item'><a href='account.php'title='Manage your Account'>Manage Account</a></li>
          <li class='nav-menu dropdown-item'>$log</li>
        </ul>
      </button>";
  }
  else{
    return "<button class='sign-in d-none d-md-bloc'title='Log In'>$log</button>";
  }
}

$account = account();

function mobileAccount(){
  if(isset($_SESSION['access']))
  {
    return "<li class='nav-item sign-in-mobile'><a href='account.php' class='nav-link' title='Manage your Account'>Manage Account</a></li>";
  }
  return;
}

$mobile = mobileAccount();

$footer = "<div class='prefooter row justify-content-between'>
  <div class='col-xs-12 col-md-4 col-lg-5 footer-left'>
    <div class='footer-logo'>
    </div>
    <p>This website is a class project for CTEC 4309 Internet Marketing and is not reflective of a real brand.</p>
  </div>
  <div class='links col-xs-12 col-md-6 col-lg-5'>
    <div class='footer-products links-col'>
      <h4>Products</h4>
      <ul class='list-unstyled'>
        <li><a href='froyo.php' title='Frozen yogurt'>Frozen Yogurt</a></li>
        <li><a href='boba.php.php' title='Boba Tea'>Boba Tea</a></li>
        <li><a href='smoothie.php' title='Smoothies'>Smoothies</a></li>
      </ul>
    </div>
    <div class='footer-services links-col'>
      <h4>Services</h4>
      <ul class='list-unstyled'>
        <li><a href='sign-up.php' title='Sign Up'>Sign Up</a></li>
        <li><a href='froyo.php' title='Build'>Build</a></li>
        <li><a href='community.php' title='Community'>Community Recipes</a></li>
      </ul>
    </div>
    <div class='footer-socials links-col'>
      <h4>Socials</h4>
      <ul class='list-unstyled'>
        <li><a href='#' title='Facebook'><i class='fa fa-facebook-f social-icon'></i></a></li>
        <li><a href='#' title='Twitter'><i class='fa fa-twitter social-icon'></i></a></li>
        <li><a href='#' title='Instagram'><i class='fa fa-instagram social-icon'></i></a></li>
      </ul>
    </div>
  </div>

</div>
<div class='legal'>
  <div class='copyright'>
    <span>© 2020 Twisted Yogurt.</span>
    <span>All Rights Reserved</span>
  </div>
  <div class='legal-pages'>
    <a class='privacy' href='privacy-policy.html' title='Privacy Policy'>Privacy Policy</a>
    <a href='tos.html' title='Terms of Service'>Terms of Service</a>
  </div>
</div>";

$nav = "<nav class='navbar navbar-expand-lg'>
  <div class='container justify-content-between'>
    <a class='navbar-brand' href='index.php'>
        <div class='logo'></div>
    </a>
    <div id='nav-right'>
    <div id='actions'>
      <button class='navbar-toggler d-lg-none' type='button'
       data-toggle='collapse' data-target='#myTogglerNav' aria-controls='myTogglerNav' aria-expanded='false' aria-label='Toggle navigation'>
      <span>
     <i class='fa fa-bars menu-toggler'></i>
    </span>
  </button>
  </div>
    <div class='collapse navbar-collapse' id='myTogglerNav'>
      <ul class='nav navbar-nav'>
          $account
            <li class='nav-item'><a href='index.php' title='Home' class='nav-link'>Home</a></li>
            <li class='nav-item dropdown'><a href=''title='Build' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button'  aria-haspopup='true' aria-expanded='false'>Build</a>
              <ul class='dropdown-menu' aria-labelledby='nav-link'>
                <li class='nav-menu dropdown-item'><a href='froyo.php'title='Froyo'>Froyo<div id='froyo'></div></a></li>
                <li class='nav-menu dropdown-item'><a href='boba.php' title='Boba'>Boba Tea<div id='boba'></div></a></li>
                <li class='nav-menu dropdown-item'><a href='smoothie.php'title='Smoothie'>Smoothies<div id='smoothies'></div></a></li>
              </ul>
            </li>
            <li class='nav-item'><a href='community.php' title='Community Recipes'class='nav-link'>Community Recipes</a></li>
            <li class='nav-item'><a href='about.php'title='About' class='nav-link'>About</a></li>
            <li class='nav-item'><a href='contact.php'title='Contact' class='nav-link'>Contact</a></li>
            $mobile
            <li class='nav-item sign-in-mobile'>$log</li>
      </ul>
  </div>
</div>
</div>
</nav>";

$communityRecipes = "<div class='card text-center'>
    <h2>Treenie's Recipe</h2>
    <p>Froyo: Vanilla
Fruits: Strawberry, Blueberry
Candy: M&M's, Chocolate Chips
Nuts: Granola Chunks
Syrup: Chocolate, Caramel
</p>
<div class='recipe-buttons'>
<i class='fa fa-heart' aria-hidden='true'></i>

<i class='fa fa-share-square-o' aria-hidden='true'></i>
<form action='review.php' type='POST'>
  <button type='submit'name='submit' title='Submit'>Order</button>
  </form>
  </div></div>";

  $recentOrders = "<div class='card text-center'>
      <p>Froyo: Vanilla
  Fruits: Strawberry, Blueberry
  Candy: M&M's, Chocolate Chips
  Nuts: Granola Chunks
  Syrup: Chocolate, Caramel
  </p>
  <div class='recipe-buttons'>
  <form action='review.php' type='POST'>
    <button type='submit'name='submit' title='Submit'>Add to Cart</button>
    </form>
    </div></div>";

    $finalOrders = "<div class='card text-center'>
        <p>Froyo: Vanilla
    Fruits: Strawberry, Blueberry
    Candy: M&M's, Chocolate Chips
    Nuts: Granola Chunks
    Syrup: Chocolate, Caramel
    </p>
    <div class='recipe-buttons'>
    <form action='community.php' type='POST'>
      <button type='submit'name='submit' title='Submit'>Add to Community</button>
      </form>
      </div></div>";

      $modalScript = "<script>
      $(document).ready(function(){
      $('#myModal').modal('show');});</script>";

      $modalTitle = "";
      $modalBody = "";
      $modalButtons = "";

      $toastScript = "<script>
      $(document).ready(function(){
      $('.toast').toast('show');});</script>";


      $toastHeading = "";
      $toastBody = "";



?>
