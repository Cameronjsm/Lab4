<?php
  $large_pizza = 9;
  $medium_pizza = 7;
  $small_pizza = 5;
  
  $small_top = 0.50;
  $medium_top = 1;
  $large_top = 1.50;

$sm_piz_maxprice= '$' . $small_pizza + ($small_top*3);

  
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizza Time!</title>
    </head>
    <body>
        <h1>Choose the Pizza Size</h1>
        
        <form action="index.php" method="post">
            <input type ="radio" name="pizza_size" value="small" checked> Small <br>
            <input type ="radio" name="pizza_size" value="Medium"> Medium <br>
            <input type ="radio" name="pizza_size" value="Large"> Large
        </form>
        <h2>Choose your toppings</h2>
        <form action="index.php" method="post">
            <input type ="checkbox" name="pep"> Pepperoni <br>
            <input type ="checkbox" name="Mushroom"> Mushrooms <br>
            <input type ="checkbox" name="Olives"> Olives
        </form>
         
        <input type='submit' value='Place Order'>
        <?php
        $pepperoni = isset($_POST ['pep']);
        $mushrooms = isset($_POST['Mushroom']);
        $olives = isset($_POST['Olives']);
        ?>
        
        <?php
        
        ?>
        
    </body>
</html>
