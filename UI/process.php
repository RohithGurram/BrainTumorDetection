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
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    
    function redirect($url) {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }

    $sql = "SELECT id, name, email, username, password, num FROM userinfo";

    $result = mysqli_query($conn,$sql);
    
    $password =  MD5($password);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $uname = $row["username"];
            $passw = $row["password"];            
            if ($uname == $username && $passw == $password){
                    session_start();
                    $_SESSION['uname'] = $uname;
                    redirect('http://localhost/PythonWebsites/UI/index.php');
                }
            else {
                echo "<script>alert('$password, $passw');</script>";
                // redirect('http://localhost/PythonWebsites/UI/signup.php'); 
            }
        }
    } else {
        redirect('http://localhost/PythonWebsites/UI/signup.php');
    }

    mysqli_close($conn);
?>