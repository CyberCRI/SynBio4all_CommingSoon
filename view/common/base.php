
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Synbio4all</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="title" content="Synbio4all" />
		<meta name="description" content="Synbio4all comming soon !" />
		<meta name="keywords" content="synthetic biology DIY bio synbio citizen science" />
		<meta name="language" content="en" />
		<meta name="subject" content="Synbio4all comming soon !" />
		<meta name="robots" content="All" />
		<meta property="og:title" content="Synbio4all" />
		<meta property="og:description" content="SynBio4all is a synthetic biology learning through research platform. We aim to have an open science environment, where every stage of the research process, specifically the idea conception, development of a research plan, conducting the research, and analyzing results will all be done by you, the participants through use of this online platform. " />
		<meta property="og:image" content="" />
		<meta name="copyright" content="CRi" />
		<meta name="abstract" content="Synbio4all comming soon !" />
		<link rel="stylesheet" type="text/css" href="./styles/base.css" />
		<script src="./js/function.js"></script>
	</head>
	<body id="all">
		<div id="head">
			<?php require "head.php"; ?>
		</div>
		<div id="fixedMenuRight">
			<div id="menu_up">
				<?php require "menu_up.php"; ?>
			</div>
		</div>
		<div id="backBlock" class="arondit">
			<div id="mainBlock">
				<div id="contenu" class="superblock">
					<?php
						//static part
						require "contents/contents.php";
					?>
				</div>
				<div id="bottom" class="superblock">
					<?php require "bottom.php"; ?>
				</div>
			</div>
		</div>
	</body>
</html>
