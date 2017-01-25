<?php
include("include/header.php");
?>
			<div class="header-top">
			<?php
			$query = mysqli_query($con, "SELECT * FROM cms_about WHERE id='1'");
			$row = mysqli_fetch_array($query);
			$id = $row['id'];
			$content = $row['content'];
			$sub_content = $row['sub_content'];

			?>
				<h2 <?php echo $editable; ?> onBlur="saveToDatabase(this,'content','<?php echo $id; ?>')" onClick="showEdit(this);"><?php echo $content; ?></h2>
				<h2 <?php echo $editable; ?> onBlur="saveToDatabase(this,'sub_content','<?php echo $id; ?>')" onClick="showEdit(this);"><?php echo $sub_content; ?></h2>
				<!-- <p class="to-do">diet successful?</p> -->
				<?php
				$query = mysqli_query($con, "SELECT * FROM cms_about WHERE id='2'");
				$row = mysqli_fetch_array($query);
				$id = $row['id'];
				$content = $row['content'];
				$sub_content = $row['sub_content'];
				$title = $row['title'];

				?>
				<h1 style="vertical-align: middle;"">
				<font <?php echo $editable; ?> onBlur="saveToDatabase(this,'content','<?php echo $id; ?>')" onClick="showEdit(this);" style="color: #10384d; font-size: .7em;"><?php echo $content; ?> </font>
				<img class="like" src="img/like.png" alt="" ><img class="unlike" style="" src="img/unlike.png" alt="" >
				<font <?php echo $editable; ?> onBlur="saveToDatabase(this,'sub_content','<?php echo $id; ?>')" onClick="showEdit(this);" style="color: #ec5924; font-size: .7em;"> <?php echo $sub_content; ?></font></h1>
				<center><p class="have"><a <?php echo $editable; ?> onBlur="saveToDatabase(this,'title','<?php echo $id; ?>')" onClick="showEdit(this);" style="color: white; text-decoration: none;" href="#menu"><?php echo $title; ?></p></a></center>
			</div>
		</div>
		</div>
<!---->
		<div id="menu" class="content">
			<div class="container">
			<div class="content-top">
				<div class="content-top-grid">
				<?php
				$query = mysqli_query($con, "SELECT * FROM cms_icon ORDER BY rank");
				while($row = mysqli_fetch_assoc($query)){
					$description  =$row['description'];
					$percentage  =$row['percentage'];
					$image_file  =$row['image_file'];
				?>
					<div class="col-md-3">
					<center>
					<h1 style="font-weight: 900; padding: 1em 0;"><?php echo $percentage; ?>%</h1>
					<p><?php echo $description; ?></p>
						<img style="padding: 1em 0; max-width: 255px;" class="img-responsive" src="icon/<?php echo $image_file; ?>" alt="">
					</center>
					</div>
				<?php
					}
				?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!---->
		
		<div id="menumenu" class="content-middle">
				<a href="#menumenu"><img src="<?php echo $tips?>" alt=""></a>
			<!-- <p>diet delivery services sending pre-prepared meals to your home or at work is the most convenient & delicious way to start</p> 
				A diet delivery service is your most convenient & delicious way to get pre-prepared healthy meals.
			-->
			<?php
			$query = mysqli_query($con, "SELECT * FROM cms_about WHERE id='1'");
			$row = mysqli_fetch_array($query);
			$id = $row['id'];
			$title = $row['title'];
			?>
			<p <?php echo $editable; ?> onBlur="saveToDatabase(this,'title','<?php echo $id; ?>')" onClick="showEdit(this);"><?php echo $title; ?></p>
			<a href="#menumenumenu" class="register">&#8681;</a>
		</div>
		</div>
		<div id="menumenumenu" class="container">
		<div class="about">
		<div class="about-top" style="padding: 1em 0;">
		<?php
			$query1 = mysqli_query($con, "SELECT * FROM cms_about WHERE id='5'");
			$row1 = mysqli_fetch_array($query1);
			$id = $row1['id'];
			$title = $row1['title'];
			$content = $row1['content'];
			$sub_content = $row1['sub_content'];
			?>
			<h3 <?php echo $editable; ?> onBlur="saveToDatabase(this,'title','<?php echo $id; ?>')" onClick="showEdit(this);"><?php echo $title; ?></h3>
			<div class="col-md-4 about-in">
			<?php
			$query = mysqli_query($con, "SELECT * FROM tbl_menu ORDER BY rand() LIMIT 4");
			$x = 0;
			while($row = mysqli_fetch_assoc($query)){
				$pic[$x] = "uploads/".$row['image_file'];
				$x++;
			}
			?>
			<table width="100%">
				<tr>
				<td style="vertical-align: middle;"><center><img style="width: 100%; max-width: 150px; padding: .5em;" src="<?php echo $pic[0]; ?>"/></center></td>
				<td style="vertical-align: middle;"><center><img style="width: 100%; max-width: 150px; padding: .5em;" src="<?php echo $pic[1]; ?>"/></center></td>
				</tr>
				<tr>
				<td style="vertical-align: middle;"><center><img style="width: 100%; max-width: 150px; padding: .5em;" src="<?php echo $pic[2]; ?>"/></center></td>
				<td style="vertical-align: middle;"><center><img style="width: 100%; max-width: 150px; padding: .5em;" src="<?php echo $pic[3]; ?>"/></center></td>
				</tr>
			</table>
			</div>
			<div class="col-md-8 top-about">
				
				<h5 <?php echo $editable; ?> onBlur="saveToDatabase(this,'content','<?php echo $id; ?>')" onClick="showEdit(this);"><?php echo $content; ?></h5>
				<p <?php echo $editable; ?> onBlur="saveToDatabase(this,'sub_content','<?php echo $id; ?>')" onClick="showEdit(this);"><?php echo $sub_content; ?></p>
				<a href="about.php" class="more">See our Menu</a> <a href="about.php" class="more">Learn More</a>
			</div>
			<div class="clearfix"> </div>
		</div>	
		</div>
		</div>
<?php include("include/footer.php"); ?>