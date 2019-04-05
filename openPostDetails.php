<?php
require("admin/config/db.php");
//characters from Database is fixed
mysqli_set_charset($conn, "utf8mb4");
?>
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
				<div class="col-lg-8 col-12">
					<div class="col-12 showBoarderWithNoRadious marginTopBottomByTen boldText whiteTextWithBlackBackground boarderShadow">
						Current Post
					</div>


					<?php
					$postID = $_GET['id'];
					$queryIndexPage = "SELECT *
										FROM mra_post
										WHERE id='$postID'";
					$connectToQueryIndexPage = mysqli_query($conn, $queryIndexPage);
					$getEachRow = mysqli_fetch_array($connectToQueryIndexPage);
						$storeID = $getEachRow['id'];
						$storeDate = $getEachRow['date'];
						$storeTitle = $getEachRow['title'];
						$storeDetails = $getEachRow['details'];
						$storeImage = $getEachRow['img'];
						$storeImageName = $getEachRow['imgName'];
						$storeCategory = $getEachRow['cat'];
					?>
					<div class="showBoarder eachMainPostUpperBottom lightBlueBackground boarderShadow">
						<div class="row marginAllSidesByTen">
							<div class="col-12 reponsiveTextSizeMaxTwentyTwo boldText"> <?php echo $storeTitle; ?></div>
						</div>

						<div class="row marginAllSidesByTen">
							<div class="col-lg-12">
								<div class="radiusOfBoarder">
									<div style="background: black; border-radius: 10px;">
										<img alt="PostImage" class="imageStyleOfPosts img-fluid" src="assets/images/dynamic/postMainImage/<?php echo $storeImage; ?>">
									</div>
									<h4 class="boldText reponsiveTextSizeMaxSixteen eachMainPostUpperBottom"><?php echo $storeImageName; ?></h4>
								</div>
							</div>
							<div class="col-lg-12"></div>
							<div class="col-lg-12 whiteColorBackground reponsiveTextSizeMaxSixteen justifiedParagraph radiusOfBoarder">
								<p><?php echo nl2br($storeDetails); ?></p>
							</div>
						</div>

						<div class="row marginAllSidesByTwenty">
							<div class="col-6 alignLeft">
								<span class="boldText">Date:</span> <?php echo $storeDate; ?>
							</div>
							<div class="col-6 alignRight"></div>
						</div>
					</div>
					<hr>

					
					
					


					
					
					<?php
					$comment_query = "Select *
										FROM mra_comments
										WHERE id_post_fk = '$postID'";
					
					$connect_to_query = mysqli_query($conn, $comment_query);
					$count_rows = mysqli_num_rows($connect_to_query);
					if($count_rows > 0){
					?>
					
					
					
					
					
					
					<div id="commentsHeader" class="col-12 showBoarderWithNoRadious marginTopBottomByTen boldText whiteTextWithBlackBackground boarderShadow disableHover">
							<div class="row" style="text-align: center;">
								<div class="col-4" style="text-align: center;">

								</div>

								<div class="col-4 reponsiveTextSizeMaxSixteen" style="text-align: center;">
									Comments <span class="badge badge-light"><?php echo $count_rows; ?></span>
								</div>

								<div id="showHideLabel" class="col-4 reponsiveTextSizeMaxSixteen" style="text-align: right;">
									Show
								</div>
							</div>
					</div>
					

					<div id="commentsBlock">
					 
					<?php
					while($getEachRow = mysqli_fetch_array($connect_to_query)){
							$commentID = $getEachRow['id_comnt'];
							$commentFK = $getEachRow['id_post_fk'];
							$commentMSG = $getEachRow['comments'];
							$commentNAM = $getEachRow['names_comnt'];
							$commentDate = $getEachRow['date_comnt'];	
					?>
						
						
					
					<div class="showBoarder eachMainPostUpperBottom lightBlueBackground boarderShadow">
						<div style="margin: 10px;">
						<div class="boldText" style="text-align: left;">
							Name: <span style="color: blue;"><?php echo $commentNAM; ?></span>
						</div>
							<div class="CommentsStyle whiteColorBackground reponsiveTextSizeMaxSixteen text-justify" style="padding: 5px;">
								<?php echo $commentMSG; ?>	
							</div>
						 
						<div style="text-align: right;">
							Date: <span style="color: blue;"><?php echo $commentDate; ?></span>
						</div>
							</div>
					</div>

					
					<?php
						}
					}
					?>
					
					
					

					
					
					

					
						
						
						

						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					
					
					
					
					
					
					
					
					
					
					
					
					
						<div class="col-12 showBoarderWithNoRadious marginTopBottomByTen boldText whiteTextWithBlackBackground boarderShadow">
							Add New Comment
						</div>

						<div class=" eachMainPostUpperBottom " style="box-shadow: 0px 0px 50px black; margin: 20px 5px;"><br>

						<form action="" method="post" enctype="multipart/form-data">
							<div style="margin: 10px;">
							<div class="boldText" style="text-align: left; margin: 10px;">
								<input class="form-control" type="text" name="comntName" id="comntNameID" placeholder="Name">
							</div>
							<div style="margin: 10px;">
								<label for="comntTextID" >Add Comment:</label>
								<textarea required class="form-control" id="comntTextID" name="comntText" rows = 5></textarea>
								</div>

							<div style="text-align: right; padding: 20px 10px;">
								<button name="submit" class="btn btn-primary">Post</button>
							</div>
								</div>
							</form>		
						<?php
							if(isset($_POST['submit'])){
								$name = $_POST['comntName'];
								$comment = $_POST['comntText'];

								if($name == null){
									$name = "Anonymous";
								}

								$insert = "INSERT INTO mra_comments(id_post_fk, comments, names_comnt)
											VALUE($postID , '$comment', '$name')";

								$run = mysqli_query($conn, $insert);
								if($run){
									echo "<script>alert('Your comment Inserted Successfully')</script>";
								}else{
									echo "<script>alert('Your comment Inserted Unsuccessfully')</script>";
								}
							}
						?>	

						</div>

					</div>
				</div>

				<?php
					include "templates/sideBarTemplate.php";
				?>
				
				
				
				
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
		
		//Added Hover Cursor On mouser Over
		$("#showHideLabel").hover(function() {
			$(this).css('cursor','pointer');
		}, function() {
			$(this).css('cursor','auto');
		});
		
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