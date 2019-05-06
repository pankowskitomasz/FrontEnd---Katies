<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<meta name="keywords" content="katie cafe,cafe,CAFÉ,BREAKFAST,LUNCH,DINNER,DESSERT,DRINKS">
	<meta name="description" content="Come and check café with the best menu in San Francisco, California, USA. 
				The original Cafe's location in Noe Valley opened it's doors in the summer 2006 after 
				founder decided to spread her love of delicious baked goods and quality 
				coffee to the neighborhood she resided in.">
	<!--[if lt IE 9]>
	<script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/styles.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="icon" href="img/favicon.png">
	<title>Katie café | Contact</title>
</head>
<body>
    <nav class="navbar navbar-static-top position-absolute w-100">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <img src="img/logo.png" class="img-responsive" alt="logo">
                    <span class="font-logo text-shadow text-white pt-2 hidden-xs visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">Katie's</span>
                </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav">
                    <span class="fa fa-bars"></span>
                    <span class="fa fa-coffee"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="mainnav">
                <ul class="nav navbar-nav navbar-right text-uppercase font-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container-fluid index-s-1"></section>      
    <div class="section-spacer"></div>
    <section class="container-fluid" id="msg">
        <div class="row my-auto w-100 d-flex ml-0">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 p-4 mx-auto bg-white opacity-9">
                <div class="row pb-3">
                    <h3 class="section-title text-uppercase text-center m-0">Message sent</h3>
                </div>
                <div class="row">
                    <div class="spacer">
                        <div class="inside bg-white">
                            <span class="fa fa-star p-1"></span>
                            <span class="fa fa-star p-1"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <dl class="menu-list">
                            <dt>Name</dt>
                            <dd>
                                <?php
                                    if(isset($_POST['fname'])){
                                        echo htmlspecialchars($_POST['fname']);
                                    }
                                ?>
                            </dd>
                            <dt>Email</dt>
                            <dd>                               
                                <?php
                                    if(isset($_POST['femail'])){
                                        echo htmlspecialchars($_POST['femail']);
                                    }
                                ?>
                            </dd>
                            <dt>Phone</dt>
                            <dd>                               
                                <?php
                                    if(isset($_POST['ftel'])){
                                        echo htmlspecialchars($_POST['ftel']);
                                    }
                                ?>
                            </dd>
                            <dt>Message</dt>
                            <dd>                               
                                <?php
                                    if(isset($_POST['fmessage'])){
                                        echo htmlspecialchars($_POST['fmessage']);
                                    }
                                ?>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container-fluid bg-brw text-brw pt-2">
        <div class="row ml-2 mr-2 pb-2">
            <div class="spacer">
                <div class="inside bg-brw">
                    <span class="fa fa-star p-1"></span>
                    <span class="fa fa-star p-1"></span>
                </div>
            </div>
        </div>
        <div class="row pb-2">
            <ul class="list-inline text-uppercase text-center font-menu bottom-menu">
                <li><a href="index.html" class="text-brw">Home</a></li>
                <li><a href="menu.html" class="text-brw">Menu</a></li>
                <li><a href="gallery.html" class="text-brw">Gallery</a></li>
                <li><a href="contact.html" class="text-brw">Contact</a></li>
            </ul>
            <ul class="list-inline text-center">
                <li><a href="https://www.facebook.com" class="icon-item" target="_blank" rel="noreferrer">
                    <span class="fa fa-facebook-official"></span>
                </a></li>
                <li><a href="https://www.instagram.com" class="icon-item" target="_blank" rel="noreferrer">
                    <span class="fa fa-instagram"></span>
                </a></li>
                <li><a href="https://www.twitter.com" class="icon-item" target="_blank" rel="noreferrer">
                    <span class="fa fa-twitter"></span>
                </a></li>
            </ul>
        </div>
        <div class="row">
            <p class="text-center">Copyright &copy; 2019</p>
        </div>
    </footer>    
    <script type="text/javascript" src="js/main.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAh1xIfMS6UqeltTwp9dL-LtRcRb6J9ao8&callback=pointsMap"></script>
</body>
</html>
