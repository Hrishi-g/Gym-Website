<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/style2.css" />
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <title>Login</title>
</head>

<body>
    <div id="login">
        <header class="header" id="home">
            <nav class="header-navigation" aria-label="navigation">
                <div class="logo">
                    <span class="yellow">B</span>Fit
                </div>
            </nav>
        </header>
    </div>
    <div>
        <img src="./img/header-bg-img.jpg" alt="Header Image" id="login_blur" />
        <div id="main_page">
            <form method="post">
                <div class="container">
                    <h1>Welcome</h1>
                    <p>Start today to be fit tommorow</p>
                    <hr />

                    <label for="Username"><b>Username</b></label>
                    <br>
                    <input type="text" placeholder="Hrishi@69" name="username" id="username" required />

                    <br />

                    <label for="psw"><b>Password</b></label>
                    <br>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" required />

                    <hr />

                    <button type="submit" name="login_btn" class="registerbtn">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
    <style>
    .container {
        max-width: 40%;
        height: 20%;
    }

    .logo {
        margin-left: 10%;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
    }
    </style>
</body>

</html>

<?php
if (isset($_POST['login_btn'])) {
  Login();
}
function Login(){
  // echo "<h1>Clicked</h1>";
  $server="localhost";
  $username="root";
  $password="";
  $database="gym_website";

  $con = mysqli_connect($server,$username,$password,$database);
  // echo "success connecting to database"

if (!$con){
  echo "not connected";
}
  $name = $_POST['username'];
  $password = $_POST['psw'];

  $sql3 = mysqli_query($con,"SELECT * FROM  login WHERE username = '$name'");

  if(mysqli_num_rows($sql3)>0){
    $row=mysqli_fetch_assoc($sql3);
    $verify=password_verify($password,$row['psw']);
    if($verify==1){
    //      echo "<script>
    // document.getElementById('username').value = '';
    // </script>";
    header('Location:'.'dashboard.html');
    }else{
        echo "<script>alert('Enter correct Password')</script>";
    }
  }else{
        echo "<script>alert('Enter correct Username')</script>";
  }
    $con->close();
}
?>