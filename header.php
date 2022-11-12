<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Devkodz</title>
	<link rel="icon" type="image/x-icon" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/aos.css">
	<link rel="stylesheet/less" type="text/css" href="less/style2.less" />
	<link rel="stylesheet/less" type="text/css" href="less/main.less" />
	<link rel="stylesheet/less" type="text/css" href="less/responsive.less" />
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	
</head>
<body onload="loadfun()">
	<header class="header">
	  <nav class="navbar">
	    <div class="container">
	      <div class="brand">
	        <img src="img/logo2.png" class="dark01z">
	        <img src="img/logo-light.png" class="light01z">   
	        <a href="./"><h1>De<span class="sld-clr">vko</span>dz</h1></a>
	      </div>
	      <div class="toggle">
	        <p>Menu</p><span class="toggle-btn"></span>
	      </div>
	      <div class="menu">
	        <ul class="menu-list">
	          <li class="menu-item">
	            <a <?php echo ($page == 'one') ?  "class='menu-link active'" : ""; ?> href="./" class="menu-link">Home</a>
	          </li>
	          <li class="menu-item">
	            <a <?php echo ($page == 'two') ?  "class='menu-link active'" : ""; ?> href="about-us" class="menu-link">About</a>
	          </li>
	          <li class="menu-item">
	            <a <?php echo ($page == 'three') ?  " class='menu-link active'" : ""; ?> href="work" class="menu-link">Works</a>
	          </li>
	          <li class="menu-item">
	            <a <?php echo ($page == 'four') ?  "class='menu-link active'" : ""; ?> href="contact-us" class="menu-link">Contact</a>
	          </li>
	          <li class="menu-item">
	            <div class="togglez togglez-mob">
                  <input type="checkbox" id="togglezm">
                  <span>Dark</span>
                  <label for="togglezm"></label>
                  <span>Light</span>
                </div>
	          </li>
	        </ul>
	      </div>
	      
	      <div class="togglez togglez-desk">
              <input type="checkbox" id="togglez">
              <span>Dark</span>
              <label for="togglez"></label>
              <span>Light</span>
            </div>
	    </div>
	  </nav>
	</header>
