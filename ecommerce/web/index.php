<?php
	include("Database.php");
?>

<html>	
	<head>	
		<title> Colleges </title>
		<link rel="stylesheet" href="My_Style.css" media="all">
	</head>
	
	<body>
		<img src="images/eshop.jpg" style="float:left; height:100px; width:20%">
		<img src="images/banner.gif" style="float:right;height:100px;width:80%">

		<div class="content_wrapper"> <!--content starts here-->
			
			<div id="left_sidebar">
			
				<div id="sidebar_title">CATEGORIES</div>
			
					<ul id="cats">
						
						<?php
						$get_cats = "select * from categories";
						
						$run_cats = mysqli_query($con, $get_cats);
						
						while($row_cats=mysqli_fetch_array($run_cats)){
							
							$cat_id = $row_cats['cat_id'];
							$cat_title = $row_cats['cat_title'];
							
						echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
						}
						?>
					</ul>
					
				<div id="sidebar_title">BRANDS</div>	
				
					<ul id="cats">
						<?php
						$get_brands = "select * from brands";
						
						$run_brands = mysqli_query($con, $get_brands);
						
						while($row_brands=mysqli_fetch_array($run_brands)){
							
							$brand_id = $row_brands['brand_id'];
							$brand_title = $row_brands['brand_title'];
							
						echo "<li><a href='index.php?cat=$brand_id'>$brand_title</a></li>";
						}
						?>
					</ul>	
			</div>
			
			
			<div id="right_content"><!--content starts here-->
			
				<div id="headline">
				
					<div id="headline_content">
					
						<b>Welcome Customer!</b>
						<b style="color:yellow;">Shopping Cart:</b>
					<span>- Items: - Price:</span>
					
					</div>
				
				</div>
			
				<div id="product_box">
				
				<?php
				
					$get_products = "select * from products order by 1 DESC";
					
					$run_products = mysqli_query($con,$get_products);
					
					//echo $run_products;
					
					while ($row_products=mysqli_fetch_array($run_products)){
						
						$product_id = $row_products['product_id'];
						$product_title = $row_products['product_title'];
						$product_cat = $row_products['cat_id'];
						$product_brand = $row_products['brand_id'];
						$product_desc = $row_products['product_desc'];
						$product_price = $row_products['product_price'];
						$product_image = $row_products['product_img1'];
						$product_image1 = $row_products['product_img1'];
						
						echo"
						
							<div style=float:left;padding:20px;>
							
								<marquee><h3 align='center'>$product_title</h3>
								<img src='admin_area/product_images/$product_image' width='150' height='150'></marquee>
							</div>
							"
						;
						
	
					
						
					}
				
				
				?>
			
				</div>
					
					
				<div id="product_box">
				
				<?php
				
					$get_products = "select * from products order by 1 DESC";
					
					$run_products = mysqli_query($con,$get_products);
					
					//echo $run_products;
					
					while ($row_products=mysqli_fetch_array($run_products)){
						
						$product_id = $row_products['product_id'];
						$product_title = $row_products['product_title'];
						$product_cat = $row_products['cat_id'];
						$product_brand = $row_products['brand_id'];
						$product_desc = $row_products['product_desc'];
						$product_price = $row_products['product_price'];
						$product_image = $row_products['product_img1'];
						$product_image1 = $row_products['product_img1'];
						
						echo"
						
							<div style=float:left;padding:20px;>
							
								<h3 align='center'>$product_title</h3>
								<img src='admin_area/product_images/$product_image1' width='150' height='150'>
							</div>
							"
						;
						
	
					
						
					}
				
				
				?>
			
				</div>	
					
			</div><!--content ends here-->
			
			<div class="footer"><!--footer starts here-->
			
			
			<h1 style="color:black;padding:30px;text-align:center;font-size:40px;"><strong>&copy;2017 www.eshop.com</strong></h1>
			
			
			</div><!--footer ends here-->
		
		

		</div>
		<!--main container ends-->
	
	
	</body>
</html>
