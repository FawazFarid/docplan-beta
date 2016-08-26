<!DOCTYPE html>
<html>
    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/semantic.min.css">
        <style type="text/css">
            body > .grid {
                height: 100%;
            }
            .image {
                margin-top: -100px;
            }
            .column {
                max-width: 450px;
            }
        </style>
    </head>
    <body>
        <div class="ui middle aligned center aligned grid">
            <div class="column">
                <h2 class="ui blue image header">
                    <img src="<?php echo URL; ?>web/images/logo.jpg" class="image">
                    <div class="content">
                        Log-in to your account
                    </div>
                </h2>
                <form class="ui large attached fluid form" action="" method="post">
                    <div class="ui stacked segment">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="email" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <input type="submit" value="Login" class="ui fluid large blue button" name="login">
                    </div>
                </form>

                <?php
                //$login = new LoginController();
                //$errors = $login->errors;
                //print_r($errors);
                if (!empty($errors)) {
                    echo "<div class=\"ui error message\">";
                        echo "<i class=\"close icon\"></i>";
                        echo "<div class=\"header\">Login Error</div>";
                        echo "<ul class=\"list\">";
                        foreach ($errors as $error) {
                            echo "<li>" . $error . "</li>";
                        }
                        echo "</ul>"
                    . "</div>";
                }
                ?>



                <div class="ui message">
                    New to us? <a href="<?php echo URL; ?>register/">Sign Up</a>
                </div>
            </div>
        </div>

        <script src="<?php echo URL; ?>js/jquery.min.js"></script>
        <script src="<?php echo URL; ?>js/semantic.min.js"></script>
        <script src="<?php echo URL; ?>js/application.js"></script>


    </body>
</html>