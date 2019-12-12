
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
    
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5947b2e3ce9131001181227d&product=inline-share-buttons' async='async'></script>
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5947b2e3ce9131001181227d&product=sticky-share-buttons' async='async'></script>


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
                        <li class="active"><a href="best-of-2017-blog">Blog</a></li>
                        <li><a href="Contact-Us">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
    
<?php include 'include/header.php' ?>
<hr>
	<!-- end header -->
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
                
                <div class="sharethis-inline-share-buttons"></div>
                
                <?php   
                
                    $query = "SELECT * FROM category";

                    $blog_query = mysqli_query($link,$query);

                    $i = 0;

                    while($row = mysqli_fetch_array($blog_query))
                    {
                        
                            $cat_id = $row['cat_id'];
                            $cat_name = $row['cat_name'];
                            $cat_name_url = $row['cat_name_url'];
                            $cat_desc = $row['cat_desc'];
                            $cat_image = $row['cat_image'];
                        
                    $i++;
                
                
                ?>
				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="best-<?php echo $cat_name_url ?>-of-2017"><?php echo $i ?>. Best <?php echo $cat_name ?>s of 2017</a></h3>
							</div>
							<img src="img/<?php echo $cat_image ?>" alt="" />
						</div>
						<p>
							 <?php echo $cat_desc ?>
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
                                <?php 
                                
                                $query = "SELECT * FROM product WHERE cat_name = '{$cat_name}' ORDER BY pro_update_date DESC LIMIT 1";
                                
                                $date_query = mysqli_query($link,$query);
                        
                                while($row = mysqli_fetch_array($date_query))
                                {
                                    $date = $row['pro_update_date'];
                                    echo "<li><i class='icon-calendar'></i><a href=''>$date</a></li>";
                                }
                                
                                ?>
								
								<li><i class="icon-folder-open"></i><a href="best-<?php echo $cat_name_url ?>-of-2017"> Products</a></li>
							</ul>
							<a href="best-<?php echo $cat_name_url ?>-of-2017" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>
				</article>
                
                <?php } ?>
			</div>
            
			<?php  include "include/sidebar.php" ?>
            
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
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/script.js"></script>

</body>
</html>