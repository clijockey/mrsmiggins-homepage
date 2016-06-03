<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <script type="text/javascript" src="timeout.js"></script>
  <title>M.E.C. :: Miggins Employee Connection</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>

<body>
  <div id="main">
    <div id="header">
	  <div id="banner">
	    <div id="welcome">
	      <h1>Miggins Employee Connection</h1>
	    </div><!--close welcome-->
	    <div id="menubar">
          <ul id="menu">
            <li class="current"><a href="index.html"  onclick="checkTimeOut()">Home</a></li>
            <li><a href="time"  onclick="checkTimeOut()">Latest News</a></li>
            <li><a href="christmas"  onclick="checkTimeOut()">Seasonal</a></li>
	    <li><a href="http://private.ukidcv.local/confidential.html"  onclick="checkTimeOut()"><span style="color: red;">Employee R&amp;D Centre</span></a>
          </ul>
        </div><!--close menubar-->
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="site_content">

      <div class="slideshow">
		<ul class="slideshow">
          <li class="show"><img width="900" height="350" src="images/banner-1.jpg" alt="M.E.C. :: Miggins Employee Connection" /></li>
          <li><img width="900" height="350" src="images/banner-2.jpg" alt="New branch open in Accrington Arndale Centre" /></li>
        </ul>
      </div><!--close slideshow-->

	  <div id="content">
        <div class="content_item">
		  <h1>Miggins R&D Page</h1>
          <p><?php if($_ENV["HOSTNAME"]) {?>Container <?php echo $_ENV["HOSTNAME"]; ?><?php } ?></p>
		  <p>This is the location you (as permenant memebers of staff) can get a sneak peak into the future of pies!</p>
		  <p>As a development team we have eaten litteally hundreds of pies to make our customers super happy but shhhhhhh don't share this content with just anyone.</p>
		  <p>We have been working hard to transform the way our customers will be able to order and customise pies with <strong>Piealicious</strong> our upcoming online customise-to-order pie. We will also be publishing an app!!</p>
		</div><!--close content_item-->
      </div><!--close content-->

	  <div class="container">
	    <div class="ourwork">
	      <h3 style="color: red">Piealicious</h3>
		  <p><img style="float: right; padding-left: 1em;"src="images/piealicious.png" />
		  <p>Preview the latest app.</p>
		  <p>Please share your thoughts (every comment will get a free pie).</p>
		  <div class="more">
		    <a style="color: red"  onclick="checkTimeOut()" href="http://private.ukidcv.local/confidential.html">Piealicious</a>
		  </div><!--close more-->
	    </div><!--close ourwork-->
	    <div class="testimonials">
	      <h3>As Featured in Time</h3>
		  <p><img style="float: right; padding-left: 1em;"src="images/time.jpg" />
		  Our CEO was featured in Time Magazine this month, read what he had to say in this thrilling insight in to the world of big-pie</p>
		  <div class="more">
		    <a  onclick="checkTimeOut()" href="time">Read more</a>
		  </div><!--close more-->
	    </div><!--close testimonials-->
	    <div class="projects">
	      <h3>Christmas Spirit</h3>
		  <p><img style="float: right; padding-left: 1em;"src="images/mince-pies.jpg" />
		  We had another fantastic Christmas, thanks to you all for making it magical and keeping the mince pie on the menu!</p>
		  <div class="more">
		    <a  onclick="checkTimeOut()" href="christmas">Read more</a>
		  </div><!--close more-->
	    </div><!--close projects-->
	  </div><!--close container-->

	</div><!--close site_content-->

  </div><!--close main-->

  <div id="footer_container">
    <div id="footer">
	  <a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a> | <a href="http://fotogrph.com/">Images</a> | Heart Internet <a href="http://www.heartinternet.co.uk/web-hosting/">web hosting</a> | website template by <a href="http://www.araynordesign.co.uk">ARaynorDesign</a>
    </div><!--close footer-->
  </div><!--close footer_container-->

</body>
</html>
