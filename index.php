<?php
date_default_timezone_set("Asia/Jakarta");
include('config.php');
include('func.php');
$api_url = NEWS_API_URL."top-headlines?country=id&category=health&apiKey=".NEWS_API_KEY;
$top_headline = get_news_api_info($api_url);
//pre($top_headline);
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<style type="text/css">
		.card-img-top{
			height: 200px;
		}
		div.header{
		    /* border-radius: 5px; */
		    background-color: #0A3D62;
		    width: 100%;
		    margin: auto;
		    padding-bottom: 15px;
		}
		ul {
		    text-align: center;
				text-color: #ecf0f1;
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		}
		li{
		    display: inline;
		}
		li a{
			margin-right: 1cm;
			color: white;
		}
	</style>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/sweetalert.min.js"></script>
</head>
<body>
	<div class="header">
			<center> <b> <font size="7" color="#FFC652">CEK PANGAN</font> </b> </center>
			<nav>
							<ul>
											<li><a href="/eai">HOME</a></li>
											<li><a href="/eai/news.php">NEWS</a></li>
											<li><a href="/eai/statistics.php">STATISTICS</a></li>
											<li><a href="/eai/contact.php">CONTACT</a></li>
											<li><a href="/eai/about.php">ABOUT</a></li>
							</ul>
			</nav>
	</div>
	<div><center>hello</center></div>
</body>
</html>
