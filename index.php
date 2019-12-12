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
                        <li class="active"><a href="Home">Home</a></li>
                        <li><a href="best-of-2017-blog">Blog</a></li>
                        <li><a href="Contact-Us">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
    
    
<?php include 'include/header.php' ?>

<?php 

    
    // Visito Queries
    
/*
$query = "SELECT a_visitor FROM admin_log";

$visit_query = mysqli_query($link,$query);

while($row = mysqli_fetch_array($visit_query))
{
    $a_visit = $row['a_visitor'];
}

$total_visit = $a_visit;

$query_1 = "UPDATE admin_log SET a_visitor = a_visitor + 1";

$visit_update_query = mysqli_query($link,$query_1);
*/

?>

	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/6.png" alt="" />
                <div class="flex-caption">
                    <h3>Modern Design</h3> 
					<p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img src="img/slides/5.png" alt="" />
                <div class="flex-caption">
                    <h3>Fully Responsive</h3> 
					<p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img src="img/slides/4.png" alt="" />
                <div class="flex-caption">
                    <h3>Clean & Fast</h3> 
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h1><span style="color:#68A4C4">Best</span> Products Review Available Here</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<!-- divider --> 
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
                        <?php 
                        
                        $query = "SELECT * FROM category";

                        $cat_query = mysqli_query($link,$query);

                        $i = 0;
                            
                        while($row = mysqli_fetch_array($cat_query))
                        {
                            $cat_id = $row['cat_id'];
                            $cat_name = $row['cat_name'];
                            $cat_name_url = $row['cat_name_url'];
                            $cat_desc = $row['cat_desc'];
                            $cat_image = $row['cat_image'];
                            $i++;
                            
                            if($i%4==0)
                            {
                               echo ' <div class="row">';
					           echo '<section id="projects">';
					           echo '<ul id="thumbs" class="portfolio">';
                            }
                        
                        
                    
                        ?>
                        
						<li class="col-lg-3 design" data-id="id-0" data-type="web">
						<div class="item-thumbs">
                            <a href="best-<?php echo $cat_name_url ?>-of-2017"><img src="img/<?php echo $cat_image ?>"></a>
						</div>
						</li>
						<!-- End Item Project -->
                        
                        <?php  } ?>
					</ul>
					</section>
				</div>
			</div>
		</div>

	</div>
	</section>
	
<?php include 'include/footer.php';?>
    
</div>
<a class="scrollup"><i class="fa fa-angle-up active"></i></a>
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
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

</body>
</html>