<?php include "save.php";
session_start();?>
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
 <style>
 	.error{
 		color:red;
 	}
 </style>
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
                    <li><a href="mail.php">Mail</a></li>
                    <li><a href="logout.php">Logout</a></li>
                
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Registration</h1>
                   
                </div>
              
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container">
        <form class="center" role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <fieldset class="registration-form">
            	<?php echo $create ?>
                            <div class="form-group">
                    <input type="text" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $firstname;?>" class="form-control">
                     <span class="error"><?php echo $firstnameErr;?></span>
                </div>
                                <div class="form-group">
                    <input type="text" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>" class="form-control">
                     <span class="error"><?php echo $lastnameErr;?></span>
                </div>
                <div class="form-group">
                    <input type="text" id="username" name="username" placeholder="Username" value="<?php echo $username;?>" class="form-control">
                     <span class="error"><?php echo $usernameErr;?></span>
                </div>
                <div class="form-group">
                    <input type="text" id="email" name="email" placeholder="E-mail" value="<?php echo $email;?>" class="form-control">
                     <span class="error"><?php echo $emailErr;?></span>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" value="<?php echo $password;?>" class="form-control">
                        <span class="error"><?php echo $passwordErr;?></span>
                </div>
                <div class="form-group">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="Password (Confirm)" value="<?php echo $password_confirm;?>" class="form-control">
                        <span class="error"><?php echo $password_confirmErr;?></span>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-md btn-block">Register</button>
                </div>
            </fieldset>
        </form>
    </section><!--/#registration-->

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

