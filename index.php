<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <script type="text/javascript" src="timeout.js"></script>
  <title>Mrs Miggins Inc.</title>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />

  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>

    <?php
        $cloud = 'AWS';

        if (strpos($_ENV['HOST'], 'metapod')) {
                $cloud = 'Metapod';
        }
    ?>
</head>

<body>
  <div id="main">
    <div id="header">
	  <div id="banner">
	    <div id="welcome">
	      <h1>Mrs Miggins Inc.</h1>
	    </div><!--close welcome-->
	    <div id="menubar">
          <ul id="menu">
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="#">Latest News</a></li>
            <li><a href="https://mantl.io">Cisco Mantl</a></li>
            <li><a href="http://www.cisco.com/go/cloud">Cisco Cloud</a></li>
          </ul>
        </div><!--close menubar-->
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="site_content">

      <div class="slideshow">
		<ul class="slideshow">
          <li class="show"><img width="900" height="350" src="images/banner-1.jpg" alt="Mrs Miggins" /></li>
          <li><img width="900" height="350" src="images/banner-2.jpg" alt="New branch open in Accrington Arndale Centre" /></li>
        </ul>
      </div><!--close slideshow-->

	  <div id="content">
        <div class="content_item">
		</div><!--close content_item-->
      </div><!--close content-->

	  <div class="container">

        <div class="ourwork">
	      <h3>Phone App</h3>
		  <p><img style="float: right; padding-left: 1em;"src="images/piealicious.png" />
		  <p>It has finally arrived, we now have an app for your phone to speed up the ordering of pies. Pies will never be the same again!</p>
		  <div class="more">
		    <a onclick="checkTimeOut()" href="#">Launch</a>
		  </div><!--close more-->
	    </div><!--close ourwork-->

        <div class="testimonials">
	      <h3>Container Location</h3>
		  <p><img style="float: center; padding-left: 1em;"src="images/CiscoCloud.png" />
          <b>Cloud:</b> <?=$cloud?></br>
		  <?php if($_ENV["HOSTNAME"]) {?><b>Container:</b> <?php echo $_ENV["HOSTNAME"]; ?><?php } ?></br></p>

	    </div><!--close projects-->

        <div class="projects">
	      <h3>As Featured in Time</h3>
		  <p><img style="float: right; padding-left: 1em;"src="images/time.jpg" />
		  Our CEO was featured in Time Magazine this month, read what he had to say in this thrilling insight in to the world of big-pie</p>
		  <div class="more">
		    <a  onclick="checkTimeOut()" href="time">Read more</a>
		  </div><!--close more-->
	    </div><!--close testimonials-->


      </div><!--close container-->

	</div><!--close site_content-->

  </div><!--close main-->

  <div id="footer_container">
    <div id="footer">

    </div><!--close footer-->
  </div><!--close footer_container-->

</body>
</html>
