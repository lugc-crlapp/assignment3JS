<script>
    var oleg =2;
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/scripts.js"></script>
</head>

<body>
    <header>
        <img src="imgs\pizza-main.png" alt="Delicious Pizza" width="100" height="100">
        <h1>Welcome to CRAZZZY PIZZZA</h1>
    </header>
    <main>
        <form id="edit_payment_info" action="confirmation.php" method="get">
            <input type="hidden" name="numpizzas" id="numpizzas" value="1" />
            <input type="hidden" name="form_sent" value="1" />
            <fieldset>
                <legend>Personal Information</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
            </fieldset>
            <br>
            <fieldset>
                <legend>Pizza Details</legend>

                <!-- Creating fields for multiple pizzas -->
                <div id="pizza-details">
                    <div class="pizzas">
                        <h3>Pizza #1</h3>
                        <label for="size">Size:</label>
                        <select name="size[]" required>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select><br><br>
                        <label for="1_toppings">Topings:</label>
                        <div id ="topping1">
                            <input type="checkbox" name="1_toppings[]" id="pepperoni" value="pepperoni" />
                            <label for="pepperoni">Peperoni</label>
                        </div>
                        <br>
                        <div id="topping2">
                            <input type="checkbox" name="1_toppings" id="mushroom" value="mushroom" />
                            <label for="mushroom">Mushroom</label>
                        </div>
                        <br>
                        <div id="topping3">
                            <input type="checkbox" name="1_toppings[]" id="pineapple" value="pineapple" />
                            <label for="pineapple">Pineapple</label>
                        </div>
                        <br>
                        <div id="topping4">
                            <input type="checkbox" name="1_toppings[]" id="bacon" value="bacon" />
                            <label for="bacon">Bacon</label>
                        </div>
                        <br>
                        <div id="topping5">
                            <input type="checkbox" name="1_toppings[]" id="greenOnion" value="greenOnion" />
                            <label for="greenOnion">Green Onion</label>
                        </div>
                        <br>
                        <div id="topping6">
                            <input type="checkbox" name="1_toppings[]" id="redPepper" value="redPepper" />
                            <label for="redPepper">Red Pepper</label>
                        </div>
                        </select><br><br>
                        <label for="shape">Shape:</label>
                        <select name="shape[]" required>
                            <option value="circle">Circle</option>
                            <option value="square">Square</option>
                            <option value="heart">Heart</option>
                        </select><br><br>
                    </div>
                </div>
                <button type="button" onclick="addPizza()">Add another pizza</button> 
            </fieldset>
            <br>
            <fieldset>
                <!-- All delivery options that are clickable for the user -->
                <legend>Delivery Options</legend>
                <input type="radio" id="take-out" name="delivery" value="take-out">
                <label for="take-out">Take Out</label><br>
                <input type="radio" id="delivery" name="delivery" value="delivery">
                <label for="delivery">Delivery</label><br>
                <input type="radio" id="eat-in" name="delivery" value="eat-in">
                <label for="eat-in">Eat-in</label><br><br>
            </fieldset>
            <br>
            <!-- Reset and submit buttons -->
            <input type="submit" value="Place Order">
            <input type="reset" value="Reset">
        </form>
        <br>
        <p>Check out our delicious pizzas!</p>
    </main>
    <footer>
        <p>Contact us at 1-800-PIZZA or email us at CRAZYPIZZA@PIZZA.com</p>
    </footer>

    <script>
    </script>
    
</body>

</html>