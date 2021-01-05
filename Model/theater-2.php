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
                <h3><span>Blockbuster Cinemas</span></h3>
                <p>Blockbuster Cinemas want to redefine the movie viewing experience to the movie fraternity of Bangladesh. Get the adrenalin running at Thrill, Expression,Iris, Transition, Montage, Exposure or the ultra luxury Club Royale.</p>
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
            <li> Incredibles 2 <br />
              Genre : Animation Comedy,  Duration : 1 hr 47 mnts,  Director : Brad Bird,  Ticket Price : 300BDT .</li>
            <li> Deadpool 2<br />
              Genre : Action,  Duration : 2 hr 12 mnts,  Director : David Leitch,  Ticket Price : 300BDT  .</li>
            <li>Aquaman<br />
              Genre : Fantasy/Science fiction,  Duration : 2 hr 33 mnts,  Director : James Wan,  Ticket Price : 300BDT  .</li>
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
