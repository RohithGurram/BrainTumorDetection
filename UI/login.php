<?php
session_start();
include 'header.php';
?>
		<div class="container" id="some">
			<form action="process.php" method="post" name="login">
                <table>
                    <tr>
                        <td><h3>Username: </h3></td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td><h3>Password: </h3></td>
                        <td><input type="password" name="password"></td>
                    </tr>
                </table>
                <br/>
                <span style="padding-left: 200px;"><input type="submit" name="submit" value="Submit"></span>
            </form>
            <br/><br/>
            <h5><span style="padding-left: 130px;">New?<a href="signup.php"> Signup</a></span></h5>
		</div>
<?php
include 'footer.php';
?>
