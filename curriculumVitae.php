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
		<div class="container mainContainer marginTopByFive">
			<div class="row text-center">

				
				
				
				
				
			</div>
		</div>

		<!--Using Jumbotron as Footer-->
		<?php
		include "templates/footerTemplate.php";
		?>
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