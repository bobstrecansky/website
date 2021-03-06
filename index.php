<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <title>Bob Strecansky</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
</head>

<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Bob Strecansky</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a class="page-scroll" href="#about">About Me</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
			<?php
			$cookie_name = "user";
			$cookie_value = "John Doe";
			if(!isset($_COOKIE[$cookie_name])) {
            echo "<li><a class='page-scroll' href='main_login.php'>Login</a></li>";
			}

			else {
			echo "<li><a class='page-scroll' href='#'> WELCOME $_COOKIE[$cookie_name]";
			}
			?>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Senior Solutions Architect @  <a href="https://www.akamai.com">Akamai</a> </h1>
                <hr>
                <p>Experience with Web Performance, Reliability, and Security</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">About Me</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Me</h2>
                    <hr class="light">
                    <p class="text-faded">I'm a Senior Solutions Architect working at Akamai.  I work daily with large E-Commerce customers to optimize efficient delivery over enterprise scale.</p>
                    <a href="#portfolio" class="btn btn-default btn-xl page-scroll">Portfolio</a>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-2 col-sm-6">
                    <a href="codeSamples/projectdashboard.tar.gz" class="portfolio-box">
                        <img src="img/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">NodeJS and Express</div>
                                <div class="project-name">Project Dashboard</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a href="codeSamples/betatest.tar.gz" class="portfolio-box">
                        <img src="img/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Python</div>
                                <div class="project-name">Beta Test Cookie</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a href="codeSamples/edgeanalyzer.tar.gz" class="portfolio-box">
                        <img src="img/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Python</div>
                                <div class="project-name">Edge Analyzer</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a href="codeSamples/postgres.tar.gz#" class="portfolio-box">
                        <img src="img/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Postgres</div>
                                <div class="project-name">Dashboard Creation</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a href="codeSamples/semaphores.tar.gz" class="portfolio-box">
                        <img src="img/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">C Programming</div>
                                <div class="project-name">Semaphores</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a href="codeSamples/hyperplane.tar.gz" class="portfolio-box">
                        <img src="img/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">OCAML</div>
                                <div class="project-name">Hyperplane</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <a href="#contact" class="btn btn-default btn-xl wow tada page-scroll">Contact Information</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact Me!</h2>
                    <hr class="primary">
                    <p>You can get in touch with me below:</p>
                </div>

                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p><a href="tel:+18434228959">843.422.8959</a></p>
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:bob@bobstrecansky.com">bob@bobstrecansky.com</a></p>
                    <i class="fa fa-twitter fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="https://www.twitter.com/bobstrecansky">@bobstrecansky</a></p>
                    <i class="fa fa-linkedin fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="https://www.linkedin.com/in/bobstrecansky">Bob Strecansky on LinkedIn</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

	<?php include "count.php";?>
</body>
</html>
