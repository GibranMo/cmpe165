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

    <title>Business Casual - Start Bootstrap Theme</title>

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
   
    <br>

    
        <?php
        
        if(isset($_SESSION["pwrd"])) 
        {
            
            $username = "Welcome back, ".$_SESSION["username"];
          print  "<div class=\"address-bar\">".$username."</div>";
          print "<br>";

        }

        ?>

    
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
                <a class="navbar-brand" href="index.html">Welp</a>
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
                        
                        if (isset($_SESSION["pwrd"]) == false )
                        {
                            print "<li class=\"dropdown pull-right\">";
								print "<a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Login/Signup <b class=\"caret\"></b></a>";
								print "<ul class=\"dropdown-menu\">";
                                                                print "<li><a href=\"login.php\">Login</a></li>";
								print "<li><a href=\"signup.php\">Signup</a></li>";
								print "</ul>";
							print "</li>";
                            
                        }else if(isset($_SESSION["pwrd"]))
                            {
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

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">WELP</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Team 2</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <hr class="visible-xs">
                    <div class="col-md-4">
                        <h2>Review 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                        <?php

                        $tbl_name = "Restaurant";
                        $number = 1;
                        $sql = "SELECT iconimage FROM $tbl_name WHERE  id='$number'";

                        $result = $conn->query($sql);
                     
                        if ($result->num_rows === 1)
                        {
                           
                           while ($row = $result->fetch_assoc())
                            {

                                //$icomImage = $row["iconimage"];
                                // <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                                // <img src="img2/sushi2.jpg" height="140" width="180" >
                                //  print "<img src=\"img2/sushi2.jpg\" height=\"140\" width=\"180\" >";
                                echo "<img src=\"img/{$row['iconimage']}\" height=\"250\" width=\"250\">";

                            }   
                            
                        }


                        ?>
                      <!--   <a class="btn btn-default" href="#">More Info</a> --> 
                        <!-- <img src="img/portfolio/tech.jpg" height="140" width="180" > --> 
                    </div>

                <!-- /.col-md-4 
                    <div class="col-md-4">
                        <h2>Review 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                        <a class="btn btn-default" href="#">More Info</a>
                    </div>
    
                    <div class="col-md-4">
                        <h2>Review 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                        <a class="btn btn-default" href="#">More Info</a>
                    </div>
             /.col-md-4 -->
               
                </hr>
            </div>
        </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                    <img src="img/test2.jpg" height="250" width="250" >
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

     <script>
    $("[data-toggle=popover1]").popover({
    html: true, 
    content: function() {
          return $('#popover-content1').html();
        }
    });
    </script>
     
    <script>
    $("[data-toggle=popover2]").popover({
    html: true, 
    content: function() {
          return $('#popover-content2').html();
        }
    });
    </script>


</body>

</html>
