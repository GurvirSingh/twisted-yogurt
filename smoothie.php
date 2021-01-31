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
                <h1>Build Your Smoothie</h1>
              </div>
              <div class="build-photo">

            </div>
            </div>
          </div>
            <form action="smoothie_process.php" method="POST" id="build-form" class="container">
            <div class="row">
              <div class="col-12 build-heading heading-color col-md-7 col-lg-8">
                <h2>Pick a size</h2>
              </div>
            </div>
            <div class="size-options form-group row">
              <div class="size-container col-md-4 col-lg-2">
                  <label class="check-container">Large<br>16 oz.
                  <input type="radio"  value="Large" name="radio-size">
                  <span class="checkmark"></span>
                </label>
                <img src="images/smoothie.png" alt="Large smoothie option.">
              </div>
              <div class="size-container col-md-4 col-lg-2">
                <label class="check-container">Medium<br>14 oz.
                  <input type="radio" value="Medium" name="radio-size">
                  <span class="checkmark"></span>
                </label>
                <img src="images/smoothie.png" alt="Medium smoothie option.">
              </div>
              <div class="size-container col-md-4 col-lg-2">
                <label class="check-container">Small<br>10 oz.
                  <input type="radio" value="Small" name="radio-size">
                  <span class="checkmark"></span>
                </label>
                <img src="images/smoothie.png" alt="Small smoothie option.">
              </div>
            </div>
            <div class="d-lg-none row pb-4">
              <div class="d-flex justify-content-center justify-content-md-end col-12">
                <button type="button" name="next1" title='Next'>Next</button>
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
                  <label class="check-container">Chocolate
                    <input type="radio"  value="Chocolate" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Banana
                    <input type="radio"  value="Banana" name="radio-flavor">
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
                  <label class="check-container">Mango
                    <input type="radio"  value="Mango" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Vanilla
                    <input type="radio"  value="Vanilla" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="flavor-container col-6 col-md-3 col-lg-3">
                  <label class="check-container">Mixed berry
                    <input type="radio"  value="Mixed berry" name="radio-flavor">
                    <span class="checkmark"></span>
                  </label>
                </div>
              <div class="flavor-container col-6 col-md-3 col-lg-3">
                <label class="check-container">Tropical Fruit
                  <input type="radio"  value="Tropical Fruit" name="radio-flavor">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="flavor-container col-6 col-md-3 col-lg-3">
                <label class="check-container">Orange
                  <input type="radio"  value="Orange" name="radio-flavor">
                  <span class="checkmark"></span>
                </label>
              </div>
            <div class="flavor-container col-6 col-md-3 col-lg-3">
              <label class="check-container">Blueberry
                <input type="radio" value="Blueberry" name="radio-flavor">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="flavor-container col-6 col-md-3 col-lg-3">
              <label class="check-container">Pineapple
                <input type="radio" value="Pineapple" name="radio-flavor">
                <span class="checkmark"></span>
              </label>
            </div>
  </div>
</div>
<div class="d-lg-none row pb-4">
  <div class="d-flex justify-content-center justify-content-md-end col-12">
    <button type="button" name="next2" title='Next'>Next</button>
  </div>
</div>
<div class="toppings form-group row">
  <div class="topping-container fruit-topping d-flex flex-column d-md-block col-md-6 col-lg-3">
      <label class="h2 heading-color" for="fruits">Pick Fruit</label>
      <select id="fruits" name="fruit[]" data-placeholder="Select" class="chosen-select" multiple="" tabindex="-1">
            <option value="Goji Berries">Goji Berries</option>
            <option value="Cacao Nibs">Cacao Nibs</option>
            <option value="Raspberries">Raspberries</option>
            <option value="Blackberries">Blackberries</option>
            <option value="Blueberries">Blueberries</option>
            <option value="Pineapple">Pineapple</option>
            <option value="Diced Mango">Diced Mango</option>
            <option value="Sliced Bananas">Sliced Bananas</option>
            <option value="Sliced Peaches">Sliced Peaches</option>
            <option value="Sliced Plums">Sliced Plums</option>
            <option value="Sliced Pears">Sliced Pears</option>
            <option value="Pepitas">Pepitas</option>
      </select>
      <img src="images/build-fruit-bg-mobile-big.png" class="d-md-none" alt="Fruit on froyo graphic">
      <div class="d-flex d-md-none py-4 justify-content-center  col-12">
        <button type="button"  name="next3" title='Next'>Next</button>
      </div>
  </div>
  <div class="topping-container candy-topping d-flex flex-column d-md-block col-md-6 col-lg-3">
      <label class="h2 heading-color" for="seeds">Pick Seeds</label>
      <select data-placeholder="Select" name="seeds[]" class="chosen-select" multiple="" tabindex="-1">
            <option value="Flax Seeds">Flax Seeds</option>
            <option value="Chia Seeds">Chia Seeds</option>
            <option value="Pumpkin Seeds">Pumpkin Seeds</option>
            <option value="Pomegranete Seeds">Pomegranete Seeds</option>

      </select>
      <img src="images/build-candy-bg-mobile-big.png" class="d-md-none" alt="Candy on froyo graphic">
      <div class="d-flex d-md-none py-4 justify-content-center col-12">
        <button type="button"  name="next4" title='Next'>Next</button>
      </div>
</div>
  <div class="topping-container nut-topping d-flex flex-column d-md-block col-md-6 col-lg-3">
      <label class="h2 heading-color" for="oats">Pick Nuts</label>
      <select id="oats" data-placeholder="Select" name="oats[]" class="chosen-select" multiple="" tabindex="-1">
            <option value="Almonds">Almonds</option>
              <option value="Pecans">Pecans</option>
            <option value="Walnuts">Walnuts</option>
            <option value="Cashews">Cashews</option>
            <option value="Macademia Nuts">Macademia Nuts</option>

      </select>
      <img src="images/build-nuts-bg-mobile-big.png" class="d-md-none" alt="Nuts on froyo graphic">
      <div class="d-flex d-md-none py-4 justify-content-center col-12">
        <button type="button" name="next5" title='Next'>Next</button>
      </div>
  </div>
  <div class="topping-container d-flex flex-column d-md-block col-md-6 col-lg-3">
      <label class="h2 heading-color" for="veggies">Pick Veggies</label>
      <select data-placeholder="Select" name="veggies[]" class="chosen-select" multiple="" tabindex="-1">
            <option value="Spinach">Spinach</option>
            <option value="Kale">Kale</option>
            <option value="Cabbage">Cabbage</option>
            <option value="Bok Choy">Bok Choy</option>
            <option value="Carrots">Carrots</option>
      </select>
      <img src="images/build-syrup-bg-mobile-big.png" class="d-md-none" alt="Syrup on froyo graphic">
      <div class="d-flex d-md-none py-4 justify-content-center col-12">
        <a href="review.php"><button type="button" title='Next' name="next6">Next</button></a>
      </div>
  </div>
</div>
  <div class="row d-none d-md-flex justify-content-sm-center justify-content-md-end w-100 my-md-3 -lg-5">
    <div class="col-3">
        <a href="review.php"><button type="submit" title='Next' name="submit">Next</button></a>
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
