<?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "braintumor";

    // Create connection
    $conn = mysqli_connect($servername, $user, $pass, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['submit']))
    {
        $name = $_POST['name']; 
        $email = $_POST['email'];   
        $username = $_POST['username'];   
        $password = $_POST['password']; 
        $num = $_POST['num'];  
    }

    function redirect($url) {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }

    $statusMsg = ''; 

    // If the form is submitted 
    if(isset($_POST['submit'])){ 
        $postData = $_POST; 

        // Validate form fields 
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['username'])){ 

            // Validate reCAPTCHA box 
            if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
                // Google reCAPTCHA API secret key 
                $secretKey = '6LcLu6wUAAAAAE3oYSNqHxuJE2HHzKKswZkm74Ne'; 

                // Verify the reCAPTCHA response 
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 

                // Decode json data 
                $responseData = json_decode($verifyResponse); 

                // If reCAPTCHA response is valid 
                if($responseData->success){ 
                    $sql_check = "SELECT id, name, email, username, password FROM userinfo";

                    if (mysqli_num_rows(mysqli_query($conn,$sql_check)) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc(mysqli_query($conn,$sql_check))) {
                    $uname = $row["username"];
                    $passw = $row["password"];

                    if ($uname != $username and $_POST['name'] != null and $_POST['email'] != NULL and $_POST['username'] != NULL and $_POST['password'] != NULL) {
                    $password =  MD5($password);
                    $sql = "INSERT INTO userinfo (name, email, username, password, num) 
                    VALUES ('".$name."', '".$email."', '".$username."', '".$password."', '".$num."')";

                    $result = mysqli_query($conn,$sql);

                    redirect('http://localhost/PythonWebsites/UI/index.php');
                    }
                    else {
                    redirect('http://localhost/PythonWebsites/UI/signup_r.php'); 
                    }
                    }
                    } 
                    else if ($_POST['name'] != Null and $_POST['email'] != NULL and $_POST['username'] != NULL and $_POST['password'] != NULL){
                    $password =  MD5($password);
                    $sql = "INSERT INTO userinfo (name, email, username, password, num) 
                    VALUES ('".$name."', '".$email."', '".$username."', '".$password."', '".$num."')";

                    $result = mysqli_query($conn,$sql);

                    redirect('http://localhost/PythonWebsites/UI/index.php');
                    }
                    else {
                    redirect('http://localhost/PythonWebsites/UI/signup_r.php'); 
                    }
                }else{ 
                    $statusMsg = '<h3 style="position: fixed;top: 40%;bottom: 50%;left: 35%;">Robot verification failed, please try again.</h3>'; 
                } 
            }else{ 
                $statusMsg = '<h3 style="position: fixed;top: 40%;bottom: 50%;left: 35%;">Please check on the reCAPTCHA box.</h3>'; 
            } 
        }else{ 
            $statusMsg = '<h3 style="position: fixed;top: 40%;bottom: 50%;left: 35%;">Please fill all the mandatory fields.</h3>'; 
        } 
    } 
    echo $statusMsg;

    mysqli_close($conn);
?>