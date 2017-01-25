<?php include("include/header.php"); ?>
</div></div></div>
<div class="container">
	<div class="about">
		<div class="about-top">
		<?php
			$query1 = mysqli_query($con, "SELECT * FROM cms_about WHERE id='6'");
			$row1 = mysqli_fetch_array($query1);
			$id = $row1['id'];
			$title = $row1['title'];
			$content = $row1['content'];
			$sub_content = $row1['sub_content'];

			$query2 = mysqli_query($con, "SELECT * FROM cms_image WHERE id='4'");
			$row2 = mysqli_fetch_array($query2);
			$logo1 = $row2['image_file'];
			?>
			<h3 <?php echo $editable; ?> onBlur="saveToDatabase(this,'title','<?php echo $id; ?>')" onClick="showEdit(this);"><?php echo $title; ?></h3>
			<div class="col-md-12 top-about">
				<img class="img-responsive" style="max-width: 200px; float: left; margin: 2em;" src="<?php echo $logo1; ?>" alt=" " >
				<h5 <?php echo $editable; ?> onBlur="saveToDatabase(this,'content','<?php echo $id; ?>')" onClick="showEdit(this);"><?php echo $content; ?></h5>
				<p <?php echo $editable; ?>  onBlur="saveToDatabase(this,'sub_content','<?php echo $id; ?>')" onClick="showEdit(this);"><?php echo $sub_content; ?></p>
			</div>
			<div class="clearfix"> </div>
		</div>
</div>
</div>
<?php include("include/footer.php"); ?>