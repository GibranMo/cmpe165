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
        <div class="brand">Restaurant Name</div>
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
                        <h2 class="intro-text text-center">Reviews
                            <strong> And Comments </strong>
                        </h2>
                        <hr>
                    </div>
                </div>

                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Comment <strong>Below!</strong>
                        </h2>
                        <hr>
                    </div>
                    <!--<ul class = "clearfix">-->
                        <h3>Rating
                            <small> <!--<span class="star-cb-group">-->
                                    <p><input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5 star</label></p>
                                    <p><input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4">4 star</label></p>
                                    <p><input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3 star</label></p>
                                    <p><input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2 star</label></p>
                                    <p><input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1 star</label></p>
                                <!--</span>--></small>
                            <textarea rows="10" columns="100">hello
                            </textarea>
                            <br>
                            <input type="button" id="submit" value="submit">

                        </h3>
                    <!--</ul>-->
                </div>
                    <ul class = "clearfix">

                        <div class="clearfix"></div>
                </div>
            </div>

        
        <!-- /.container -->

        <footer>
            <div class="box">
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
