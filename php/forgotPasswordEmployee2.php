<?php
//if($_SERVER["REQUEST_METHOD"] =="POST")
//{
//
//    $errors=[];
//
//    if(!isset($_POST["Username"]))
//    {
//        array_push($errors,"Username is required .");
//    }
//    elseif (strlen($_POST["Username"]) < 6)
//    {
//        array_push($errors,"Username should be more than 6 charactar.");
//    }
//    elseif (strlen($_POST["Username"]) > 100)
//    {
//        array_push($errors,"Username should be more than 100 charactar.");
//    }
//
//
//
//    if(!isset($_POST["Password"]))
//    {
//        array_push($errors,"Password is required .");
//    }
//    elseif (strlen($_POST["Password"]) < 6)
//    {
//        array_push($errors,"Password should be more than 6 charactar.");
//    }
//    elseif (strlen($_POST["Password"]) > 100)
//    {
//        array_push($errors,"Password should be more than 100 charactar.");
//    }
//
//
//    if (count($errors)<=0)
//    {
//
//        $Username = $_POST["Username"];
//        $Password = $_POST["Password"];
//
//        print_r($Username);
//        echo "<br>";
//        print_r($Password);
//        echo "<br>";
//
//    }
//
//
//
//}
//
//?>


<!-----------------------------------------{dataBase}---------------------------------------------------------------------------->

<?php
$errors=[];



if (isset($_POST['txtUserLogin'])  )
{
    $uname=$_POST['txtUserLogin'];
//    $upass=$_POST['txtUserPass'];

    try
    {
        $db = new mysqli('localhost','root','','drivingschool');
        $qriStr="select * from loginemployees";
        $res=$db->query($qriStr);
        for($i=0;$i<$res->num_rows;$i++)
        {
            $row=$res->fetch_object();
            if ( $row->LoginName==$uname )
            {
                header('location:forgotPasswordEmployee3.php');
            }
            else
            {
//                echo "<h3 style='color: red' >UserName and/or Password are not coorect !!!</h3> ";
                header('location:forgotPasswordEmployee3.php');
//                array_push($errors,"The Email address dose not exist !!!");
            }

        }
        $db->close();
    }
    catch (Exception $e)
    {

    }



}


?>
<!--------------------------------------------------------------------------------------------------------------------->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="Staylesheets/StudentLogin.css">
    <title>Bootstrap Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Staylesheets/mainCss.css">
    <!------------------------------{To link the Footer}------------------------------------->
    <link rel="stylesheet" href="../Staylesheets/Icon.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--------------------------------------------------------------------------------------->

    <!--    --------------------------------------------------------------------------------------------------------------->

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="Staylesheets/mainCss.css" rel="stylesheet">

    <!--    --------------------------------------------------------------------------------------------------------------->
</head>

<body>
<!-------------------------------------------------------------------------------------------------------------------->
<!--<div id="menu"  >-->
<!--    <a href="mainPage.html"><img src="../pic/logo.png" alt="" width="230" height="40" ></a>-->
<!--    <ul>-->
<!--        <li>-->
<!--            <a href="../mainPage.html"><i class="fa fa-home"></i> Home</a>-->
<!--        </li>-->
<!---->
<!--        <li>-->
<!--            <a href="#About"><i class="fa fa-address-card"></i>  About us</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#Courses"><i class="fas fa-book"></i> Courses</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#Service"><i class="fa fa-address-card"></i> Service</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#Contact"><i class="fa fa-phone"></i>   Contact</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#Login"><i class="fa fa-sign-in"></i>      Login</a>-->
<!--            <div class="Login-menu-1">-->
<!--                <ul>-->
<!--                    <li><a href="StudentLogin.php"> Student </a> </li>-->
<!--                    <li><a href="EmployeeLogin.php"> Employee </a> </li>-->
<!--                    <li><a href="AdminLogin.php"> Admin </a> </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </li>-->
<!--    </ul>-->
<!--</div>-->
<!--------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------------------------------------------------------------->
<div class="wrapper">
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="index.html">
                            <h1>Driving School </h1>
                            <!-- <img src="img/logo.jpg" alt="Logo"> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-calendar"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Opening Hour</h3>
                                    <p>sat - wed, 8:00 - 2:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Location</h3>
                                    <p>Nablus - sufian street</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="../mainPage.html" class="nav-item nav-link active">Home</a>
                        <a href="../about.html" class="nav-item nav-link">About</a>
                        <a href="../service.html" class="nav-item nav-link">Service</a>
                        <!--                        <a href="team.html" class="nav-item nav-link">Courses</a>-->
                        <a href="../contact.html" class="nav-item nav-link">Contact</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                            <div class="dropdown-menu">
                                <a href="AdminLogin.php" class="dropdown-item">Admin</a>
                                <a href="EmployeeLogin.php" class="dropdown-item">Employee</a>
                                <a href="StudentLogin.php" class="dropdown-item">Student</a>

                            </div>
                        </div>

                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!--------------------------------------------------------------------------------------------------------------------->

    <div class="container my-5">

        <img  style="margin-left: 900px; position: relative;position: absolute"height="400"  width="260" src="../images/EmployeeLogin3.png" alt="">

        <div class="row">
            <div class="col-12 col-md-6 offset-0 offset-md-3">
                <div class="card shadow border shadow-lg">
                    <div class="card-body">
                        <!--                        <img style=" padding-left: 160px" width="340" src="../images/EmployeeLogin.png" alt="">-->

                        <h2 class="text-center" style="font-family: 'Bold Italic Art';alignment: center">

                            Code verification

                        </h2>

                        <li style="background-color:#b3ffb3;height: 50px ;text-align: center;padding: 10px">
                            <?php echo 'We have sent a password reset to your email . '?>
                        </li>
<!---->
<!--                        --><?php //if(isset($errors) &&count($errors)>0) {?>
<!---->
<!--                            <div class="alert-danger alert">-->
<!---->
<!--                                <ul class="my-0 list-unstyled">-->
<!--                                    --><?php //foreach ($errors as $error){ ?>
<!--                                        <li>-->
<!--                                            --><?php //echo $error ;?>
<!--                                        </li>-->
<!--                                    --><?php //} ?>
<!--                                </ul>-->
<!--                            </div>-->
<!---->
<!--                        --><?php //   }     ?>

                        <form action="forgotPasswordEmployee2.php" method="post">
                            <!--                        <br><br>-->
                            <div class="from-group row">
                                <label for="Username" class="col-form-label col-12">
                                    Enter Code
                                </label>

                                <div class="col-12">
                                    <input type="text" name="txtUserLogin" class="form-control">
                                </div>
                            </div>

                            <br>



                            <div class="text-center">

                                <input class="btn btn-primary" type="submit" style="width: 290px;border-radius: 50px"  value="Continue">

                                <!--                            <button class="btn btn-primary" type="submit" style="width: 290px;border-radius: 50px" >-->
                                <!--                                <a href="" style="text-decoration:none ;color: white">   Login </a>-->
                                <!--                            </button>-->


                            </div>



                        </form>

                    </div>

                </div>

            </div>

        </div>



    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>




    <br><br><br><br>




    <!------------------------------{To link the Footer}------------------------------------->
    <link rel="stylesheet" href="../Staylesheets/Icon.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--------------------------------------------------------------------------------------->


    <br><br><br><br><br><br>

    <!------------------------------------------------{Footer}------------------------------------------------------------->
    <footer class="Footer">
        <div class="bottomMenuText" style="height: 100px">

            <div class="wrapper">

                <div class="button">
                    <a href="https://www.facebook.com/mohammad.halaweh.526">
                        <div class="icon" style="color:#0a58ca"><i  class="fab fa-facebook-f"></i></div>
                        <span>Facebook</span>
                    </a>
                </div>

                <div class="button">
                    <a href="https://twitter.com/">
                        <div class="icon"style="color:#0e76a8"><i  class="fab fa-twitter"></i></div>
                        <span>Twitter</span>
                    </a>
                </div>

                <div class="button">
                    <a href="https://www.instagram.com/">
                        <div class="icon"style="color:#E1306C"><i  class="fab fa-instagram"></i></div>
                        <span>Instagram</span>
                    </a>
                </div>

                <div class="button">
                    <a href="https://www.youtube.com/channel/UC3gf4o1mZEBIuLFCLPDGRYQ">
                        <div class="icon"style="color:red"><i  class="fab fa-youtube"></i></div>
                        <span>YouTube</span>
                    </a>
                </div>

            </div>
        </div>
    </footer>
    <!------------------------------------------------{End Footer}--------------------------------------------------------->
</body>

</html>


<!---------------------------------------------------------------------------------------------------------------------->
