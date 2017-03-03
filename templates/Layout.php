<?php
class layout{

    public static function blogPost(){
		
        echo <<<BlogPost
		
                            
                            
		
                
                <p class="lead">
by <a href="C:/xampp/htdocs/CSC206_Green/public/index.php">Samuel C. Green</a>
                </p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
				<a href="#"><img src="images/logo.bmp" alt=""></a>
BlogPost;

    }

    public static function pageTop()
    {
		

        echo <<<PageTop
<html lang="en">
<div class ="page">
			<head>

			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">

			<title>DevLeak</title>

			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">

				<!-- Custom CSS -->
				<link href="css/blog-home.css" rel="stylesheet">
			</head>
<body>



    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
				<a class="navbar-brand" href="createPost.php">Post</a>
				<a class="navbar-brand" href="tablePage.php">Pages</a>
				<a class="navbar-brand" href="UpdatePost.php">Edit Pages</a>
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Locations</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    [DevLeak]
                    <small>The Documented Struggle</small>
                </h1>
				<h2>
                    <a href="index.php"><img src="images/BlogHeaderGraphic.bmp" alt=""></a>
                </h2>
				
PageTop;
    }

    public static function pageBottom()
    {

        echo <<<PageBottom

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; - DevLeak 2017 - [Call number: (619) 306-9764 ] - Orb Games inc.</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</div>
</html>

PageBottom;
    }
}