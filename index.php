<?php
require "lib/system_common.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script src="src/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="src/common.css">
</head>
<body>
	<nav>
		<div id="nav_wrap">
			<?php $HeaderInfo->getHeaderInfo(); ?>
		</div>
	</nav>

	<div id="content">
		<!-- メイン -->
		<div id="main">
			<div class="wrap_slider">
				<ul class="slider">
					<li><a href="#"><img src="img/hana.jpg" alt="花"></a></li>
					<li><a href="#"><img src="img/kiku.jpg" alt="菊"></a></li>
					<li><a href="#"><img src="img/koala.jpg" alt="コアラ"></a></li>
					<li><a href="#"><img src="img/kurage.jpg" alt="くらげ"></a></li>
				</ul>
			</div>
		</div>
		<!-- メイン -->
		<!-- サイド -->
		<div id="side">
			
		</div>
		<!-- サイド -->
	</div>
	
</body>
</html>