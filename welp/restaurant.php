<?php
    include('connect.php');
    session_start();
    
    $restID = $_GET["id"];
    
    
    
    $comment = $rating = "";
    $restaurantRating = [ 
                        1 => "<img class=\"img-responsive img-border-left\" src=\"img/r1.png\">",
                        2 => "<img class=\"img-responsive img-border-left\" src=\"img/r2.png\">",
                        3 => "<img class=\"img-responsive img-border-left\" src=\"img/r3.png\">",
                        4 => "<img class=\"img-responsive img-border-left\" src=\"img/r4.png\">",
                        5 => "<img class=\"img-responsive img-border-left\" src=\"img/r5.png\">"];
    
    $restaurantPrice = [ 
                        1 => "$",
                        2 => "$$",
                        3 => "$$$",
                        4 => "$$$$",
                        5 => "$$$$$"];
    
    #if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])){
        $comment = $_POST['comment'];
        $rating = $_POST['rating'];
        $userID = $_SESSION["userID"];
        
    $query="INSERT INTO Comment (userID, restaurantID, rating, comment)
    VALUES ('" . $userID . "','" . $restID . "','" . $rating . "','" . $comment . "')";

    $result = mysqli_query($conn,$query);


    $selectquery = "SELECT numreviews, rating from Restaurant WHERE id='" . $restID . "'";

    $selectresult = mysqli_query($conn,$selectquery);

    $row = mysqli_fetch_array($selectresult);
    $rating = $rating;
    $numreviews = $row['numreviews'];
    $commentrating = $row['rating'];
    $newrating = round(($rating * ($numreviews/ ($numreviews+1))) + ($commentrating * (1 / ($numreviews +1))));
    
    $newnumreviews = $numreviews + 1;

    $updatequery="UPDATE Restaurant SET numreviews ='".$newnumreviews."', rating = '".$newrating."' WHERE id = $restID";

    $updateresult = mysqli_query($conn,$updatequery);
        header("Location: restaurant.php?id=$restID");
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
            <?php
                        $name = $address = $city = $rating = $price = "";
                        
                            $query2 = "SELECT name, address, city, rating, cost FROM restaurant WHERE id = $restID"; 
                            $result2 = $conn->query($query2);
                            
                            
                            if ($result2->num_rows > 0) {
                                while ($resultRow2 = $result2->fetch_assoc())
                                {
                                    $name = $resultRow2['name'];
                                    $address = $resultRow2['address'];
                                    $city = $resultRow2['city'];
                                    $rating = $resultRow2['rating'];
                                    $price = $resultRow2['cost'];


                                }   
                            }

                        ?>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center"><strong><?php echo $name?></strong>
                            
                        </h2>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        
                        <?php
                            $image = "";
                            $query3 = "SELECT iconimage FROM restaurant WHERE id = $restID"; 
                            $result3 = $conn->query($query3);
                            
                            if ($result3->num_rows > 0) {
                                while ($resultRow3 = $result3->fetch_assoc()){
                                    $image = $resultRow3['iconimage'];
                                }
                            }
                       
                            print "<center><img class=\"img-responsive img-border-left\" src=\"img/$image\" alt=\"\" height=\"250\" width=\"250\><center/>";
                        ?>
                        
                        
                        
                        
                    </div>
                    <div class="col-md-6">       <!-- Insert php code -->

                        
                       
                        
                    <p><b>Name:</b> <?php echo $name?></p>
                    <p><b>Address:</b> <?php echo $address?></p>
                    <p><b>City:</b> <?php echo $city?></p>
                    <p><b>Rating:</b> <?php echo $restaurantRating[$rating]?></p>
                    <p><b>Price:</b> <?php echo $restaurantPrice[$price]?></p>
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
                       <div class = "container">  <!-- Insert php code -->
                    <center>  <div class = "container" class = "col-md-6">
                       <form  method="post">
                            <center>
                            <p>
                               Please rate:  
                               <select name = "rating">
                                    <option value="" selected disabled> <strong>Rating</strong></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    
                                </select>
                               
                            </p>
                            <input type="hidden" name="id" value="1">
                            <center/>
                            <textarea name="comment" cols="50" placeholder= "Comments" rows="10"></textarea>
                            
                            
                            
                            
                            <?php
                                if (isset($_SESSION["pwrd"]) == false) {
                                    print "<br>";
                                    print "<p>Log in to comment noob!</p>";
                                   
                                } else if (isset($_SESSION["pwrd"])) {
                                    print "<br>";
                                    print "<input type=\"submit\" name=\"submit\" value=\"submitComment\"></input>";
                                }
                            ?>
                            
                            
                            
                            
                            
                            
                            
                            
                          
                        </form>
                    </div>
                      </div> <center/>
                       
                    </div>
                     </div>

                <div class="box">  <!-- Insert php code -->
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Read 
                            <strong> Reviews </strong>
                        </h2>
                        <hr>
                    </div>
                    
                    
                    
                    <?php
                    
                 
                    $query = "SELECT userID, comment, rating FROM comment WHERE restaurantID = $restID"; 
                    $result = $conn->query($query);
                    $username = "";
                    if ($result->num_rows > 0) {
                                while ($resultRow = $result->fetch_assoc())
                                {
                                    $rating = $resultRow["rating"];
                                    $userID = $resultRow["userID"];
                                    $comment = $resultRow["comment"];  
                                    
                                    $query1 = "SELECT userName FROM users WHERE userID = $userID"; 
                                    $result1 = $conn->query($query1);
                                    if ($result1->num_rows > 0) {
                                        while ($resultRow1 = $result1->fetch_assoc()){
                                            $username = $resultRow1["userName"];
                                        }
                                    } //asasas
                                    
                                    
                                    
                                    print "<div class = \"container\"><center>";
                                    print "<p><b>Username:</b> " . $username . "<br>";
                                    print "<b>Rating:</b> " . $restaurantRating[$rating];
                                    print "<b>Comment:</b> " . $comment . "</p>";
                                    print "<br>";
                                    print "</div><center/>";
                                }
                    }
                    ?> 
                    <!--</ul>-->
              
                <ul class = "clearfix">

                    <div class="clearfix"></div>
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


