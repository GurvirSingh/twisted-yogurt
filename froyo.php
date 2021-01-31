<?php include 'components.php';
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="Build your smoothie your way with our assorted collection of flavors and add ons.">
      <meta name="keywords" content="Froyo, Smoothie, Order">
      <meta name="author" content="Twisted Yogurt">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Build Your Smoothie</title>

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
                <h1>Build Your Froyo</h1>
              </div>
              <div class="build-photo">

            </div>
            </div>
          </div>
            <form action="froyo_process.php" method="POST" id="build-form" class="container">
            <div class="row">
              <div class="col-12 build-heading heading-color col-md-7 col-lg-8">
                <h2>Pick a size</h2>
              </div>
            </div>
            <div class="size-options form-group row">
              <div class="size-container col-md-4 col-lg-2">
                  <label class="check-container">Large<br>16 oz.
                  <input type="radio" value="Large" name="radio-size">
                  <span class="checkmark"></span>
                </label>
                <img src="images/froyo.png" alt="Large smoothie option.">
              </div>
              <div class="size-container col-md-4 col-lg-2">
                <label class="check-container">Medium<br>14 oz.
                  <input type="radio" value="Medium" name="radio-size">
                  <span class="checkmark"></span>
                </label>
                <img src="images/froyo.png" alt="Medium smoothie option.">
              </div>
              <div class="size-container col-md-4 col-lg-2">
                <label class="check-container">Small<br>10 oz.
                  <input type="radio" value="Small" name="radio-size">
                  <span class="checkmark"></span>
                </label>
                <img src="images/froyo.png" alt="Small smoothie option.">
              </div>
            </div>
            <div class="d-lg-none row pb-4">
              <div class="d-flex justify-content-center justify-content-md-end col-12">
                <button type="button" name="next1" title="Next">Next</button>
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
                  <label class="check-container">Vanilla
                    <input type="radio"  value="Vanilla" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Chocolate
                    <input type="radio"  value="Chocolate" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Berry Tart
                    <input type="radio"  value="Berry Tart" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Blackberry
                    <input type="radio"  value="Blackberry" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Blueberry
                    <input type="radio"  value="Blueberry" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Pomegranete
                    <input type="radio"  value="Pomegranete" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
              <div class="flavor-container col-6 col-md-3 col-lg-3">
                <label class="check-container">Cake Batter
                  <input type="radio" value="Cake Batter" name="radio-flavor">
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
              <label class="check-container">Peach Cobbler
                <input type="radio" value="Peach Cobbler" name="radio-flavor">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="flavor-container col-6 col-md-3 col-lg-3">
              <label class="check-container">Pecan Praline
                <input type="radio"  value="Pecan Praline" name="radio-flavor">
                <span class="checkmark"></span>
              </label>
            </div>
          <div class="flavor-container col-6 col-md-3 col-lg-3">
            <label class="check-container">Pumpkin Pie
              <input type="radio"  value="Pumpkin Pie" name="radio-flavor">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="flavor-container col-6 col-md-3 col-lg-3">
            <label class="check-container">Peanut Butter
              <input type="radio"  value="Peanut Butter" name="radio-flavor">
              <span class="checkmark"></span>
            </label>
          </div>
        <div class="flavor-container col-6 col-md-3 col-lg-3">
          <label class="check-container">Dutch Chocolate
            <input type="radio" value="Dutch Chocolate" name="radio-flavor">
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="flavor-container col-6 col-md-3 col-lg-3">
          <label class="check-container">Cookies N' Cream
            <input type="radio"  value="Cookies N Cream" name="radio-flavor">
            <span class="checkmark"></span>
          </label>
        </div>
      <div class="flavor-container col-6 col-md-3 col-lg-3">
        <label class="check-container">Fat Free Chocolate
          <input type="radio"  value="Fat Free Chocolate" name="radio-flavor">
          <span class="checkmark"></span>
        </label>
      </div>
      <div class="flavor-container col-6 col-md-3 col-lg-3">
        <label class="check-container">Fat Free Vanilla
          <input type="radio"  value="Fat Free Vanilla" name="radio-flavor">
          <span class="checkmark"></span>
        </label>
      </div>
  </div>
</div>
<div class="d-lg-none row pb-4">
  <div class="d-flex justify-content-center justify-content-md-end col-12">
    <button type="button" name="next2" title="Next">Next</button>
  </div>
</div>
<div class="toppings form-group row">
  <div class="topping-container fruit-topping d-flex flex-column d-md-block col-md-6 col-lg-3">
      <label class="h2 heading-color" for="fruits">Pick Fruit</label>
      <select id="fruits" name="fruit[]" data-placeholder="Select" class="chosen-select" multiple="" tabindex="-1">
            <option value="Bananas">Bananas</option>
            <option value="Mandarin Oranges">Mandarin Oranges</option>
            <option value="Strawberries">Strawberries</option>
            <option value="Blackberries">Blackberries</option>
            <option value="Blueberries">Blueberries</option>
            <option value="Peaches">Peaches</option>
            <option value="Kiwis">Kiwis</option>
            <option value="Pineapple">Pineapple</option>
            <option value="Mango">Mango</option>
      </select>
      <img src="images/build-fruit-bg-mobile-big.png" class="d-md-none" alt="Fruit on froyo graphic">
      <div class="d-flex d-md-none py-4 justify-content-center  col-12">
        <button type="button"  name="next3" title="Next">Next</button>
      </div>
  </div>
  <div class="topping-container candy-topping d-flex flex-column d-md-block col-md-6 col-lg-3">
      <label class="h2 heading-color" for="candy">Pick Candy</label>
      <select data-placeholder="Select" name="candy[]" class="chosen-select" multiple="" tabindex="-1">
            <option value="M&Ms">M&Ms</option>
            <option value="Skittles">Skittles</option>
            <option value="Gummy Bears">Gummy Bears</option>
            <option value="Gummy Worms">Gummy Worms</option>
            <option value="Reeses Pieces">Reeses Pieces</option>
            <option value="Chocolate Chips">Chocolate Chips</option>
            <option value="Skittles">Skittles</option>
      </select>
      <img src="images/build-candy-bg-mobile-big.png" class="d-md-none" alt="Candy on froyo graphic">
      <div class="d-flex d-md-none py-4 justify-content-center col-12">
        <button type="button"  name="next4" title="Next">Next</button>
      </div>
</div>
  <div class="topping-container nut-topping d-flex flex-column d-md-block col-md-6 col-lg-3">
      <label class="h2 heading-color" for="oats">Pick Oats N' Nuts</label>
      <select id="oats" data-placeholder="Select" name="oats[]" class="chosen-select" multiple="" tabindex="-1">
            <option value="Cashews">Cashews</option>
              <option value="Almonds">Almonds</option>
            <option value="Peanuts">Peanuts</option>
            <option value="Granola">Granola</option>
            <option value="Pistachios">Pistachios</option>
            <option value="Walnuts">Walnuts</option>
            <option value="Pecans">Pecans</option>
            <option value="Macadamia Nuts">Macadamia Nuts</option>
      </select>
      <img src="images/build-nuts-bg-mobile-big.png" class="d-md-none" alt="Nuts on froyo graphic">
      <div class="d-flex d-md-none py-4 justify-content-center col-12">
        <button type="button" name="next5" title="Next">Next</button>
      </div>
  </div>
  <div class="topping-container d-flex flex-column d-md-block col-md-6 col-lg-3">
      <label class="h2 heading-color" for="syrup">Pick Syrup</label>
      <select data-placeholder="Select" name="syrup[]" class="chosen-select" multiple="" tabindex="-1">
            <option value="Chocolate">Chocolate</option>
            <option value="Caramel">Caramel</option>
            <option value="Maple Syrup">Maple Syrup</option>
            <option value="Honey">Honey</option>
            <option value="Strawberry">Strawberry</option>
            <option value="Vanilla">Vanilla</option>
      </select>
      <img src="images/build-syrup-bg-mobile-big.png" class="d-md-none" alt="Syrup on froyo graphic">
      <div class="d-flex d-md-none py-4 justify-content-center col-12">
        <a href="review.php"><button type="button" title="Next" name="next6">Next</button></a>
      </div>
  </div>
</div>
  <div class="row d-none d-md-flex justify-content-sm-center justify-content-md-end w-100 my-md-3 -lg-5">
    <div class="col-3">
        <a href="review.php"><button type="submit" title="Next" name="submit">Next</button></a>
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
