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
		<div class="container marginTopByFive showBoarderLeftRight">
			<div class="row">
				<div class="col-lg-4 text-center padding_left_fifty" style="background: #7543ad; color: white;">

					<img class="imageStyleOfCV img-fluid" alt="rizwan" src="assets/images/static/rizwan.jpg">
					<div class="text_Align_Left" style="margin-left: 10px;">
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
						</table><br>
						
						
						
						
						
						
						
					</div>
					
					
				</div>
				
				<div class="col-lg-8 marginTopByTwenty brushFront padding_left_fifty" style="min-height: 1000px;">
					<h1 class="reponsiveText_Size_CV_Name">Muhammad Rizwan Asim</h1>
					<P class="reponsiveText_Size_MaxFifteen_MinSeventeenVM">Software Developer</P>
					<div class="label_Style_CV">
						<table>
							<tr>
								<td>
									<i class="fas fa-sign fa-2x icon_Style_CV"></i>
								</td>
								
								<td>
									<span class="reponsiveText_Size_MaxThirtyEight_MinFourVM bold_Text"> OBJECTIVE</span>
								</td>
							</tr>
						</table>
					</div>
					
					<p class="reponsiveTextSizeMaxEighteen padding_left_fifty text_Align_Justify">To be a part of an organization that provides an atmosphere of mutual growth and training, where I can show my talent and potential while applying my Computer Sciences, Information Technology qualifications and Interpersonal skills.</p>
					
					
					
					<div class="label_Style_CV">
						<table>
							<tr>
								<td>
									<i class="fas fa-graduation-cap fa-2x icon_Style_CV"></i>
								</td>
								
								<td>
									<span class="reponsiveText_Size_MaxThirtyEight_MinFourVM bold_Text"> ACADEMIC ACHIEVEMENTS </span>
								</td>
							</tr>
						</table>
					</div>
					
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<span class="reponsiveText_Size_MaxEighteen_MinOneVW padding_left_fifty text_Align_Justify">July 2018 - Dec 2018</span>
						</div>
						
						<div class="col-md-8 col-sm-12" style="float: left;">
							<span class="reponsiveText_Size_MaxEighteen_MinOneVW text_Align_Left float_TO_Left padding_left_fifty">Diploma of Software Development</span><br>
							<span class="reponsiveText_Size_MaxEighteen_MinOneVW text_Align_Left float_TO_Left padding_left_fifty weight_bold oolor_White_Gray">Canberra Institute Of Technology (CIT)</span>
						</div>
					</div>
					
					<div class="container"><hr></div>
					
					
					
					
					
					
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<span class="reponsiveText_Size_MaxEighteen_MinOneVW padding_left_fifty text_Align_Justify">Sep 2012 - Sep 2016</span>
						</div>
						
						<div class="col-md-8 col-sm-12" style="float: left;">
							<span class="reponsiveText_Size_MaxEighteen_MinOneVW text_Align_Left float_TO_Left padding_left_fifty">
									Bachelor of Science in Computer Science (4 Year Program)
								 </span><br>
							<span class="reponsiveText_Size_MaxEighteen_MinOneVW text_Align_Left float_TO_Left padding_left_fifty weight_bold oolor_White_Gray">Virtual University of Pakistan (VU)</span>
						</div>
					</div>
					<div class="container"><hr></div>
					
					
					
					
					
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<span class="reponsiveText_Size_MaxEighteen_MinOneVW padding_left_fifty text_Align_Justify">2008 - 2010</span>
						</div>
						
						<div class="col-md-8 col-sm-12" style="float: left;">
							<span class="reponsiveText_Size_MaxEighteen_MinOneVW text_Align_Left float_TO_Left padding_left_fifty">Intermediate</span><br>
							<span class="reponsiveText_Size_MaxEighteen_MinOneVW text_Align_Left float_TO_Left padding_left_fifty weight_bold oolor_White_Gray">Government College Township Lahore, Pakistan</span>
						</div>
					</div>
					<div class="container"><hr></div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<div class="label_Style_CV">
						<table>
							<tr>
								<td>
									<i class="fas fa-trophy fa-2x icon_Style_CV"></i>
								</td>
								
								<td>
									<span class="reponsiveText_Size_MaxThirtyEight_MinFourVM bold_Text"> ACHIEVEMENTS</span>
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