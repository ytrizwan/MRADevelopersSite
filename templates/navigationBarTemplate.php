<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark disableHover">
	<a class="navbar-brand" href="index.php">
				<?php
					include "templates/mra4developersLogo.php";
				?>
			</a>


	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
   				<span class="navbar-toggler-icon"></span>
   			</button>


	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="techPosts.php">Techniques</a>
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPrograms" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programs</a>

				<div class="dropdown-menu" aria-labelledby="navbarDropdownPrograms">
					<a class="dropdown-item" href="androidPosts.php">Android</a>
					<a class="dropdown-item" href="javaPosts.php">Java</a>
					<a class="dropdown-item" href="phpPosts.php">PHP</a>
				</div>
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInfo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</a>

				<div class="dropdown-menu" aria-labelledby="navbarDropdownInfo">
					<a class="dropdown-item" href="aboutUs.php">About Us</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="curriculumVitae.php">Curriculum vitae (CV)</a>
				</div>
			</li>
			
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>