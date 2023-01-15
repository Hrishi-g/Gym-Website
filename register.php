<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/style2.css" />
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <title>Register</title>
</head>

<body>
    <div id="login_page">
        <header class="header" id="home">
            <nav class="header-navigation" aria-label="navigation">
                <div class="logo">
                    <span class="yellow">B</span>Fit
                </div>
                <button id="log_reg" class="btn btn__primary margin-right margin-bottom"> <a href="./login.php"
                        class="link-button" id="log_btn">
                        Login</a></button>
            </nav>

        </header>
        <section>
            <div>
                <img src="./img/header-bg-img.jpg" alt="Header Image" id="login_blur" />
                <div id="whole_page">
                    <form method="post">
                        <div class="container">
                            <h1>Register</h1>
                            <p>
                                Please fill in this form to become a member
                            </p>
                            <hr />

                            <label for="Username"><b>Username</b></label>
                            <input type="text" placeholder="Hrishi@69" name="username" id="username" required />

                            <!-- value="<?php echo $_POST['username']; ?>" -->

                            <br />

                            <label for="email"><b>Email</b></label>
                            <input type="email" placeholder="Enter Email" name="email" id="email" required />

                            <br />

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" id="psw" required />

                            <br />

                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" />
                            <hr />

                            <p>
                                By creating an account you agree to our
                                <a href="#">Terms & Privacy</a>.
                            </p>
                            <button type="submit" name="reg_button" class="registerbtn">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <style>
    #email {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: 2px solid hsl(56, 99%, 32%);
        background: hsl(0, 0%, 15%);
    }

    #email:focus {
        outline: none;
        color: #f1f1f1;
    }

    #log_reg {
        margin-top: 1%;
        margin-right: 10%;
    }

    #log_btn {
        color: black;
    }

    .container {
        max-width: 40%;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
    }

    .logo {
        margin-left: 10%;
    }
    </style>

</body>

</html>

<?php
if (isset($_POST['reg_button'])) {
  Register();
}


function Register(){

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
  $email = $_POST['email'];
  $password = $_POST['psw'];
  $reppassword=$_POST['psw-repeat'];

  if ($password!=$reppassword){
    echo "<script>alert('Password not matched')</script>";
  }else{
    $sql2 = "SELECT username FROM  login WHERE username = '$name'";
    $query = mysqli_query($con,$sql2);
    if ($name == ""){
      echo "<script>alert('Enter valid Details')</script>";
    }
    else if ($query->num_rows > 0){
      echo "<script>alert('Username already exists')
      window.location='login.php'
      </script>";
    }
    else{
          $password=password_hash($password,PASSWORD_DEFAULT);
          $reppassword=password_hash($reppassword,PASSWORD_DEFAULT);
      $sql= $con->prepare("INSERT INTO `login` (`username`, `email`, `psw`, `psw-repeat`) VALUES (?,?,?,?)");
      $sql->bind_param("ssss",$name, $email, $password,$reppassword);
      echo "<script>alert('Registered SUcessfully...Now You can Login')</script>";

      $sql->execute();
  }
  $con->close();
}
}
?>