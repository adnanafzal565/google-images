<html>
	<head> 
		<title>Google Images</title>
		<link rel="stylesheet" href="assets/default.css" />
		<link rel="stylesheet" href="assets/component.css" />
		<script src="assets/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<h1>Google Images</h1>	
			</header>
			
			<div class="main">
				<ul id="og-grid" class="og-grid">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "tutorials");
                    $sql = "SELECT * FROM images";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_object($result)) {
                    ?>
					<li>
						<a href="javascript:void(0);" data-largesrc="uploads/<?php echo $row->path; ?>" data-title="<?php echo $row->title; ?>" data-description="<?php echo $row->description; ?>">
							<img src="uploads/<?php echo $row->path; ?>" style="width: 250px; height: 250px;" class="img-responsive" alt="img01"/>
						</a>
					</li>
                    <?php } ?>
				</ul>
			</div>
		</div><!-- /container -->
		<script src="assets/jquery-1.11.3.min.js"></script>
		<script src="assets/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
	</body>
</html>