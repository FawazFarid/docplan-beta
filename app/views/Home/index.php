<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
    <div class="ui container">
        <a class="active item">Home</a>
        <a class="item">Work</a>
        <a class="item">Company</a>
        <a class="item">Careers</a>
        <div class="right menu">
            <div class="item">
                <a class="ui button">Log in</a>
            </div>
            <div class="item">
                <a class="ui primary button">Sign Up</a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a href = "<?php echo URL; ?>" class="active item">Home</a>
    <a class="item">Work</a>
    <a class="item">Company</a>
    <a class="item">Careers</a>
    <a href = "<?php echo URL; ?>login" class="item">Login</a>
    <a href = "<?php echo URL; ?>register/" class="item">Sign-up</a>
</div>

<!-- Main Content -->
<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a href="<?php echo URL; ?>" class="active item">Home</a>
                <a href="<?php echo URL; ?>about" class="item">About</a>
                <a href="<?php echo URL; ?>contact" class="item">Contact</a>
                <a href="<?php echo URL; ?>career" class="item">Careers</a>
                <div class="right item">
                    <a href = "<?php echo URL; ?>login" class="ui inverted button">Log in</a>
                    <a href = "<?php echo URL; ?>register/" class="ui inverted button">Sign Up</a>
                </div>
            </div>
        </div>

        <div class = "ui container text">
            <h1 class = "ui header inverted">Look up for doctor near you</h1>
            <div class = "container fluid findbg">
                <form class = "ui form">
                    <div class = "field">
                        <div class = "fields">
                            <div class = "eleven wide field">
                                <div class = "ui search">
                                    <div class = "ui left icon input">
                                        <i class = "inverted circular blue map icon"></i>
                                        <input class = "prompt" type = "text" name = "location" placeholder = "Enter Your Location...">
                                    </div>
                                </div>
                            </div>
                            <div class = "field">
                                <div class = "ui selection dropdown">
                                    <div class = "default text">Specialty</div>
                                    <i class = "dropdown icon"></i>
                                    <input type = "hidden" name = "specialty">
                                    <div class="menu">
                                        <?php
                                        $specialties = Utils::getSpecialties();
                                        foreach ($specialties as $specialty) {
                                            echo '<div class="item" data-value="' . $specialty['id'] . '">' . $specialty['specialty'] . '</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <button class = "ui submit blue container animated button" tabindex="0">
                            <div class= "visible content"><i class = "search icon"></i>Search</div>
                            <div class= "hidden content"><i class = "search icon"></i>Find Your Doctor &nbsp;</div>

                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">We Work with top Insurance Companies</h3>
                    <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
                    <h3 class="ui header">Are You A Qualified Doctor?</h3>
                    <p>Join us and interact with millions of patients from all over Kenya!</p>
                </div>
                <div class="six wide right floated column">
                    <img src="images/wireframe/white-image.png" class="ui large bordered rounded image">
                </div>
            </div>
            <div class="row">
                <div class="center aligned column">
                    <a href="<?php echo URL;?>Register/createdoctor" class="ui huge button">Join Us Now.</a>
                </div>
            </div>
        </div>
    </div>


    <div class="ui vertical stripe quote segment">
        <div class="ui equal width stackable internally celled grid">
            <div class="center aligned row">
                <div class="column">
                    <h3>"What a Company"</h3>
                    <p>That is what they all say about us</p>
                </div>
                <div class="column">
                    <h3>"I shouldn't have gone with their competitor."</h3>
                    <p>
                        <img src="assets/images/avatar/nan.jpg" class="ui avatar image"> <b>Humphrey Musonye</b> CEO Stuplan Inc.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="ui vertical stripe segment">
        <div class="ui text container">
            <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
            <p>Instead of focusing on content creation and hard work, we have learned how to master the art of delivering the best services available</p>
            <a class="ui large button">Read More</a>
            <h4 class="ui horizontal header divider">
                <a href="#">Case Studies</a>
            </h4>
            <h3 class="ui header">Did We Tell You About Our Services?</h3>
            <p>Yes I know you probably disregarded the earlier boasts as non-sequitor filler content, but its really true. We really do have the best services</p>
            <a class="ui large button">I'm Still Quite Interested</a>
        </div>
    </div>

