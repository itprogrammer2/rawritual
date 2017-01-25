<?php include("include/header.php"); ?>
</div></div></div>
			<!---->
			<div class="container">
				<div class="about">
					<div class="about-top" style="padding-top: 2em;">
					<?php
					$query1 = mysqli_query($con, "SELECT * FROM cms_about WHERE id='5'");
					$row1 = mysqli_fetch_array($query1);
					$id = $row1['id'];
					$title = $row1['title'];
					?>
						<center><h3 <?php echo $editable; ?> onBlur="saveToDatabase(this,'title','<?php echo $id; ?>')" onClick="showEdit(this);"><?php echo $title; ?></h3></center>
						<div class="col-md-6 about-in">
						<?php
						$second = 0;
						$first = 0;
						$query = mysqli_query($con, "SELECT * FROM ref_category WHERE id IN (SELECT DISTINCT category_id FROM tbl_menu)");
						$num = mysqli_num_rows($query);
						$second = $num / 2;
						$second = intval($second);
						$first = $num - $second;
						$x = 1;
						while($row = mysqli_fetch_assoc($query)){
							$category = $row['category_name'];
							$category_id = $row['id'];
						?>
						
							<font style="color:#a6cd60; font-weight: bold; font-size: 30px; font-family: pharmacy;"><center><?php echo $category; ?></center></font>
							<?php
							$query1 = mysqli_query($con, "SELECT * FROM tbl_menu WHERE category_id='$category_id'");
							while($row1 = mysqli_fetch_assoc($query1)){
								$image_file = $row1['image_file'];
								$product_name = $row1['product_name'];
								$description = $row1['description'];
								$amount = $row1['amount'];
								?>
								<div class="col-md-12" style="padding: 1em 0;">
								<div class="col-md-3">
								<center><img style="width: 80%; max-width: 100px;" src="uploads/<?php echo $image_file; ?>"/></center>
								</div>
								<div class="col-md-9" style="padding: .5em 0;">
								<p style="font-weight: bold;"><?php echo $product_name?>- <i>&#8369; <?php echo $amount; ?></i></p>
								<p><?php echo $description; ?></p>
								</div>
								<div class="clearfix"> </div>
								</div>
								<?php

							}

							if($x == $first){
							?>
								</div>
								<div class="col-md-6 about-in">
								<?php
							}
							$x++;
							if($x == $num){
							?>

							<?php
							}
						}
						?>
						</div>
						<div class="clearfix"> </div>
					</div>
	</div>
			</div>
				<!---->			
<?php include("include/footer.php"); ?>