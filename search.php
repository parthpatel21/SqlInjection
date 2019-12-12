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

<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5947b2e3ce9131001181227d&product=inline-share-buttons"></script>
    
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
                        <li><a href="best-of-2017-blog">Blog</a></li>
                        <li><a href="Contact-Us">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
    
<?php include 'include/header.php' ?>
	<!-- end header -->
<hr>

	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
                
                <div class="sharethis-inline-share-buttons"></div>
                
                <?php 
    
                    
                    if(isset($_POST['submit']))
                    {
                        $search = escape($_POST['search']);
                        
                        $query = "SELECT * FROM product WHERE pro_tags LIKE '%$search%' OR cat_name LIKE '%$search%'";
                        
                        $search_query = mysqli_query($link,$query);
                        
                        if(!$search_query)
                        {
                            die("Query fail" . mysqli_error($link));
                        }
                        
                        $count = mysqli_num_rows($search_query);
                        
                        if($count == 0)
                        {
                            echo "<h1>No result found</h1>";
                        }
                        else
                        {
                            $query = "SELECT * FROM product WHERE pro_tags LIKE '%$search%' OR cat_name LIKE '%$search%' ORDER BY pro_rank";

                            $product_query = mysqli_query($link,$query);

                            $i=0;

                            while($row = mysqli_fetch_assoc($product_query))
                            {
                                $pro_id = $row['pro_id'];
                                $cat_name = $row['cat_name'];
                                $pro_name = $row['pro_name'];
                                $pro_info = $row['pro_info'];
                                $pro_spec = $row['pro_spec'];
                                $pro_brand = $row['pro_brand'];
                                $pro_model = $row['pro_model'];
                                $pro_pros = $row['pro_pros'];
                                $pro_cons = $row['pro_cons'];
                                $pro_link = $row['pro_link'];
                                $pro_image = $row['pro_image'];
                                $pro_date = $row['pro_update_date'];
                                $i++;
                            ?>
                            
                            <article>
                    
                    <div class="post-image">
							<div class="post-heading">
								<h3><a href="<?php echo $pro_link ?>" target="_blank"><?php echo $i ?>. <?php echo $pro_name ?></a></h3>
							</div>
							<img src="img/product/<?php echo $pro_image ?>" alt="" />
						</div>
                    <div style="color:#263238;font-size:17px;font-weight:250" ><?php echo $pro_info ?></div>
                    <br>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><strong>Specification</strong></div>
                        <div class="panel-body">
                        
                                <ul class="fa-ul" style="color:#263238;font-size:17px;font-weight:250">
                                    
                                    <?php 
                    
                                        /*$result = str_split($pro_spec);
                    
                                        $length = count($result);
                                    
                                        for($i=0;$i<$length-1;$i++)
                                        {
                                            
                                            if($result[$i] == " " && $result[$i+1] == " ")
                                                
                                            {
                                                
                                                $substring = substr($pro_spec,isset($bun)? $bun : 0 ,$i+1);
                                                
                                                echo "<li><i class='fa-li fa fa-certificate'></i>$substring</li>";
                                                
                                                $bun = $i+1;
                                                
                                                
                                                
                                            }
                                            
                                        }*/
                    
                                        $result = explode('$$', $pro_spec);
                                        foreach ($result as $line) {
                                    
                                            echo "<li><i class='fa-li fa fa-certificate'></i>$line</li>";
                                        }
                                
                                    ?>
                                </ul>
                        </div>
                        
                    </div>
                    
                    
              <!-- Warning box -->
                    
                    <div class="panel panel-success">
                        <div class="panel-heading"><strong>Advantage</strong></div>
                        <div class="panel-body">
                            
                                <ul class="fa-ul" style="color:#263238;font-size:17px;font-weight:250">
                                    <?php 
                    
                                    
                                        $result = explode('$$', $pro_pros);
                                        foreach ($result as $line) {
                                    
                                            echo "<li><i class='fa-li fa fa-check'></i>$line</li>";
                                        }
                                
                                    ?>
                                    
                                </ul>
                        
                        
                        </div>
                    </div>
                    
                    <div class="panel panel-danger">
                        <div class="panel-heading"><strong>Drawbacks</strong></div>
                        <div class="panel-body">
                            
                                <ul class="fa-ul" style="color:#263238;font-size:17px;font-weight:300">
                                      <?php 
                    
                                    
                                        $result = explode('$$', $pro_cons);
                                        foreach ($result as $line) {
                                    
                                            echo "<li><i class='fa-li fa fa-times'></i>$line</li>";
                                        }
                                
                                    ?>
                                </ul>
                        
                        
                        </div>
                    </div>
                    
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> <?php echo $pro_date?></a></li>
							</ul>
                            <a href="<?php echo $pro_link ?>" target="_blank" class="pull-right"><button class="btn btn-warning" >Check Prize </button><i class="icon-angle-right"></i></a>
						</div>
                    <br>
                    
                    <div><a href="<?php echo $pro_link ?>" target="_blank"><button class="btn btn-success btn-large">Buy This Product From Amazon.in</button></a></div>
                    
				</article>
                
                
                
                <?php } ?>
                            
                  <?php          
                        }
                    }
                else
                {
                    header("Location: blog.php");
                }
                
                ?>
			
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