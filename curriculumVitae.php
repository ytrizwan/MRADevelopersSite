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
<!--		<div class="container mainContainer marginTopByFive showBoarderLeftRight">-->
		<div class="container marginTopByFive showBoarderLeftRight">
			<div class="row">
<!--				<div class="col-md-4 text-center" style="background: #7543ad; padding-top: 50px; min-height: 1000px; color: white;">-->
				<div class="col-lg-4 text-center" style="background: #7543ad; padding-top: 50px; color: white;">

					<img class="imageStyleOfCV img-fluid" alt="rizwan" src="assets/images/static/rizwan.jpg">
					<div style="text-align: left; margin-left: 10px;">
						<td><h3 class="responsiveTextSizeOfTwo">CONTACT</h3></td>
						<table style="width: 100%">
							<tr>
								<td class="text-center"><i class="fas fa-map-marked-alt"></i></td>
								<td> Canberra </td>
							</tr>
							
							<tr>
								<td class="text-center"><i class="fas fa-phone"></i></td>
								<td> +61 426 046 919 </td>
							</tr>
							
							<tr>
								<td class="text-center"><i class="fas fa-envelope"></i></td>
								<td> ytrizwan@gmail.com </td>
							</tr>
						</table>
						
						
						
						
						
						
						
					</div>
					
					
				</div>
				
				<div class="col-lg-8 marginTopByTwenty brushFront" style="padding-top: 50px; min-height: 1000px;">
					<h1 class="reponsiveTextSizeMaxSixtyFive">Muhammad Rizwan Asim</h1>
					<P class="reponsiveTextSizeMaxFifteen">Software Developer</P>
					<div style="background: #e4e4e4; border-bottom-left-radius: 50px; border-top-left-radius: 50px">
						<table>
							<tr>
								<td>
									<i class="fas fa-sign fa-2x" style="border-radius: 50%; border: 0px solid black; padding: 10px; background: white;"></i>
								</td>
								
								<td>
									<h2 style="font-weight: bold;"> OBJECTIVE</h2>
								</td>
							</tr>
						</table>
					</div>
					
					
					
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