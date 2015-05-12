<?php
    include('connect.php');
    session_start();

    if (isset($_POST['submit'])) {




    $query="INSERT INTO Comment (userID, restaurantID, rating, comment)
    VALUES ('".$_SESSION['username']."','".$_POST['restaurantid']."','".$_POST["rating"]."','".$_POST['comment']."')";

    $result = mysqli_query($conn,$query);


    $selectquery = "SELECT numreviews, rating from Restaurant WHERE id='1'";

    $selectresult = mysqli_query($conn,$selectquery);

    $row = mysqli_fetch_array($selectresult);
    $rating = $_POST["rating"];
    $numreviews = $row['numreviews'];
    $commentrating = $row['rating'];
    $newrating = round(($rating * ($numreviews/ ($numreviews+1))) + ($commentrating * (1 / ($numreviews +1))));
    
    $newnumreviews = $numreviews + 1;

    $updatequery="UPDATE Restaurant SET numreviews ='".$newnumreviews."', rating = '".$newrating."' WHERE id = '1'";

    $updateresult = mysqli_query($conn,$updatequery);

    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>User Profile - Welp</title>

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
                    <a class="navbar-brand" href="index.html">Business Casual</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="container">

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Joe's
                            <strong>Favorites</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive img-border-left" src="img/slide-2.jpg" alt="">
                    </div>
                    <div class="col-md-6"> 
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Post your 
                            <strong> review here </strong>
                        </h2>
                        <hr>
                       <div class = "container">
                    <center>  <div class = "container" class = "col-md-6">
                       <form>
                            <center>
                            <p>
                               Please rate:  
                               <select name = "rating">
                                    <option value="" selected disabled> <strong>Rating</strong></option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                   
                                </select>
                            </p>
                            <center/>
                            <textarea name="comment" cols="50" placeholder= "Comments" rows="10"></textarea>
                           <button type="button" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                      </div> <center/>
                       
                    </div>
                     </div>

                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Read 
                            <strong> Reviews </strong>
                        </h2>
                        <hr>
                    </div>

                   
                    <!--</ul>-->
              
                <ul class = "clearfix">

                    <div class="clearfix"></div>
            </div>
        </div>

        <!-- /.container -->

        <div class="row">
            <div class="box">
                <hr class="visible-xs">
                    <div class="col-md-4">
                        <center>Copyright &copy; Your Website 2014</center>
                    </div>
                </hr>
            </div>
        </div>
           

    
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>


