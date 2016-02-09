
<?php

require_once('connect.php');
$error = false;
$success = false;
​
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<br> id_field: ". $row["id_field"]. ", " . "    AnotherThing: ". $row["AnotherThing"]. ", " . "One Last field:". $row["One Last field"] . "<br>";
    }
} else {
    echo "Not being used";
}
​
​
​
​
if ( ! empty($_POST['username'])){
    $name = ($_POST['username']);
    insertInfo();
}
​
function checkPass () {
    ​
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "mydb";
    ​
    ​
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ​
    ​
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    ​
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ​
            $usrn = $row["Username"];
            $name = ($_POST['username2']);
            $pass = ($_POST['password3']);
            switch ($usrn) {
                case ($usrn == $name):
                    $pass2= $row["Password"];
                    ​
                    global $used;
                    $used = "Your Username was accepted!";
                    ​
                    ​
                    ​
                    ​
                    ​
                    ​
                    if ($pass2 == $pass) {
                        echo "<script type='text/javascript'>alert('victory');</script>";
                        global $used3;
                        header('Location: home.php');
                        $used3 = "Your Password accepted.";
                    }
                    else {
                        global $used3;
                        $used3 = "<br> Your Password was denied.";
                    }
                    ​
                    ​
                    break;
                case ($usrn != $name):
                    global $used;
                    if ($used == "Your Username was accepted!") {
                        ​
                        ​
                        ​
                        ​
                        ​
                    }
                    else {
                        $used = "Your Username is incorrect.";
                    }
                    ​
                    break;
            }
            ​
        }
        ​
        // output data of each row
        ​
    } else {
        echo "No results found in table.";
    }
}
​
​
$conn->close();
​
function insertInfo () {
    echo "hi thar";
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "mydb";
    ​}
    ​

​
​
if ( ! empty($_POST['username2'])){
    $name = ($_POST['username2']);
    checkPass();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" script-name="aguafina-script" src="http://use.edgefonts.net/aguafina-script.js"></script>

</head>
<body>
<div class="signInContainer">
    <!--HEADER-->
    <header class="head">
        <h1>Lunch Lady</h1>
    </header>
    <!-- END HEADER-->
    <div class="box">

        <div class="rightside">
            <img src="pics/sign%20in.jpg">
        </div>

        <header class="title">
            <h1>Sign-In</h1>
        </header>


        <div class="indexContent">
            <form name='form2' method='post' id="form2" class="navbar-form navbar-right">
                <input type='text' name="username2" id='username2' placeholder="Username" class="form-control">
                <input type='password' name='password3' id='password3' placeholder="Password" class="form-control">
            </form>
            <button onclick="signin()" > Sign In! </button>
        </div>
    </div>
</div>
<!--FOOTER-->
<footer>
    <div class="copyright">
        <p>&copy 2015 - Lunch Lady,Inc. All Rights Reserved</p>
    </div>
    <div class="logo">
        <img src="pics/logo.png">
    </div>
    <div class="links">
        <a href="index.html">Home</a>
        <a href="signIn.php">Sign-In</a>
        <a href="">About Us</a>
    </div>
</footer>
</body>
</html>