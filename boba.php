<?php include 'components.php';
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="Build your boba your way with our assorted collection of flavors and jellies.">
      <meta name="keywords" content="Boba Tea, Froyo, Order">
      <meta name="author" content="Twisted Yogurt">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Build Your Boba</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/chosen.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body  id="bootstrap-override">
      <div class="wrapper">
    <header>
  		<?php print $nav ?>
  	</header>
<main>

        <div class="container">
            <div class="row build-hero">
              <div class="col-xs-12 build-heading ">
                <h1>Build Your Boba Tea</h1>
              </div>
              <div class="build-photo">

            </div>
            </div>
          </div>
            <form action="boba_process.php" method="POST" id="build-form" class="container">
            <div class="row">
              <div class="col-12 build-heading heading-color col-md-7 col-lg-8">
                <h2>Pick a size</h2>
              </div>
            </div>
            <div class="size-options form-group row">
              <div class="size-container col-md-4 col-lg-2">
                  <label class="check-container">Large<br>16 oz.
                  <input type="radio"  value="large" name="radio-size">
                  <span class="checkmark"></span>
                </label>
                <img src="images/boba.png" alt="Large FroYo option.">
              </div>
              <div class="size-container col-md-4 col-lg-2">
                <label class="check-container">Medium<br>14 oz.
                  <input type="radio" value="Medium" name="radio-size">
                  <span class="checkmark"></span>
                </label>
                <img src="images/boba.png" alt="Medium FroYo option.">
              </div>
              <div class="size-container col-md-4 col-lg-2">
                <label class="check-container">Small<br>10 oz.
                  <input type="radio" value="Small" name="radio-size">
                  <span class="checkmark"></span>
                </label>
                <img src="images/boba.png" alt="Small FroYo option.">
              </div>
            </div>
            <div class="d-lg-none row pb-4">
              <div class="d-flex justify-content-center justify-content-md-end col-12">
                <button type="button" name="next1">Next</button>
              </div>
            </div>
            <div id="flavor-wrapper">
              <div class="row mb-1 mb-md-0 mb-lg-3">
                <div class="build-heading heading-color col-12 col-md-7 col-lg-8">
                  <h2>Pick a flavor</h2>
                </div>
              </div>
              <div class="flavors form-group row">
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Milk Tea
                    <input type="radio"  value="Milk Tea" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Thai Tea
                    <input type="radio"  value="Thai Tea" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Taro Bubble Tea
                    <input type="radio"  value="Taro Bubble Tea" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Fruit Tea
                    <input type="radio"  value="Fruit Tea" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Strawberry
                    <input type="radio"  value="Strawberry" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Green Apple
                    <input type="radio"  value="Green Apple" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
              <div class="flavor-container col-6 col-md-3 col-lg-3">
                <label class="check-container">Lychee
                  <input type="radio"  value="Lychee" name="radio-flavor">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="flavor-container col-6 col-md-3 col-lg-3">
                <label class="check-container">Peach
                  <input type="radio" value="Peach" name="radio-flavor">
                  <span class="checkmark"></span>
                </label>
              </div>
            <div class="flavor-container col-6 col-md-3 col-lg-3">
              <label class="check-container">Passion Fruit
                <input type="radio"  value="Passion Fruit" name="radio-flavor">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="flavor-container col-6 col-md-3 col-lg-3">
              <label class="check-container">Jasmine
                <input type="radio"  value="Jasmine" name="radio-flavor">
                <span class="checkmark"></span>
              </label>
            </div>
          <div class="flavor-container col-6 col-md-3 col-lg-3">
            <label class="check-container">Rose Tea
              <input type="radio"  value="Rose Tea" name="radio-flavor">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="flavor-container col-6 col-md-3 col-lg-3">
            <label class="check-container">Lavendar Tea
              <input type="radio"  value="Lavendar Tea" name="radio-flavor">
              <span class="checkmark"></span>
            </label>
          </div>
        <div class="flavor-container col-6 col-md-3 col-lg-3">
          <label class="check-container">Honeydew
            <input type="radio" value="Honeydew" name="radio-flavor">
            <span class="checkmark"></span>
          </label>
        </div>
  </div>
            <div class="d-lg-none row pb-4">
              <div class="d-flex justify-content-center justify-content-md-end col-12">
                <button type="button" name="next1">Next</button>
              </div>
            </div>
            <div id="flavor-wrapper">
              <div class="row mb-1 mb-md-0 mb-lg-3">
                <div class="build-heading heading-color col-12 col-md-7 col-lg-8">
                  <h2>Pick a Jellie</h2>
                </div>
              </div>
              <div class="flavors form-group row">
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Boba
                    <input type="radio"  value="Boba" name="radio-jellie">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Pudding
                    <input type="radio" value="Pudding" name="radio-jellie">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Mango Jelly
                    <input type="radio"  value="Mango Jelly" name="radio-jellie">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Grape Popping Bubbles
                    <input type="radio"  value="Grape Popping Bubbles" name="radio-jellie">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Fig Jelly
                    <input type="radio"  value="Fig Jelly" name="radio-jellie">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Mango Popping Bubbles
                    <input type="radio"  value="Mango Popping Bubbles" name="radio-jellie">
                    <span class="checkmark"></span>
                  </label>
                </div>
              <div class="flavor-container col-6 col-md-3 col-lg-3">
                <label class="check-container">Aloe Jelly
                  <input type="radio"  value="Aloe Jelly" name="radio-jellie">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="flavor-container col-6 col-md-3 col-lg-3">
                <label class="check-container">Passion Fruit Jelly
                  <input type="radio" value="Passion Fruit Jelly" name="radio-jellie">
                  <span class="checkmark"></span>
                </label>
              </div>
            <div class="flavor-container col-6 col-md-3 col-lg-3">
              <label class="check-container">Lychee Jelly
                <input type="radio"  value="Lychee Jelly" name="radio-jellie">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="flavor-container col-6 col-md-3 col-lg-3">
              <label class="check-container">Strawberry Jelly
                <input type="radio"  value="Strawberry Jelly" name="radio-jellie">
                <span class="checkmark"></span>
              </label>
            </div>
          <div class="flavor-container col-6 col-md-3 col-lg-3">
            <label class="check-container">Milk Foam
              <input type="radio"  value="Milk Foam" name="radio-jellie">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="flavor-container col-6 col-md-3 col-lg-3">
            <label class="check-container">Grass Jelly
              <input type="radio" value="Grass Jelly" name="radio-jellie">
              <span class="checkmark"></span>
            </label>
          </div>
        <div class="flavor-container col-6 col-md-3 col-lg-3">
          <label class="check-container">Green Apple Jelly
            <input type="radio" value="Green Apple Jelly" name="radio-jellie">
            <span class="checkmark"></span>
          </label>
        </div>
  </div>
</div>
  <div class="row d-none d-md-flex justify-content-sm-center justify-content-md-end w-100 my-md-3 -lg-5">
    <div class="col-3">
        <button type="submit" name="submit" title='Next'>Next</button>
    </div>
  </div>
        </form>

</main>
<footer class="container">
  <?php print $footer ?>
</footer>

</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/chosen.jquery.js" type="text/javascript"></script>
    <script> $(".chosen-select").chosen()</script>
  </body>
</html>
