<?php
session_start();
   include("config.php");  
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $sql = "SELECT id FROM emp_pass WHERE id = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];      
      $count = mysqli_num_rows($result);      
      // If result matched $myusername and $mypassword, table row must be 1 row		
      if($count == 1) {
        $_SESSION[login_user]=$myusername;
         header("location: admin_action_page.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html>
    <head>
        <title>HOME|Employee Status</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css">
        <!--This is style for home page*/-->
    </head>
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0;background-color: #C4C4C4">
            <h1>Employye Summary</h1>

            <p>Perfection is always profitable</p>  
        </div>
        <!--Navigation bar-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>  
                </ul>
            </div>  
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col" id="adcol">
                    <div class="container">
                        <h2>Login As A Admin</h2>
                        <div class="card">
                            <img class="imgcontainer" src="boss.png" alt="card-image" style="width:50%">
                            <div class="card-body">
                                <form action=" " method="POST">
                                    <div class="container">
                                        <label for="uname"><b>Username</b></label>
                                        <input type="text" placeholder="Enter Username" name="username" required>				
                                        <label for="psw"><b>Password</b></label>
                                        <input type="password" placeholder="Enter Password" name="password" required>
                                        <button type="submit" name="login">Login</button>
                                        <label>
                                            <input type="checkbox" checked="checked" name="remember"> Remember me
                                        </label>
                                    </div>
                                    <div class="container" style="background-color:#f1f1f1">
                                        <span class="psw">Forgot <a href="#">password?</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="empcol">
                    <div class="container">
                        <h2>Login As A Emloyee</h2>
                        <div class="card">
                            <img class="imgcontainer" src="network.png" alt="card-image" style="width:50%">
                            <div class="card-body">
                                <form action="EmployeeDashboard.php" method="POST">
                                    <div class="container">
                                        <label for="uname"><b>Username</b></label>
                                        <input type="text" placeholder="Enter Username" name="uname" required>
                                        <label for="psw"><b>Password</b></label>
                                        <input type="password" placeholder="Enter Password" name="psw" required>
                                        <button type="submit">Login</button>
                                        <label>
                                            <input type="checkbox" checked="checked" name="remember"> Remember me
                                        </label>                                
                                    </div>
                                   <div class="container" style="background-color:#f1f1f1">
                                        <span class="psw">Forgot <a href="#">password?</a></span>
                                   </div>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Footer</p>
        </div>
    </body>
</html>
