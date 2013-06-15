<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
  <link rel="stylesheet" href="css/default.css" />
	<script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
	<script src="js/myScript.js" type="text/javascript"></script>
</head>
<body>
<?php require_once "includes/functions.php"; ?>
<div id="wrap">

<ul id="nav">
<li><a href="#content_1" class="selected">NETTUTS</a></li>
<li><a href="#content_2">ThemeForest</a></li>
<li><a href="#content_3">Screencasts</a></li>
</ul>

	<div id="mainContent">

		<div id="content_1">
			<?php getFeed("http://feedproxy.google.com/nettuts"); ?>
		</div><!--end content 1-->

		<div id="content_2">
			<?php getFeed("http://feedproxy.google.com/themeforest"); ?>
		</div><!--end content 2-->

		<div id="content_3">
			<?php getFeed("http://feeds.feedburner.com/NETTUTSVideos"); ?>
		</div><!--end content 3-->

	</div><!--end main content -->

</div><!--end wrap-->
</body>
</html>
