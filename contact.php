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
	body {font-family: Arial, Helvetica, sans-serif;}
	* {box-sizing: border-box;}

	input[type=text], select, textarea {
	  width: 100%;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	  margin-top: 6px;
	  margin-bottom: 16px;
	  resize: vertical;
	}

	input[type=submit] {
	  background-color: #0A3D62;
	  color: white;
	  padding: 12px 20px;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	input[type=submit]:hover {
	  background-color: #45a049;
	}

	.container2 {
	  border-radius: 5px;
	  background-color: #f2f2f2;
	  padding: 20px;
	}
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

		.footer{
  background: #0A3D62;
  color:white;

  .links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
      &:hover{
        text-decoration:none;
        color:#4180CB;
        }
    }
  }
  .about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#4180CB}
    }
  }
  .location{
    i{font-size: 18px;}
  }
  .copyright p{border-top:1px solid rgba(255,255,255,.1);}
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
											<li><a href="/newsapi-master">HOME</a></li>
											<li><a href="/newsapi-master/news.php">NEWS</a></li>
											<li><a href="/newsapi-master/staticsics.php">STATISTICS</a></li>
											<li><a href="/newsapi-master/contact.php">CONTACT</a></li>
											<li><a href="/newsapi-master/about.php">ABOUT</a></li>
							</ul>
			</nav>
	</div>
	<div class="container2">
	  <form action="/action_page.php">
	    <label for="fname">First Name</label>
	    <input type="text" id="fname" name="firstname" placeholder="Your name..">

	    <label for="lname">Last Name</label>
	    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

	    <label for="country">Country</label>
	    <select id="country" name="country">
	      <option value="indonesia">Indonesia</option>
	      <option value="canada">Canada</option>
	      <option value="usa">USA</option>
	    </select>

	    <label for="subject">Subject</label>
	    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

	    <input type="submit" value="Submit">
	  </form>
	</div>
	<div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-xs-12 about-company">
			<b> <font size="6" color="#FFC652">CEK PANGAN</font> </b>
      <p class="pr-5 text-white-50">Sebuah platform website yang berfungsi untuk memantau harga pangan</p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-lg-4 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="text-left">
          <li>- <a href="https://telkomuniversity.ac.id/">Telkom University</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
      <p>Jl Telekomunikasi no 1 Bandung</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
      <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>
</body>
</html>
