<?php
require("admin/config/db.php");
//characters from Database is fixed
mysqli_set_charset($conn, "utf8mb4");

//PHP Code for Page Numbers (2/4)
if (isset($_GET["page"]))
{ 
	$page  = $_GET["page"];
} else {
	$page=1;
}; 

$start_from = ($page-1) * $results_per_page;





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
						Techniques Posts
					</div>


					<?php
					//PHP query for Dynamic Post
					$queryIndexPage = "SELECT *
										FROM mra_post
										WHERE cat = 't'
										ORDER BY id DESC
										LIMIT $start_from, ".$results_per_page;
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
								<a href="openPostDetails.php?id=<?php echo $storeID; ?>">Open</a>
							</div>
						</div>
					</div>
					<hr>
					<?php
						}
					}
					?>
					









					
					
					
					
					
					
					
					

					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<?php
					//PHP Code for Page Numbers (3/4)
					$sql = "SELECT COUNT(ID) AS total FROM ".$datatable." WHERE cat = 't';"; 
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					$total_pages = ceil($row["total"] / $results_per_page);
					
					?>

					<div>
						<nav aria-label="Page navigation example text-center">
							<ul class="pagination justify-content-center">
								
								<li class="page-item <?php if($page == 1){ echo " disabled ";} ?>">
									<a class="page-link" href="techPosts.php?page=<?php echo "1"; ?>" aria-label="First">
								 		<span aria-hidden="true">First</span>
								 		<span class="sr-only">First</span>
								 	</a>
								</li>
								
								
								<li class="page-item <?php if($page == 1){ echo " disabled ";} ?>">
									<a class="page-link" href="techPosts.php?page=<?php echo $page-1; ?>" aria-label="Previous">
								 		<span aria-hidden="true">&laquo;</span>
								 		<span class="sr-only">Previous</span>
								 	</a>
								</li>
								
								
								
								
								
								
								
								
								
								
								
								
								<?php 
								//PHP Code for Page Numbers (4/4)
								//Decsion on less than 8 when "total_page" is less than 8
								if($total_pages <= 6 && $page <= 6){
									for($i=$start_page_number; $i<=$total_pages; $i++) {
								?>	
								<li 
									class="page-item <?php if($page == $i){ echo " active ";} ?>">
									<?php 
									echo "<a class=\"page-link\" href='techPosts.php?page=".$i."'>";
									echo $i;
									echo "</a> ";
									?>
								</li>		
								<?php	
									}
								//Decsion less than 8 when "total_page" is greater than 8
								}elseif($total_pages > 6 && $page < 6){
									for($i=$start_page_number; $i<=6; $i++) {
								?>	
								<li 
									class="page-item <?php if($page == $i){ echo " active ";} ?>">
									<?php 
									echo "<a class=\"page-link\" href='techPosts.php?page=".$i."'>";
										if($i < 6){
											echo $i;
										}elseif($i == 6){
											echo "6 ...";
										}
									
									echo "</a> ";
									?>
								</li>
								<?php
									}
								//Decsion when "page" is greater than limit of last Number
								}elseif($page > $total_pages-2){
									for($i=$page-2; $i<=$total_pages; $i++){
								?>
								<li 
									class="page-item <?php if($page == $i){ echo " active ";} ?>">
									<?php 
									echo "<a class=\"page-link\" href='techPosts.php?page=".$i."'>";
									echo $i;
									echo "</a> ";
									?>
								</li>
								<?php		
									}
								//Decsion when "total_pages" and "page" both are greater than 8
								}elseif($total_pages >= 6 && $page >= 6){
									for($i=$page-2; $i<=$page+2; $i++){
								?>
								<li 
									class="page-item <?php if($page == $i){ echo " active ";} ?>">
									<?php 
									echo "<a class=\"page-link\" href='techPosts.php?page=".$i."'>";
									echo $i;
									echo "</a> ";
									?>
								</li>
								<?php
									}
								};
								?>

	
								
								
								
								
								
								
								
								
								
								
								


								<li class="page-item <?php if($page == $total_pages){ echo " disabled ";} ?>">		
									<a class="page-link" href="techPosts.php?page=<?php echo $page+1; ?>" aria-label="Next">
								 		<span aria-hidden="true">&raquo;</span>
								 		<span class="sr-only">Next</span>
								 	</a>
								</li>
								
								<li class="page-item <?php if($page == $total_pages){ echo " disabled ";} ?>">		
									<a class="page-link" href="techPosts.php?page=<?php echo $total_pages; ?>" aria-label="Last">
								 		<span aria-hidden="true">Last</span>
								 		<span class="sr-only">Last</span>
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