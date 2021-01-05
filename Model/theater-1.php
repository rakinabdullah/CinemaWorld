<?php
$db = mysqli_connect('localhost', 'root', '', 'online_booking_ticket');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cinema World | Articles</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page3">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#">Cinema <span>World</span></a></div>
          <ul>
          </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about-us.html">About</a></li>
            <li><a href="contact-us.html">Contacts</a></li>
            <li class="last"><a href="adminLogin\login.php"> Admin Login </a></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <div class="line-hor"></div>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                <h3><span>Star Cineplex</span></h3>
                <p>The First Multiplex Cinema Theatre in Bangladesh STAR CINEPLEX : Show Motion Limited, incorporated in 19th December 2002, pioneered the modern Multiplex Movie Theater industry with STAR Cineplex brand in Bangladesh. With lucid vision for the entertainment development in the country, the local and foreign promoters of Show Motion Ltd. started the first international quality state-of-the-art multiplex cinema theatre on 8th October 2004 in Bangladesh at Bashundhara City Mall at Panthapath, Dhaka.</p>
                <p>STAR Cineplex, Bashundhara City shooping mall branch has six fully digital cinema screens with state-of-the-art 3D Projection Technology, Silver Screens, Dolby-Digital Sound and stadium seating. With a total capacity of 1,600 seats the theater has large lobby with full concession stands serving pop-corns, soft drinks, ice-creams and many other items. In addition to scheduled shows, STAR Cineplex also caters to special corporate bookings, red-carpet premieres and private events.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <h3>Ongoing <span>Movie List</span></h3>
          <ul class="list">
            <?php
            $query = "SELECT * FROM movie order by mve_id desc" ;
            $results = mysqli_query($db, $query);
            while ($list = mysqli_fetch_assoc($results)) {
              ?><li><a href="book-ticket.php?id=<?php echo $list['mve_id']?>"> <?php echo $list['name']; ?> </a></li><?php
            }
            ?>
          </ul>
        </div>
        <div class="content">
          <h3>Upcoming <span>Movie List</span></h3>
          <ul class="list">
            <li>Christopher Robin<br />
              Upcoming comedy movie directed by Mark Forster. Book it now!.</li>
            <li>Venom</a><br />
             Upcoming Action Movie directed by Ruben Fleicher. Book it now !.</li>
            <li>Johny English Strikes Again !<br />
             Upcoming Action comedy directed by David Kerr. Book it now !</li>
          </ul>
        </div>
      </div>
      </div>

      <div id="footer">
        <div class="left">
          <div class="right">
            <div class="footerlink">
              <p class="lf">Copyright &copy; 2020 <a href="#">Cinema World</a> - All Rights Reserved</p>
              <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
              <div style="clear:both;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>