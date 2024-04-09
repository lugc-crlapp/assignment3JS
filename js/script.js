var numpizzas = document.getElementById('numpizzas');
        var counter = 1;
        function addPizza() { //function that adds a new pizza to the form
            numpizzas.value = counter + 1;
            counter++; //adds to the pizza amount counter
            var pizzaDetails = document.getElementById('pizza-details');
            var newPizza = document.createElement('div');
            newPizza.innerHTML = `
                <h3>Pizza #${counter}</h3>
                <div class="pizza">
                    <label for="size">Size:</label>
                    <select name="size[]" required>
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select><br><br>
                    <label for="${oleg}_toppings">Toppings:</label>
                        <div id ="topping1">
                            <input type="checkbox" name="${oleg}_toppings[]" id="pepperoni" value="pepperoni" />
                            <label for="pepperoni">Peperoni</label>
                        </div>
                        <br>
                        <div id ="topping2">
                            <input type="checkbox" name="${oleg}_toppings[]" id="mushroom" value="mushroom" />
                            <label for="mushroom">Mushroom</label>
                        </div>
                        <br>
                        <div id ="topping3">
                            <input type="checkbox" name="${oleg}_toppings[]" id="pineapple" value="pineapple" />
                            <label for="pineapple">Pineapple</label>
                        </div>
                        <br>
                        <div id ="topping4">
                            <input type="checkbox" name="${oleg}_toppings[]" id="bacon" value="bacon" />
                            <label for="bacon">Bacon</label>
                        </div>
                        <br>
                        <div id ="topping5">
                            <input type="checkbox" name="${oleg}_toppings[]" id="greenOnion" value="greenOnion" />
                            <label for="greenOnion">Green Onion</label>
                        </div>
                        <br>
                        <div id ="topping6">
                            <input type="checkbox" name="${oleg}_toppings[]" id="redPepper" value="redPepper" />
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
            `;
            oleg = oleg + 1;
            pizzaDetails.appendChild(newPizza); //handles adding a new pizza to the form
            if (counter == 5) {
                document.querySelector('button').disabled = true;
                document.querySelector('button').innerHTML = "Maximum pizzas reached";
                alert("Maximum pizzas reached");
                //see if there are 5 pizzas and disable the button
            }
            if (reset == true) {
                document.querySelector('button').disabled = false;
                document.querySelector('button').innerHTML = "Add another pizza";
            }
        }