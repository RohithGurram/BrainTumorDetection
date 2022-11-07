<?php
session_start();
include 'header.php';
?>
		<div class="container" id="some">
			<form action="process_reg.php" method="post" name="signup" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><h3>Full Name: </h3></td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td><h3>Email: </h3></td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td><h3>Username: </h3></td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td><h3>Password: </h3></td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td><h3>Mobile Number: </h3></td>
                        <td><input type="text" name="num"></td>
                    </tr>
                </table><br/>
                <div class="g-recaptcha" style="padding-left: 30px;" data-sitekey="6LcLu6wUAAAAAATnKvGgo2rVgj4I4aEi_aBnIbFa" data-callback="correctCaptcha"></div><br/>
                <span style="padding-left: 150px;"><input type="submit" name="submit" value="Submit"></span>
            </form>
            <br/>
            <h5><span style="padding-left: 100px;">Already member?<a href="login.php">Login</a></span></h5>
		</div>
<?php
include 'footer.php';
?>
