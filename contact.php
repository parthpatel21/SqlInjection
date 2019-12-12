
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Greencode.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="css/style_1.css" rel="stylesheet" />
<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Home"><span>T&nbsp;</span>e&nbsp;c&nbsp;h&nbsp;<span>T&nbsp;</span>a&nbsp;l&nbsp;c&nbsp;</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="Home">Home</a></li>
                        <li><a href="best-of-2017-blog">Blog</a></li>
                        <li class="active"><a href="Contact-Us">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
    
<?php include 'include/header.php' ?>

<?php 

        
    if(isset($_POST['submit']))
    {
        $name = escape($_POST['name']);
        $email = escape($_POST['email']);
        $subject = escape($_POST['subject']);
        $message = escape($_POST['message']);
    

    $error = [
       
       'name' => '',
       'email' => '',
       'subject' => '',
       'message' => ''
       
   ];
    
    if(strlen($name) < 4){
        
        $error['name'] = 'name need to be long';
    }
    
    if($name == ""){
        
        $error['name'] = 'Username cannot be empty';
    }
    if($email == ""){
        
        $error['email'] = 'Email cannot be empty';
    }
    if($subject == ""){
        
        $error['subject'] = 'Subject cannot be empty';
    }
    if($message == ""){
        
        $error['message'] = 'Message cannot be empty';
    }

    if(strlen($name) > 4 && $email != "" && $subject != "" && $message != "")
    {
        $to = "patel21998@gmail.com";
        $subject = $subject;
        $txt = $message;
        $headers = "From: ".$email . "\r\n" .
        "CC: somebodyelse@example.com";

        mail($to,$subject,$txt,$headers);
        
        $query = "INSERT INTO contact(con_name,con_email,con_subject,con_message) VALUES('{$name}','{$email}','{$subject}','{$message}')";
        
        $con_query = mysqli_query($link,$query);
        
        $message_1 = "Your Message is successfully Send";
        echo "<script type='text/javascript'>alert('$message_1');</script>";
        header("Location: index.php");
    }
}
?>
	<!-- end header -->
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h4 style="color:grey">Contact with us by filling <strong>contact form below</strong></h4>
                <form action="contact.php" method="post" role="form" autocomplete="on" enctype="multipart/form-data">
                    <div class="form-group">
                        
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" 
                            value="<?php echo isset($name) ? $name : '' ?>"/>
                        <p class="error_message"><?php echo isset($error['name']) ? $error['name'] : '' ?></p>
                        
                    </div>
                    <div class="form-group">
                        
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" 
                               value="<?php echo isset($email) ? $email : '' ?>"/>
                        <p class="error_message"><?php echo isset($error['email']) ? $error['email'] : '' ?></p>
                        
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" 
                               value="<?php echo isset($email) ? $email : '' ?>"/>
                        <p class="error_message"><?php echo isset($error['subject']) ? $error['subject'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" value="<?php echo isset($message) ? $message : '' ?>"></textarea>
                        <p class="error_message"><?php echo isset($error['message']) ? $error['message'] : '' ?></p>
                    </div>
                    
                    <div class="text-center"><input type="submit" class="btn btn-theme" name="submit" value="Send Message"/></div>
                </form>
			</div>
		</div>
	</div>
	</section>
	<?php include 'include/footer.php' ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>

</body>
</html>