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
                <div class="col-md-6">
                  <p>
                   Search restaurants near:  
                   <select>
                        <option value="" selected disabled> <strong>Please select</strong></option>
                        <option value="">San Jose, CA</option>
                        <option value="">San Francisco, CA</option>
                        <option value="">Fremont, CA</option>
                        <option value="">Santa Clara, CA</option>
                        <option value="">Sunnyvale, CA</option>
                        <option value="">Stockton, CA</option>
                    </select>
                </p>
                 <p>
                   Type: 
                   <select>
                        <option value="" selected disabled> <strong>Please select</strong></option>
                        <option value="">Indian</option>
                        <option value="">Mexican</option>
                        <option value="">Italian</option>
                        <option value="">Asian</option>
                    </select>
                </p>
                 <p>
                   Price:  
                   <select>
                        <option value="" selected disabled> <strong>Please select</strong></option>
                        <option value="">$</option>
                        <option value="">$$</option>
                        <option value="">$$$</option>
                        <option value="">$$$$</option>
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
                 <button type="button" id="btnLogin" class="btn btn-default btn-xlarge">Go</button>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Your
                        <strong>Search Results</strong>
                    </h2>
                    <hr>
                </div>
                <ul class = "clearfix">
                    <li><h3>Restaurant 1
                        <small>Rating</small>
                    </h3></li>
                    <li><h3>Restaurant 2
                        <small>Rating</small>
                    </h3></li>
                    <li><h3>Restaurant 3
                        <small>Rating</small>
                    </h3></li>
                    <li><h3>Restaurant 4
                       <small>Rating</small>
                    </h3></li>
                    <li><h3>Restaurant 5
                       <small>Rating</small>
                    </h3></li>
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