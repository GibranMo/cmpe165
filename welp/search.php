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

    <center> <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Search
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
                        <option value="Milpitas">Milpitas, CA</option>
                    </select>
                </p>
                 <p>
                   Type: 
                   <select name="foodtype">
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
                   <select name = "rating">
                        <option value="" selected disabled> <strong>Please select</strong></option>
                        <option value="5">Highest Rated</option>
                        <option value="6">Most-reviewed</option>
                    </select>
                </p>

                <p>Search:
                        <input type="text" id="password" name="keyword" placeholder="keywords" class="input-small">
                    </p>

                <p>
                    
                </p>
                 <!--<button type="button" id="btnLogin" class="btn btn-default btn-xlarge">Go</button>-->
                <input type="submit" name="submit" id="btnLogin" class="btn btn-default btn-block" value= "Search">
                
                </div>

                <div class="clearfix"></div>
            </form>

            
           
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

                                

                                $sql = "SELECT id, iconimage, name, address, rating, city, placetype, cost, tags FROM restaurant";
                                $counter = 0;
                                if (!empty($_POST['keyword'])) //search by keyword input was provided
                                { 
                                    
                                    
                                    $bucketsearch = $_POST['keyword'];
                                
                                    $searchTerms = explode(' ', $bucketsearch);

                                    $searchTermBits = array();

                                    foreach ($searchTerms as $term) 
                                    {
                                        $term = trim($term);
                                        //echo $term."<br>";
                                        if (!empty($term)) 
                                        {
        
                                            $searchTermBits[] = "searchtag LIKE '%$term%'";
                                        }

                                        $sql = "SELECT id, iconimage, name, address, rating, city, placetype, cost, tags FROM restaurant WHERE ".implode(' OR ', $searchTermBits);
                                        
                                    }
                                    
                                    $counter++;


                                }
                                            
                                            if (isset($_POST['foodtype'])) 
                                            {
                                                $foodtype= $_POST['foodtype'];

                                                if ($counter > 0)
                                                {
                                                    $subquery = " AND foodtype = '$foodtype' ";
                                                }
                                                else
                                                    $subquery = " WHERE foodtype = '$foodtype' ";

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
                                            
                                            if (isset($_POST['rating'])) 
                                            {
                                                $rating = $_POST['rating'];
                                               
                                               if ($rating == 5) 
                                                {
                                                    if ($counter > 0) 
                                                    {
                                                        $subquery = " AND rating = '$rating' ";
                                                    }
                                                    else
                                                    {
                                                        $subquery = " WHERE rating = '$rating'";
                                                    }

                                                }
                                                else if ($rating == 6)
                                                {
                                                    //calculate above average number of reviews
                                                    $query = "SELECT numreviews FROM restaurant";

                                                    $rcontainer = $conn->query($query);

                                                    if ($rcontainer->num_rows > 0)
                                                    {
                                                        $countRows = 0;
                                                        $sum = 0;
                                                        while ($row1 = $rcontainer->fetch_assoc())
                                                        {
                                                            $num = $row1['numreviews'];
                                                            $sum = $sum + $num;


                                                            $countRows++;

                                                        }

                                                        $average = $sum/$countRows;

                                                        $bottomAvg = floor($average);

                                                    }

                                                    if ($counter > 0)
                                                    {
                                                        $subquery = " AND numreviews > '$bottomAvg' ";

                                                    }
                                                    else
                                                    {
                                                        $subquery = " WHERE numreviews > '$bottomAvg' ";
                                                    }

                                                }

                                                    $sql = $sql.$subquery;
                                                    $counter++;
                                            }

                                    



                                    //}/* else isset($_POST['keyword'])*/  
                                    $result2 = $conn->query($sql);
                                    echo "<br>";
                                    
                                    echo "<br>";
                                    if ($result2->num_rows > 0)
                                    {

                                        while ($row = $result2->fetch_assoc())
                                        {
                                            /*
                                                Prep all the variables
                                            */
                                            $id = $row['id'];
                                            $restname = $row['name'];
                                            $city = $row['city'];
                                            $tagsText = $row['tags'];
                                            $price = $row['cost'];
                                            $rating = $row['rating'];
                                            $image = $row['iconimage'];

                                        
                                                echo "<br>";
                                               
//                                                        
                                                        //echo "<a href=\"{$row['videolink']}\"><img src=\"{$row['iconimage']}\" height=\"100\" width=\"160\"></a>";
                                                        
                                                        echo "<h2>";
                                                        echo "<a href=\"restaurant.php?id=$id\">$restname</a>";
                                                        echo "<br>";
                                                        echo "<a href=\"restaurant.php?id=$id\"><img src=\"img/$image\" height=\"250\" width=\"250\"> </a>";
                                                        echo "</h2>";

                                                        echo "</form>";
                                                       
                                                        echo "<br>";


                                                    echo "<h2>City: ";
                                                        echo "<strong> $city</strong>";
                                                    echo"</h2>";
                                                    
                                                    echo "<p><b>'$tagsText'</b></p> ";
                                                    
                                                   
                                                    
                                                    $restaurantRating = [ 
                                                    1 => "<img class=\"img-responsive img-border-left\" src=\"img/r1.png\">",
                                                    2 => "<img class=\"img-responsive img-border-left\" src=\"img/r2.png\">",
                                                    3 => "<img class=\"img-responsive img-border-left\" src=\"img/r3.png\">",
                                                    4 => "<img class=\"img-responsive img-border-left\" src=\"img/r4.png\">",
                                                    5 => "<img class=\"img-responsive img-border-left\" src=\"img/r5.png\">"];

                                                    echo $restaurantRating[$row['rating']];

                                                    //***** Beging: price range ******//
                                                    
                                                     $restaurantPricing = [
                                                    0 => "" ,
                                                    1 => "$",
                                                    2 => "$$",
                                                    3 => "$$$",
                                                    4 => "$$$$"];
                                                    echo "<br>";
                                                    echo "<p><b>Price Range: ".$restaurantPricing[$row['cost']]."</b>".$restaurantPricing[4-$row['cost']]."</p>";
                                                    echo "<br>";


                                                    echo "<br>";
                                                    echo "<br>";

                                                    //echo " <img src = \"http://maps.google.com/maps/api/staticmap?scale=2&center=37.431847%2C-121.908976&language=en&zoom=15&markers=scale%3A2%7Cshadow%3Afalse%7Cicon%3Ahttp%3A%2F%2Fyelp-images.s3.amazonaws.com%2Fassets%2Fmap-markers%2Fannotation_64x86.png%7C37.431847%2C-121.908976&client=gme-yelp&sensor=false&size=286x135&signature=500CGfAyovibZTg0QQZvfeQsCbw=\" height=\"280\" width=\"380\">";

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
                            {            echo "<br>";
                                        echo "<h2 class=\"intro-text text-center\">";
                                            echo "<strong>No results found </strong>";
                                        echo "</h2>";
                            }
                                        
                        }
                        

            
                ?>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>

    </div> <center/>
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
