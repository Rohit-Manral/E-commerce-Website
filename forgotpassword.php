<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
  header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Life Style Store</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>FORGOT PASSWORD</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Enter registerd email id to reset your password</i><p>
                                <form action="mails.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                                </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>