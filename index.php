<?php
require("admin/config/db.php");
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

		<!--Using Jumbotron at Top After The Header-->
		<div class="jumbotron jumbotronWhiteColor disableHover noBoarderRadius">
			<h1 class="display-3 text-center responsiveTextSize">Welcome to <a href="index.php">
				<?php
					include "templates/mra4developersLogo.php";
				?>
				</a></h1>
			<br>
			<div class="container">
				<div class="lineHorizontalWithBlackColor"></div>
			</div><br>
		</div>



 
 





		<!--Main Middle Block, Where I put All Elements-->
		<div class="container mainContainer marginTopByFive">
			<div class="row text-center">
				<div class="col-lg-8 col-12">
					<div class="col-12 showBoarderWithNoRadious marginTopBottomByTen boldText whiteTextWithBlackBackground boarderShadow">
						Latest Posts
					</div>


					<?php
					$queryIndexPage = "SELECT *
										FROM mra_post
										ORDER BY id DESC";
					$connectToQueryIndexPage = mysqli_query($conn, $queryIndexPage);
					$countRows = mysqli_num_rows($connectToQueryIndexPage);
					if($countRows > 0){
						while($getEachRow = mysqli_fetch_array($connectToQueryIndexPage)){
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
							<div class="col-lg-4 ">
								<div class="radiusOfBoarder">
									<div style="background: black; border-radius: 10px;">
										<img class="imageStyleOfPosts img-fluid" src="assets/images/dynamic/postMainImage/<?php echo $storeImage; ?>" alt="PostImage">
									</div>
									<h4 class="boldText reponsiveTextSizeMaxSixteen eachMainPostUpperBottom"><?php echo $storeImageName; ?></h4>
								</div>
							</div>
							<div class="col-lg-1"></div>
							<div class="col-lg-7 whiteColorBackground reponsiveTextSizeMaxSixteen justifiedParagraph radiusOfBoarder">
								<p><?php echo nl2br($storeDetails); ?></p>
							</div>
						</div>

						<div class="row marginAllSidesByTwenty">
							<div class="col-6 alignLeft">
								<span class="boldText">Date:</span> <?php echo $storeDate; ?>
							</div>
							<div class="col-6 alignRight">
								<a href="openPostDetails.php">Open</a>
							</div>
						</div>
					</div>
					<hr>


					<?php
						}
					}
					?>
					









					
					
					
					
					
					
					
					
					<div class="showBoarder eachMainPostUpperBottom lightBlueBackground boarderShadow">
						<div class="row marginAllSidesByTen">
							<div class="col-12 reponsiveTextSizeMaxTwentyTwo boldText"> This is Post Header</div>
						</div>

						<div class="row marginAllSidesByTen">
							<div class="col-lg-4 ">
								<div class="radiusOfBoarder">
									<div style="background: black; border-radius: 10px;">
										<img class="imageStyleOfPosts img-fluid" src="assets/images/dynamic/postMainImage/post03.jpg" alt="PostImage">
									</div>
									<h4 class="boldText reponsiveTextSizeMaxSixteen eachMainPostUpperBottom">This is Part Of Images</h4>
								</div>
							</div>
							<div class="col-lg-1"></div>
							<div class="col-lg-7 whiteColorBackground reponsiveTextSizeMaxSixteen justifiedParagraph radiusOfBoarder">
								<p>Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.</p>
							</div>
						</div>

						<div class="row marginAllSidesByTwenty">
							<div class="col-6 alignLeft">
								<span class="boldText">Date:</span> 22/01/2019
							</div>
							<div class="col-6 alignRight">
								<a href="openPostDetails.php">Open</a>
							</div>
						</div>
					</div>
					<hr>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					









					<div>
						<nav aria-label="Page navigation example text-center">
							<ul class="pagination justify-content-center">
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Previous">
								 <span aria-hidden="true">&laquo;</span>
								 <span class="sr-only">Previous</span>
								 </a>
								

								</li>
								<li class="page-item"><a class="page-link" href="#">1</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">2</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Next">
								 <span aria-hidden="true">&raquo;</span>
								 <span class="sr-only">Next</span>
								 </a>
								

								</li>
							</ul>
						</nav>
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
	
	<script type="text/javascript" src="assets/scripts.js"></script>
</body>
</html>