<div class="about-top" style="padding: 1em;">
	<div class="col-md-7 cap-img1">
		<?php
			$query = mysqli_query($con, "SELECT * FROM cms_about WHERE id='4'");
			$row = mysqli_fetch_array($query);
			$id = $row['id'];
			$content = $row['content'];
			$sub_content = $row['sub_content'];
			?>
		<h1 style="font-weight: bold; font-size: 2em;">Visit Us:</h1>
		<p <?php echo $editable; ?> onBlur="saveToDatabase(this,'content','<?php echo $id; ?>')" onClick="showEdit(this);" style="font-size: 1.1em;"><?php echo $content; ?></p>
	</div>
	<div class="col-md-5 cap-img1">
		<h1 style="font-weight: bold; font-size: 2em;">WE ALSO DELIVE<span style="color: #84c74f">RR</span>:</h1>
		<p <?php echo $editable; ?> onBlur="saveToDatabase(this,'sub_content','<?php echo $id; ?>')" onClick="showEdit(this);" style="font-size: 1.1em;"><?php echo $sub_content; ?></p>
	</div>
	<div class="clearfix"></div>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3850.9390212486032!2d120.6067703!3d15.1616932!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f207c2072df1%3A0x4058128120151108!2sMarQuee+Mall!5e0!3m2!1sen!2sph!4v1484289832243"></iframe>
</div>		
<div class="footer">
	<div class="container">
			<p class="footer-class">&copy; 2016 Sunrise Surprise. All rights reserved |  Design by <a href="http://ignition.biz.com">NERDVANA</a> </p>
	</div>
	 <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
</body>
</html>