<?php
  $asset = asset('/');
?>
<!DOCTYPE html>
<html>
<head>
<title>Exative</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{$asset}}css/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.html">Exative</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
      </ul>
    </nav>
  </header>
</div>
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <h3 class="heading">Technotree-bd soft</h3>
            <p>Fusce rutrum laoreet magna eleifend lorem in euismod sodales commodo mauris sit amet lorem metus donec pharetra</p>
            <p class="font-x1 uppercase bold">Lobortis phasellus in nisl arcu</p>
            <footer>
              <ul class="nospace inline pushright">
                <li><a class="btn" href="#">Feugiat tellus</a></li>
                <li><a class="btn inverse" href="#">Tristique ornare</a></li>
              </ul>
            </footer>
          </article>
        </li>
        <li>
          <article>
            <h3 class="heading">Efficitur etiam consectetur</h3>
            <p>Tempus purus ac dignissim augue in vivamus luctus tempor odio et dapibus diam mauris id magna vulputate velit quis</p>
            <p class="font-x1 uppercase bold">Felis nam elementum risus nibh</p>
            <footer>
              <ul class="nospace inline pushright">
                <li><a class="btn" href="#">Orci venenatis</a></li>
                <li><a class="btn inverse" href="#">Hendrerit quam</a></li>
              </ul>
            </footer>
          </article>
        </li>
        <li>
          <article>
            <h3 class="heading">Facilisis nullam ornare</h3>
            <p>Et tortor non tincidunt sed vitae enim eget dolor aliquet sodales auctor diam nullam luctus massa mollis accumsan</p>
            <p class="font-x1 uppercase bold">Vestibulum mi vehicula lacinia</p>
            <footer>
              <ul class="nospace inline pushright">
                <li><a class="btn" href="#">Turpis curabitur</a></li>
                <li><a class="btn inverse" href="#">Hendrerit feugiat</a></li>
              </ul>
            </footer>
          </article>
        </li>
      </ul>
    </div>
    
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{$asset}}js/jquery.min.js"></script>
<script src="{{$asset}}js/jquery.backtotop.js"></script>
<script src="{{$asset}}js/jquery.mobilemenu.js"></script>
<script src="{{$asset}}js/jquery.flexslider-min.js"></script>
</body>
</html>