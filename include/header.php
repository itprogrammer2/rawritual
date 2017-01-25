<?php
include("include/connect.php");
$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF'])));
if($basename == "index.php"){
	$test = "header"; 
} else {
	$test = "header-in";
}
if(isset($_SESSION['admin_id'])){
	$editable = " contenteditable='true'";
} else {
	$editable = "";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Raw Ritual</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<?php
$query  = mysqli_query($con, "SELECT * FROM cms_image WHERE id='1'");
$row = mysqli_fetch_array($query);
$logo = "img/".$row['image_file'];

$query  = mysqli_query($con, "SELECT * FROM cms_image WHERE id='2'");
$row = mysqli_fetch_array($query);
$background = "img/".$row['image_file'];

$query  = mysqli_query($con, "SELECT * FROM cms_image WHERE id='3'");
$row = mysqli_fetch_array($query);
$tips = "img/".$row['image_file'];
?>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $logo; ?>">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $logo; ?>">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $logo; ?>">
<link rel="apple-touch-icon-precomposed" href="<?php echo $logo; ?>">
<link rel="shortcut icon" href="<?php echo $logo; ?>">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Raw Ritual" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="admin/assets/ckeditor/ckeditor.js"></script>
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#pic1").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
   <script>
    $(function () {
      $("#pic2").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
   <script>
    $(function () {
      $("#pic3").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
  <script>
    $(function () {
      $("#pic4").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
  <style>
	.menu{
	   list-style:none;    
	   overflow:hidden;
	   padding:10px;
	   position:relative;
	   margin-bottom: 10px;
	}
	 .menu label{
	   text-align:left;
	   background: white;
	   padding-right:10px;
	   z-index:2;
	   position:absolute; 
	   color: #262526;
	   font-weight: bold;
	}
	 .menu span{
	   float:right;
	   background:white;
	   padding-left:10px;
	   z-index:2;
	   color: #262526;
	}
	.dotted-bg{
	   border-top:dotted 2px #ccc;
	   position:absolute;   
	   top:30px;
	   left:0;
	   width:90%;
	   z-index:1;
	}
	
	 .menu p{
	   margin: 0px;
	}
	
	.solid-bg{
	margin: 10px 0px 10px 0px;
	   border-top:solid .1em #515150;
	   
	}
	
	.chef-label {
		background-color: #a6cd60;
		padding: 6px;
		color: white;
	}
	
	.new-label {
		background-color: #a6cd60;
		padding: 6px;
		color: white;
	}
	.menu-box {
		border: solid 2px #a6cd60
	}

.header {
	background:url(<?php echo $background; ?>) cover;
}
.header-in {
	background:url(<?php echo $background; ?>)) no-repeat top;
}
</style>
<script>
function showEdit(editableObj) {
			//$(editableObj).css("background","#FFF");
		} 
		
function saveToDatabase(editableObj,column,id) {
	//$(editableObj).css("background","#FFF url(loaderIcon.gif) no-repeat right");
	$.ajax({
		url: "function/edit.php",
		type: "POST",
		data: {
			column: column,
			editval: editableObj.innerHTML,
			id: id
		},
		//data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
		success: function(data){
			console.log(data);
			//$(editableObj).css("background","#FDFDFD");
		}        
   });
}
</script>
<script type="text/javascript" src="admin/assets/ckeditor/ckeditor.js"></script>
</head>
<body>
	<!--header-->
	<div class="<?php echo $test; ?>">
		<div class="container">
			<!---->
		
				<!---->
			<div class="top-menu">					
				<ul>
					<li><a href="menu.php" data-hover="MENU">MENU  </a> </li>
					<li><a href="index.php"><img class="logo_logo" src="<?php echo $logo; ?>" alt="" ></a></li>
					<li><a href="about.php" data-hover="ABOUT">ABOUT </a></li>
				</ul>
				<!--script-->
						
			</div>
			<?php if(isset($_SESSION['admin_id'])){ ?>
			<div class="top-menu">		
			<center><ul>
			<li><a href="admin/index.php" data-hover="ADMIN">ADMIN</a></li>
			<li><a href="admin/function/logout.php" data-hover="LOGOUT">LOGOUT</a></li>
			</ul></center>
			</div>
			<?php } ?>
			</div>