<h1 class = "ui center aligned header">Join Now</h1>

<div class = "ui text container">
    <form class="ui form segment" action="<?php echo URL; ?>register/createuser" method="post">
        <h4 class= "ui dividing header">Register Patient</h4>

        <div class="field">
            <label for="email">Email</label>
            <input id="email" name = "email" placeholder="Email" type="text">
        </div>
        <div class= "two fields">
            <div class="field">
                <label for="Password">Password</label>
                <input id="Password"  name = "password" placeholder="Password" type="password">
            </div>

            <div class="field">
                <label for="PasswordConfirm">Password Confirm</label>
                <input id="PasswordConfirm" name = "passwordConfirm" placeholder="Confirm Password" type="password">
            </div>
        </div>

        <div class="three fields">
            <div class="field">
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name" placeholder="First Name" type="text" />
            </div>

            <div class="field">
                <label for="Surname">Surname</label>
                <input id="Surname" name="middle_name" placeholder="Surname" type="text">
            </div>

            <div class="field">
                <label for="last_name">Last Name</label>
                <input id="last_name" name="last_name" placeholder="Last Name" type="text">
            </div>
        </div>
        <br/>
        <div class="inline fields">
            <label>Gender</label>
            <div class="field">
                <div class="ui radio checkbox">
                    <input name="gender" value = "male" checked="checked" type="radio">
                    <label>Male</label>
                </div>
            </div>
            <div class="field">
                <div class="ui radio checkbox">
                    <input name="gender" value = "female" type="radio">
                    <label>Female</label>
                </div>
            </div>
        </div>    
        <br/>
        <div class="ui search selection dropdown field">
            <input name="city" type="hidden">
            <i class="dropdown icon"></i>
            <div class="default text">City</div>
            <div class="menu">
                <?php 
                    $cities = Utils::getListOfKenyanCities();
                    foreach ($cities as $city) {
                        echo '<div class="item" data-value="'. $city['id']. '">'.$city['name'].'</div>';
                    }
                ?>
            </div>
        </div>

        <div class="three fields">
            <div class="field">
                <label>Date of Birth</label>
                <select class="ui fluid search dropdown" name="day">
                    <option value="">Day</option>
                    <?php 
                        for($i=1;$i<=31;$i++ ){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="field">
                <br/>
                <select class="ui fluid search dropdown" name="month">
                    <option value="">Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="field">
                <br/>
                <select class="ui fluid search dropdown" name="year">
                    <option value="">Year</option>
                    <?php 
                        for($i=1930; $i<date('Y'); $i++ ){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="field">
            <input type="submit" value= "Register" class ="ui blue button" name = "submit_add_patient">
        </div>

    </form>
</div>
<br/>
