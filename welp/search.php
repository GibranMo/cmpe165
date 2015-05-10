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
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/slide-2.jpg" alt="">
                </div>

                <form action= "search.php" method="POST" >
                <div class="col-md-6">
                  <p>
                   Search restaurants near:  
                   <select name = "city">
                        <option value="" selected disabled> <strong>Please select</strong></option>
                        <option value="San Jose">San Jose, CA</option>
                        <option value="San Francisco">San Francisco, CA</option>
                        <option value="Fremont">Fremont, CA</option>
                        <option value="Santa Clara">Santa Clara, CA</option>
                        <option value="Sunnyvale">Sunnyvale, CA</option>
                        <option value="Stockton">Stockton, CA</option>
                    </select>
                </p>
                 <p>
                   Type: 
                   <select name="food">
                        <option value="" selected disabled> <strong>Please select</strong></option>
                        <option value="Indian">Indian</option>
                        <option value="Mexican">Mexican</option>
                        <option value="Italian">Italian</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Japanese">Japanese</option>
                        <option value="American">American</option>
                        <option value="Japanese">French</option>
                    </select>
                </p>
                 <p>
                   Price:  
                   <select name = "price">
                        <option value="" selected disabled> <strong>Please select</strong></option>
                        <option value="1">$</option>
                        <option value="2">$$</option>
                        <option value="3">$$$</option>
                        <option value="4">$$$$</option>
                    </select>
                </p>
                <p>
                   Sort by:  
                   <select>
                        <option value="" selected disabled> <strong>Please select</strong></option>
                        <option value="">Highest Rated</option>
                        <option value="">Most-reviewed</option>
                    </select>
                </p>

                <p>
                    <?php
                        //echo "<input class=\"input-small\" type=\"text\" value=\"Generic\" placeholder="restaurant name, etc" size=\"45\" maxlength = \"80\" name = \"textsearch\" >";
                    ?>
                </p>
                 <!--<button type="button" id="btnLogin" class="btn btn-default btn-xlarge">Go</button>-->
                <input type="submit" name="submit" id="btnLogin" class="btn btn-default btn-block" value= "Search">
                
                </div>

                <div class="clearfix"></div>
            </form>

            <div class="rate-ex1-cnt">
                <div id="1" class="rate-btn-1 rate-btn"></div>
                <div id="2" class="rate-btn-2 rate-btn"></div>
                <div id="3" class="rate-btn-3 rate-btn"></div>
                <div id="4" class="rate-btn-4 rate-btn"></div>
                <div id="5" class="rate-btn-5 rate-btn"></div>
            </div>
           
            </div>
        </div>        


        <div class="row">
            <div class="box">
                <ul class = "clearfix">

                <?php  

                    if (isset($_POST["submit"])) 
                    {  
                        
                        echo "<div class=\"col-lg-12\">";
                            echo "<hr>";
                                echo "<h2 class=\"intro-text text-center\">Your";
                                    echo "<strong> Search Results</strong>";
                                echo"</h2>";
                            echo"<hr>";
                        echo"</div>";

                        /* Default: query */
                        $counter = 0; //to keep track of 'ANDs' in queries
                        $sql = "SELECT iconimage, name, address, rating, city, placetype, cost, tags FROM restaurant";

                        if (isset($_POST['food'])) 
                        {  
                        
                            $food = $_POST['food'];
                            $subquery = " WHERE foodtype = '$food' ";
                            $sql = $sql.$subquery;
                            $counter++;

                        } 


                        if (isset($_POST['price'])) 
                        {
                            $price = $_POST['price'];

                            if ($counter > 0)
                            {
                                $subquery = " AND cost = '$price' ";
                            }
                            else
                                $subquery = " WHERE cost = '$price' ";

                            $sql = $sql.$subquery;
                            $counter++;

                        }

                        if (isset($_POST['city'])) 
                        {
                            $city = $_POST['city'];

                            if ($counter > 0)
                            {
                                $subquery = " AND city = '$city' ";
                            }
                            else
                                $subquery = " WHERE city = '$city' ";

                            $sql = $sql.$subquery;
                            $counter++;

                        }



                            $result2 = $conn->query($sql);

                            if ($result2->num_rows > 0)
                            {
                                while ($row = $result2->fetch_assoc())
                                {
                                    $restname = $row['name'];
                                
                                        echo "<br>";
                                    
                                    
                                            echo "<h2>";
                                                echo "<strong>".$restname."</strong>";
                                            echo "</h2>";
                                                echo "<br>";
                                                echo "<img src=\"img/{$row['iconimage']}\" height=\"250\" width=\"250\">";


                                            $city = $row['city'];

                                            $tagsText = $row['tags'];

                                            echo "<h2>City: ";
                                                echo "<strong> $city</strong>";
                                            echo"</h2>";
                                            
                                            echo "<p><b>'$tagsText'</b></p> ";
                                            
                                           
                                            
                                            if ($row['rating'] == 5)
                                            { 

                                                 //echo "<div>";
                                                    echo "<img class=\"img-responsive img-border-left\" src=\"img/r5.png\">";
                                                 //echo "</div>";

                                            }
                                            else if ($row['rating'] == 4)
                                            {
                                                //echo "<div>";
                                                    echo "<img class=\"img-responsive img-border-left\" src=\"img/r4.png\">";
                                                 //echo "</div>";

                                            }
                                            else if ($row['rating'] == 3)
                                            {
                                                echo "<div>";
                                                    echo "<img class=\"img-responsive img-border-left\" src=\"img/r3.png\">";
                                                echo "</div>";

                                                

                                            }
                                            else if ($row['rating'] == 2)
                                            {
                                                //echo "<div>";
                                                    echo "<img class=\"img-responsive img-border-left\" src=\"img/r2.png\">";
                                                 //echo "</div>";

                                            }
                                            else if ($row['rating'] == 1)
                                            {
                                                //echo "<div>";
                                                    echo "<img class=\"img-responsive img-border-left\" src=\"img/r1.png\">";
                                                 //echo "</div>";

                                            }

                                            //***** Beging: price range ******//
                                            
                                            if ($row['cost'] == 4)
                                            { 

                                                echo "<br>";

                                                echo "<p> <b> Price range:  ";
                                                echo "$$$$</b></p>";

                                            }
                                            else if ($row['cost'] == 3)
                                            {
                                        
                                                echo "<br>";

                                                echo "<p> <b> Price range:  ";
                                                echo "$$$</b>$</p>";
                                                

                                            }
                                            else if ($row['cost'] == 2)
                                            {
                                                echo "<br>";

                                                echo "<p> <b> Price range:  ";
                                                echo "$$</b>$$</p>";

                                            }
                                            else if ($row['cost'] == 1)
                                            {  
                                                echo "<br>";

                                                echo "<p> <b> Price range:  ";
                                                echo "$</b>$$$</p>";
                                            }

                                            echo "<br>";
                                            echo "<br>";
                                            
                                            echo "<div class=\"text-center\">";
                                            echo "<p>";
                                                echo $row["address"];
                                            echo "</p>";
                                            echo "</div>";

                                            echo "<hr class=\"tagline-longdivider\">";
                                }
                            }
                            else
                                        echo "<br>";
                                        echo "<h2 class=\"intro-text text-center\">";
                                            echo "<strong>No results found </strong>";
                                        echo "</h2>";
                                        
                        }
                        else
                            echo "form not detected";

            
                ?>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
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
