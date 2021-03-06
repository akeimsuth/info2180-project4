<?php session_start(); 
include "auth.php";
include "load.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cheapo Mail</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script type="text/javascript" src="js/load.js"></script>
</head>
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h1>CheapoMail</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo $_SESSION['index'];?>"><?php echo $_SESSION['login'];?></a></li>
               <li><a href="register.php"><?php echo $_SESSION['register'];?></a></li>
                </ul>
            </div>
        </div>
    </header>
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Home Page</h1>
                   <p>This is a site built to send and receive messages between its members</p>
                </div>
                <a href="mail.php">click here to Compose a message</a>
            </div>
        </div>
        <div><?php echo $create;?></h2>
    </section>

    <section id="registration" class="container">
	    <form class="center">
	    		<div id="result"></div>
	    </form>
    </section>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 <a target="_blank" href="#" title="Cheapo Mail">CheapoMail</a>. All Rights Reserved.
                </div>
             
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

