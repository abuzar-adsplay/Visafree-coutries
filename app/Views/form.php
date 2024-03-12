<div class="card neomorphism-from">

    <div class="card__content">
        <h3 class="card__title">Check Visafree Country</h3>
        <form>

            <div class="input-fields">
                <div class="text-input-group">
                    <input type="text" name="firstName" id="firstName" placeholder="John" autocomplete="off" required="required">
                    <label for="firstName">First Name</label>
                </div>

                <div class="text-input-group">
                    <input type="text" name="lastName" id="lastName" placeholder="Doe" autocomplete="off" required="required">
                    <label for="lastName">Last Name</label>
                </div>

            </div>

            <div class="text-input-group">
                <input type="text" name="country" id="country" placeholder="country" autocomplete="off" required="required">
                <label for="country">Country</label>
            </div>
            <div class="popup">
                <i onclick=" closePopup" class="fa-solid fa-xmark"></i>
                <div class="popup-content">
                    <div class="continent-selection">
                        <h5>Choose Your Continent</h5>
                        <ul class="continent-list" aria-labelledby="continent-heading">
                            <?php
                            $continents = ["Africa", "Asia", "Europe", "North America", "South America", "Australia", "Antarctica"];
                            foreach ($continents as $continent) {
                                echo '<li><a href="#" role="button">' . $continent . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="country">
                    <div class="text-input-group">
                            <input type="text" name="city" id="city" placeholder="country" autocomplete="off" required="required">
                            <label for="country">country</label>
                        </div><br>
                        <ul class="continent-list" aria-labelledby="continent-heading">
                            <?php
                            $continents = ["india", "pak", "England", "Australia", "Agentina", "AmericA", "france","germany",];
                            foreach ($continents as $continent) {
                                echo '<li><a href="#" role="button">' . $continent . '</a></li>';
                            }
                            ?>
                        </ul>
            
                    </div>

                    <div class="city">

                        <div class="text-input-group">
                            <input type="text" name="city" id="city" placeholder="city" autocomplete="off" required="required">
                            <label for="city">City</label>
                        </div><br>
                        <div class="text-input-group">
                            <input type="text" name="country" id="country" placeholder="country" autocomplete="off" required="required">
                            <label for="pincode">Pincode</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-input-group">
                <input type="text" name="phone" id="phone" placeholder="Address" autocomplete="off" required="required">
                <label for="firstName">Phone no</label>
            </div>

            <!-- <fieldset class="radio-set">
                <legend>What is your favorite Color?</legend>
                <div class="radios">

                    <div class="radio-wrapper">
                        <input type="radio" name="favColor" id="red">
                        <label for="red"><span>Red</span></label>
                    </div>
                    <div class="radio-wrapper">
                        <input type="radio" name="favColor" id="green">
                        <label for="green"><span>Green </span></label>
                    </div>
                    <div class="radio-wrapper">
                        <input type="radio" name="favColor" id="blue">
                        <label for="blue"><span>Blue</span></label>
                    </div>

                </div>
            </fieldset> -->



            <!-- <fieldset class="checkbox-set">
                <legend>What are your favorite Pizza toppings?</legend>
                <div class="radios radios-checkbox">

                    <div class="radio-wrapper">
                        <input type="checkbox" name="favToppings" id="cheese">
                        <label for="cheese"><span>Cheese</span></label>
                    </div>
                    <div class="radio-wrapper">
                        <input type="checkbox" name="favToppings" id="pepperoni">
                        <label for="pepperoni"><span>Pepperoni</span></label>
                    </div>
                    <div class="radio-wrapper">
                        <input type="checkbox" name="favToppings" id="pineapple">
                        <label for="pineapple"><span>Pineapple</span></label>
                    </div>
                    <div class="radio-wrapper">
                        <input type="checkbox" name="favToppings" id="sausage">
                        <label for="sausage"><span>Sausage</span></label>
                    </div>
                    <div class="radio-wrapper">
                        <input type="checkbox" name="favToppings" id="moreCheese">
                        <label for="moreCheese"><span>More cheese</span></label>
                    </div>

                </div>
            </fieldset> -->


        </form>

    </div>

    <div class="card__footer">
        <button><span>Submit Form</span></button>
        <button class="tertiary"><span>Cancel</span></button>
    </div>
</div>