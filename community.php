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

  <title>Community Recipes</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body id="bootstrap-override">
  <div class="wrapper">
    <header>
      <?php print $nav ?>

    </header>
    <main>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="community-hero">
              <h1> Community Recipes</h2>
                <p>Not sure what to order? No worries! Look and see what other users have ordered to get some inspiration.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 sorting-hat">
          <form action="community.php" method="POST">
            <button type="submit" value="Froyo" name="table">Froyo</button>
            <button type="submit" value="Smoothie" name="table">Smoothies</button>
            <button type="submit" value="Boba" name="table">Boba Tea</button>
          </form> 

          </div>
        </div>

        <?php
        if($_POST['table'] == null) {
          $table = 'Froyo';
        } else {
          $table = $_POST['table'];
        }

        include("dbconn.inc.php");
        $conn = dbConnect();

        $sql = "SELECT `product`,`size`, `flavor`, `fruit`, `candy`, `nuts`, `syrup`, `jellie`, `seeds`, `veggies`, `customerID`, `orderTime` FROM `shoporder` WHERE product = '$table'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          echo '<div class="row">';
          $i = 0;
          
          while ($row = $result->fetch_assoc()) {
            if($table == 'Froyo'){
              if ($i == 3) {
                echo '</div>';
              }

              if ($i < 3) {
                echo '<div class="col-md-4">';
                echo '<div class="community-recipes">';
                echo "<div class='card text-center'>";
                
                $check = $row['customerID'];

                $sql2 = "SELECT `firstName` FROM `accounts` WHERE AID = $check ";
                  $result2 = $conn->query($sql2);

                  if ($result2->num_rows > 0) {
                    while($row2 = $result2->fetch_assoc()) {
                      $userID = $row2["firstName"];
                    }
                }

                echo "<h2>" . $userID . "'s Recipe" . "</h2>";
                echo "<p>" .  $row['product'] . " " . " Flavor: " . $row['flavor'] . " Fruit: " . $row['fruit'] . " Candy: " . $row['candy'] . " Nuts: " . $row['nuts'] . " Syrup: " . $row['syrup'] . "</p>";
                echo "<div class='recipe-buttons'>";
                echo "<i class='fa fa-heart' aria-hidden='true'></i>";

                echo "<i class='fa fa-share-square-o' aria-hidden='true'></i>";
                echo "<form action='review.php' type='POST'>";
                echo "<button type='submit'name='submit' title='Submit'>Order</button>";
                echo "</form>";
                echo "</div></div></div></div>";
                $i++;
              } else {
                echo '</div>';
                echo '<div class="row">';
                $i = 0;
              }
          }

          if($table == 'Smoothie'){
            if ($i == 3) {
              echo '</div>';
            }

            if ($i < 3) {
              echo '<div class="col-md-4">';
              echo '<div class="community-recipes">';
              echo "<div class='card text-center'>";
              $check = $row['customerID'];

              $sql2 = "SELECT `firstName` FROM `accounts` WHERE AID = $check ";
                $result2 = $conn->query($sql2);

                if ($result2->num_rows > 0) {
                  while($row2 = $result2->fetch_assoc()) {
                    $userID = $row2["firstName"];
                  }
              }

              echo "<h2>" . $userID . "'s Recipe" . "</h2>";
              echo "<p>" .  $row['product'] . " " . " Flavor: " . $row['flavor'] . " Fruit: " . $row['fruit'] . " Seeds: " . $row['seeds'] . " Nuts: " . $row['nuts'] . " Veggies: " . $row['veggies'] . "</p>";
              echo "<div class='recipe-buttons'>";
              echo "<i class='fa fa-heart' aria-hidden='true'></i>";

              echo "<i class='fa fa-share-square-o' aria-hidden='true'></i>";
              echo "<form action='review.php' type='POST'>";
              echo "<button type='submit'name='submit' title='Submit'>Order</button>";
              echo "</form>";
              echo "</div></div></div></div>";
              $i++;
            } else {
              echo '</div>';
              echo '<div class="row">';
              $i = 0;
            }
        }

        if($table == 'Boba'){
          if ($i == 3) {
            echo '</div>';
          }

          if ($i < 3) {
            echo '<div class="col-md-4">';
            echo '<div class="community-recipes">';
            echo "<div class='card text-center'>";
            $check = $row['customerID'];

                $sql2 = "SELECT `firstName` FROM `accounts` WHERE AID = $check ";
                  $result2 = $conn->query($sql2);

                  if ($result2->num_rows > 0) {
                    while($row2 = $result2->fetch_assoc()) {
                      $userID = $row2["firstName"];
                    }
                }

                echo "<h2>" . $userID . "'s Recipe" . "</h2>";
            echo "<p>" .  $row['product'] . " " . " Flavor: " . $row['flavor'] . " Size: " . $row['size'] . " Jellie: " . $row['jellie'] . "</p>";
            echo "<div class='recipe-buttons'>";
            echo "<i class='fa fa-heart' aria-hidden='true'></i>";

            echo "<i class='fa fa-share-square-o' aria-hidden='true'></i>";
            echo "<form action='review.php' type='POST'>";
            echo "<button type='submit'name='submit' title='Submit'>Order</button>";
            echo "</form>";
            echo "</div></div></div></div>";
            $i++;
          } else {
            echo '</div>';
            echo '<div class="row">';
            $i = 0;
          }
      }

          }
        }


        echo '</div>';
        ?>
    </main>
    <footer class="container">
      <?php print $footer ?>
    </footer>

  </div>

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function(){
        $('body,html').delay(100).animate({scrollTop: 300}, 800); 
    });
  </script>
</body>

</html>