<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Order Confirmation</h1>
    <h2>Customer Information</h2>
    <p><strong>Name:</strong> <?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?></p>
    <p><strong>Phone:</strong> <?php echo isset($_GET['phone']) ? $_GET['phone'] : ''; ?></p>
    <p><strong>Email:</strong> <?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?></p>

    <h2>Pizza Details</h2>
    <?php

        $numPizzas = $_GET['numpizzas'];
        for ($i = 0; $i < $numPizzas; $i++) {
            echo '<div class="pizza">';
            echo '<p><strong>Pizza ' . ($i + 1) . ':</strong></p>';
            echo '<p><strong>Size:</strong> ' . $_GET['size'][$i] . '</p>';
            echo '<p><strong>Shape:</strong> ' . $_GET['shape'][$i] . '</p>';
            
            // each pizza has its own toppings, and the name is <pizzaIndex>_toppings. This is a list item. Print it.
            echo '<p><strong>Toppings:</strong> ';
            //$i is an integer, ($i+1) as a string in a variable "$olegRussia".
            $olegrussia = strval($i + 1);
            $nicoletta = $olegrussia . '_toppings';
            
            $olegarray = $_GET[($olegrussia) . '_toppings'];

            foreach ($olegarray as $oleg) {
                echo $oleg . ' ';
            }
            

            
            echo '</div>';
        }
    ?>

    <p>Thank you for your order! We will be in contact with you shortly.</p>

    <p>Contact us at 1-800-PIZZA or email us at crazycampizza@crazypizza.com</p>
</body>
</html>
