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

    <title>Search - Welp</title>

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
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
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
                    <h2 class="intro-text text-center">About
                        <strong>Welp</strong>
                    </h2>
                    <hr>
                </div>

                <form action= "search.php" method="POST" >
               <div class = "row">
                <div class="col-md-4">
                  <p>
                   Search by Category:
                   <select name = "category"> 
                        <option value="" selected disabled> <strong>Please select</strong></option>
                        <option value="name">Name</option>
                        <option value="city">City</option>
                        <option value="foodtype">Food type</option>
                        <option value="placetype">Place type</option>
                        <option value="rating">Rating</option> </select></p>
                    </div>
                  <div class="input-append" >
                            <p> Search by Criteria:
                            <input name = "criteria" data-provide="typeahead" data-items="4"  type="text" 
                               class="span2 search-query">
                            <button class="btn">Search</button>
                        
                    </div>

                    </div>
                 </form>
                 </div>
        </div>
   
                <div class="clearfix"></div>

<div class="row">
            <div class="box">
                <ul class = "clearfix">

                <?php  

                   
                        include('connect.php');
                        echo "<div class=\"col-lg-12\">";
                            echo "<hr>";
                                echo "<h2 class=\"intro-text text-center\">Your";
                                    echo "<strong> Search Results</strong>";
                                echo"</h2>";
                            echo"<hr>";
                        echo"</div>";

                       
                        $category = array_key_exists('category', $_POST) ? $_POST['category'] : null;

                       
                        $criteria = array_key_exists('criteria', $_POST) ? $_POST['criteria'] : null;
                        $query = "SELECT * FROM Restaurant WHERE $category LIKE '%".$criteria."%'";
                        $result = mysqli_query($conn, $query) or die('error getting results');
                        $num_rows = mysqli_num_rows($result);

                        if($result === FALSE) { 
                                die(mysql_error()); // TODO: better error handling
                            }

                        $i=0;
                                while ($i < $num_rows) {

                                $name=mysql_result("name",$i,$result);
                                $address=mysql_result($result,$i,"address");
                                $city=mysql_result($result,$i,"city");
                                $placetype=mysql_result($result,$i,"placetype");
                                $foodtype=mysql_result($result,$i,"foodtype");
                                $rating=mysql_result($result,$i,"rating");

                              
                                echo '<div id="result"> 
                               
                                    <p>Name:'.$name.'</br>
                                    City:'.$city.'</br>
                                    Place Type:'.$placetype.'</br>
                                    Food Type:'.$foodtype.'</br>
                                    Rating:'.$rating.'</p>                                        
                                </div>';
                                    
                                

                                $i++;
                                
                                
                            }

                            
                       


                            

                   
                
                ?>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>

    <!-- /.container -->

 <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>

</html>