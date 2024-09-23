<?php

// include ("../../config/e_database.php");

use Config\e_database;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }


        .signin-form {
            background-color: #e6e6e6;
            padding: 20px;
            display: inline-block;
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 8px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button[type="submit"] {
            padding: 8px 20px;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f2f2f2;
            cursor: pointer;
        }

        .navigation li {
            display: inline;
            margin: 10px;
        }

        .navigation a {
            text-decoration: none;
            color: #333;
        }

    </style>
</head>

<body>
    <!-- <?php
    session_start();
    if (isset($_SESSION["userid"]) && $_SESSION["userid"]) { //to check if the user login or not
    ?>
        <ul class="navigation">
            <li><a href="#"><?= 'Welcome ' . $_SESSION['useruid'] ?></a></li>
            <li><a href="includes/logout.inc.php">Logout</a></li>
        </ul>
    <?php } else { ?>
        <ul class="navigation">
            <li><a href="#" style="color:blue;">Sign In</a></li>
            <li><a href="#" style="color:green;">Sign Up</a></li>
        </ul>
    <?php }
    if (isset($_GET['error'])) { //to show the error
        print_r("<h5 class='error-message'>" . $_GET['error'] . "</h5>");
    }
    ?> -->


    <div class="signin-form" style="width: 50%;   "  >
        <h4>Login IN</h4>
        <?php

            if(isset($_SESSION['login-failed'])){
                echo $_SESSION['login-failed'];
                unset($_SESSION['login-failed']);
            }
            if(isset($_SESSION['no-login-massage'])){
                echo $_SESSION['no-login-massage'];
                unset($_SESSION['no-login-massage']);
            }
            ?>
        <form action="" method="post">
            <input type="text" name="email" placeholder="email"><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button type="submit" name="submit">LogIn</button>
        </form>
    </div>
</body>

</html>

<?php

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    // $password=md5($_POST['password']);
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE email='$email' AND password='$password' ";
    $res=mysqli_query($con,$sql);



    $count=mysqli_num_rows($res);

    if($count==1){

        // $row=mysqli_fetch_assoc($res);
        // $id=$row['id'];
        // // echo "yes";
        // $_SESSION['login']="Login succecfuly";
        // $_SESSION['user']=$username;
        // header("../views/dashbord.php");
        echo "sucsses";
    }else{
        // $_SESSION['login-failed']="Login-failed";
        echo "faild";

    }
}

?>
