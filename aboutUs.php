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
				<div class="col-lg-12 col-12">
					<div class="col-12 showBoarderWithNoRadious marginTopBottomByTen boldText whiteTextWithBlackBackground boarderShadow">
						About Us
					</div>

				</div>
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