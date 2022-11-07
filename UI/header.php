<!DOCTYPE html>
<html>
	<head>
		<title>First Website</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <style>
            #some{
                position: fixed;
                top: 30%;
                left: 35%;
            }
            #footer{
                position: fixed;
                bottom: 0%;
                left: 43%;
            }
        </style>
	</head>
	<body style="background-color: skyblue;">
        <div style="background-color: white;">
            <div class="container row" style="padding-top: 5px; padding-left: 55px; padding-bottom: 0px;">
                <div class="col-md-7">
                    <h4 style="color: #000;">Brain Tumor</h4>
                </div>
                <div class="col-md-2">
                    <h5><a href="index.php" style="color: #000;">Home</a></h5>
                </div>
                <div class="col-md-2">
                    <h5><a href="Main.php" style="color: #000;">Process</a></h5>
                </div>
                <div class="col-md-1">
                    <?php
                      if (isset($_SESSION['uname'])) {
                        // echo'<h5><a href="#" style="color: #000;">'.$_SESSION['uname'].'</a></h5>';
                        echo'<h5><a href="logout.php" style="color: #000;">Logout</a></h5>';
                      }
                      else {

                      echo '<h5><a href="login.php" style="color: #000;">Login</a></h5>';
                      }

                    ?>
                </div>
            </div>
        </div>
