<?php session_start(); 
include "message.php";?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->      
</head><!--/head-->
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
                     <li><a href="register.php"><?php echo $_SESSION['register'];?></a></li>
                    <li><a href="index.php">Logout</a></li>
                
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Mail Room</h1>
                   <p>You can compose messages here</p>
                </div>
              
        </div>
    </section><!--/#title-->     
    <section id="registration" class="container">  
   	<?php echo $create;?>
   	      <form class="center" role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <fieldset class="registration-form">
                 <div class="form-group">
                    <input type="text" id="to" name="to" placeholder="To" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" id="subject" name="subject" placeholder="Subject" class="form-control">
                </div>
                <div class="form-group">
                    <textarea col="100" id="message" name="message" placeholder="Message here" class="form-control"></textarea>
                </div>
                         <div class="form-group">
                    <button id="alt" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success">Send</button>
                  </div>
                </fieldset>
    </section>
    <section id="bottom" class="wet-asphalt">
       </section>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 <a target="_blank" href="#" title="Cheapo Mail">CheapoMail</a>. All Rights Reserved.
                </div>
             
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

