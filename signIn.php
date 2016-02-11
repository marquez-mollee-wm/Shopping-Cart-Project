
<?php

include_once('connect.php');


    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT count(*) FROM users WHERE(
     username='".$uname."' and  password='".$pass."')";




    $qury = mysql_query($sql);

    $result = mysql_fetch_array($qury);

    if($result[0]>0)
    {
        echo "Successful Login!";
        $_SESSION['userName'] = $uname;
        echo "<br>Welcome".$_SESSION['userName']."!";

    }
    else
    {
        echo "Login Failed";
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
                <input type='text' name="username" id='username2' placeholder="Username" class="form-control">
                <input type='password' name='password' id='password3' placeholder="Password" class="form-control">
                <input type='submit' name='submit'>
            </form>
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