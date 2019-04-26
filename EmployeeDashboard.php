<!DOCTYPE html>
<html>
    <head>
        <title>HOME|Employee Status</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <!--This is style for home page*/-->
        <script>
            function changeContent() {
                var cont = document.getElementById("container");
                cont.src = "Add_Employee.php";

            }


        </script>


        <style>

            .footer {
                left: 0;
                bottom: 0;
                width: 100%;
                background-color:#4F4444;
                color: white;
                text-align: center;
            }
            .btn{
                margin-bottom: 10%;
                margin-right: 10%;
                width: 100%;
                background:#F4F4F4;
            }
            .btn-group-vertical{
                margin-right: 10%;
            }
        </style>
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
                        <a class="nav-link" href="index.php" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Employee Dashboard</a>
                    </li>  
                </ul>
            </div>  
        </nav>
        <div class="container-fluid Data-body">
            <h3>Welcome Mr.{{ User }}in My Company</h3>
            <div class="row">
                <div class="col-sm-2  menu-item" style="background-color:#DCD0C0;">
                    <div class="btn-group-vertical">
                        <button type="button" class="btn " onclick="changeContent()">Atte. Submit</button>
                        <button type="button" class="btn ">View Attendance</button>
                        <button type="button" class="btn ">Your profile</button>
                    </div></div>
                <div class="col-sm-10 Data-container" id="container" style="background-color:rgb(245, 234, 237);">50%</div>
            </div>
        </div>
        <div class="footer">
            <p>Footer</p>
    </body>
</html>