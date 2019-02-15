<!DOCTYPE html>
<html>
<head>
	<title>MRA Developers</title>
	<!--Common Libraries for Each Page-->
	<?php
	include "templates/commonTopLibraries.php";
	?>
</head>

<body class="mainBackgroundColor">
	<div>
		<!--Navigation Bar-->
		<?php
		include "templates/navigationBarTemplate.php";
		?>

		<!--Main Middle Block, Where I put All Elements-->
		<div class="container mainContainer marginTopByFive showBoarderLeftRight">
			<div class="row text-center">
				<div class="col-4" style="background: #7543ad; padding-top: 50px; min-height: 1000px;">
					<img class="imageStyleOfCV img-fluid rounded-circle" alt="rizwan" src="assets/images/static/rizwan.jpg">
				</div>
				
				<div class="col-8 marginTopByTwenty" style="padding-top: 50px;">
					<h1 class="brushFront">Muhammad Rizwan Asim</h1>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		//Hide and Show Comments Block
		var switchShowHide = true;
		$("#commentsBlock").hide();
		$("#showHideLabel").text("Show");
		
		$("#commentsHeader").click(function(){
			if(switchShowHide == true){
				$("#commentsBlock").show("slow");
				$("#showHideLabel").text("Hide");
				switchShowHide = false;
			}else{
				$("#commentsBlock").hide("slow");
				$("#showHideLabel").text("Show");
				switchShowHide = true;
			}
		});
	</script>
	<script type="text/javascript" src="assets/scripts.js"></script>
</body>
</html>