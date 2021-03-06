<?php
include('connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Welp</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/business-casual.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="brand">Welp</div>
        <div class="address-bar">One Washington Square, San Jose, CA 95192</div>

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="index.php">Business Casual</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">Home</a>
                        </li>


                        <li>
                            <a href="search.php">Advanced Search</a>
                        </li>





                        <li class="dropdown pull-right">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Resources <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <!--<li><a href="signup.php">Sign Up</a></li>-->
                                <!--<li class="divider"></li>-->
                                <!--<li><a href="#">Log out</a></li>-->
                            </ul>
                        </li>

                        <?php
                        if (isset($_SESSION["pwrd"]) == false) {
                            print "<li class=\"dropdown pull-right\">";
                            print "<a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Login/Signup <b class=\"caret\"></b></a>";
                            print "<ul class=\"dropdown-menu\">";
                            print "<li><a href=\"login.php\">Login</a></li>";
                            print "<li><a href=\"signup.php\">Signup</a></li>";
                            print "</ul>";
                            print "</li>";
                        } else if (isset($_SESSION["pwrd"])) {
                            print "<li>";
                            print "<a href=\"logout.php\">Logout</a>";
                            print "</li>";
                        }
                        ?>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="container">

<?php
$emptyErr = $wrongErr = "";
$email = $pass = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pwrd'];
   
    
    
    $query1 = "SELECT passWord FROM users WHERE email='$email'";
    $result1 = $conn->query($query1);
    $resultPass = $result1->fetch_row();
    $password = $resultPass[0];
    
    if ($email == "" || $pass =="") {
        $emptyErr = "You left something empty. Fix that!";
    } else if ($result1->num_rows != 1) {
        $wrongErr = "Your email or password is not correct. Fix that!";
    } else if($pass != $password){
        $wrongErr = "Your email or password is not correct2. Fix that!";
    }else {

        $query = "SELECT adminBoolean, userName, email, userID FROM users WHERE email='$email' and passWord='$pass'"; 
        $result = $conn->query($query);
        $resultRow = $result->fetch_row();
        $_SESSION["isAdmin"] = $resultRow[0];
        $_SESSION["username"] = $resultRow[1];
        $_SESSION["email"] = $resultRow[2];
        $_SESSION["pwrd"] = $pass;
        $_SESSION["userID"] = $resultRow[3];
        header('Location: index.php');
    }
}
?>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Sign up for
                            <strong>Welp</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive img-border-left" src="img/slide-2.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">



                            <p>Email:
                                <br>
                                <input type="text" size="35" id="email" name="email" placeholder="Please enter email" class="input-small">
                            </p>

                            <p>Password:
                                <br>
                                <input type="password" size="35" id="password" name="pwrd" placeholder="Password" class="input-small">
                            </p>

                            <button type="submit" id="btnLogin" class="btn btn-default btn-block">Log in</button>
                            <?php 
                                echo $emptyErr; 
                                echo $wrongErr;
                               
                            ?>
                            </div>

                        </form>
                        <div class="clearfix"></div>
                    </div>
            </div>

            </div>
            <!-- /.container -->

            <div class="row">
            <div class="box">
                <div clas = "container"><center>
                    <hr class="visible-xs">
                        Copyright &copy; Your Website 2014
                    </hr>
                </div>
            </div>
        </div>

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

    </body>

</html>
