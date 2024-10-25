
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>


  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>DSS</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css">
</head>
<!-- body -->

<body class="main-layout" style="background-color: darkgrey;">
  <!-- loader  
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>-->  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <H1  >    <a href="index.html" style="color:black">DSS  </a> 
                    <a href="user/login.php" style="color:black;" > <span class="material-symbols-outlined">
                    contacts_product
</span></a>

<a href="admin/login.php" style="color:black;" style="padding-left:60px;"><span class="material-symbols-outlined">
passkey
</span></a></h1>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main" >
                      <li class="active"> <a href="index.php">Home</a> </li>
                      <li> <a href="moreinfo2.html">More Info</a> </li>
                      <li> <a href="#about">About</a> </li>
                      <li> <a href="./Gallery.html">Gallery</a> </li>
                      <li> <a href="#contact">contact</a> </li>
                      <li> <a href="user/login.php">Student</a> </li>
                      <li> <a href="admin/login.php">Admin </a> </li>
                     

                     </ul>
                   </nav>
                 </div>
               </div> 
               
                       <a href="#"></a> <a href="user/login.php"> </a>
                       <a href="admin/login.php"> </a></div>              
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner"> 
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">

                  <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    
                    <a href=""> <img src="images/savio.jpg" alt="logo"  height="5px"></a>
                    <div>
                      <h1>DOMINIC SAVIO </h1>

   

                      <h4 >

                       <BR>The  function  of  education  is  to  teach  one  to  think  intensively
                          and  to  think  critically.
                            Intelligence  plus  character   that  is  the  goal  of  true  education.
                       
                        <br>
</h4>
                     <!--- <a href="#">Read more</a> <a href="#">get a qoute</a>-->
                    </div>
                  </div>
                  <div class="col-xl-10 col-lg-6 col-md-5 col-sm-10">


                    
<!--testmonials-->
<h1> DOMINIC SAVIO HIGHER SECONDARY SCHOOL </H1>
<div >
  
	<div class="container"   style="background-image:url('images/dss.jpeg')" >
			<div class="testimonial-nfo">
        <h3></h3>
         <marquee  style="height:350px;" direction ="up" onmouseover="this.stop();" onmouseout="this.start();">
				<?php
$sql="SELECT * from tblpublicnotice";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>

 
		<a href="view-public-notice.php?viewid=<?php echo htmlentities ($row->ID);?>" target="_blank" style="color:yellow;">
          <?php  echo htmlentities($row->NoticeTitle);?>(<?php  echo htmlentities($row->CreationDate);?>)</a>
          <hr /><br />
				    
			<?php $cnt=$cnt+1;}} ?>
	</marquee></div>
	</div>
</div>



                  </div>
                </div>
              </div>
            </div>
          </div>
          
          </div>
        </div>
      </div>
    </div>
  
</section>
</div>
</header>

<!-- about  -->
<div id="about" class="about" style="background-color: darkgrey;">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">  
        <div class="about-box">
          <h2 style="padding-top: 15%;">About <strong class="yellow">US</strong></h2>
          <p  style="font-size: 20px;"  style="padding-top: 25%;">  <br><br>
            The Salesian community at Dominic Savio Orphanage,  caters to the education to the young of the locality through Higher Secondary school and Elementary school. Besides these, the institution also provides boarding facilities to the poorest and deserving boys.  </p>
            <a href="./info.html">Read more</a>
            <a href="./moreinfo2.html">Facilities</a>
            <a href="./Gallery.html">Gallery</a>
         <!-- <a href="Javascript:void(0)">Read more</a>-->
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="images/scl.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->



<!-- our -->
<div id="important" class="important" style="background-color: darkgrey;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage ">
          <h2>Some <strong class="b">important fecility</strong></h2>
          <span></span>
        </div>
      </div>
    </div>
  </div>
  <div class="important_bg"  >
    <div class="container">
      <div class="row">

        <div class="col col-xs-12">
          <div class="important_box">
            <h3>60+</h3>
            <span>Teachers</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>1500+</h3>
            <span>Students</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>45</h3>
            <span>Class room</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>2</h3>
            <span>Play Ground </span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>2</h3>
            <span>Hostel</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container" >
    
  </div>
  <div class="important_bg">
    <div class="container">
      <div class="row">

        <div class="col col-xs-12">
          <div class="important_box">
            <h3></h3>
            <span>Extra Curricular Activity</span>
          </div>
        </div>
      
        <div class="col col-xs-12">
          <div class="important_box">
            <h3></h3>
            <span>Sports Facility</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3></h3>
            <span> Laboratry</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3></h3>
            <span>Cleanliness <br>Campus</span>
          </div>
        </div
        style="padding-bottom:20%">
      </div>
    </div>
  </div>
</div>
</div>

<!-- end our -->
<!-- Courses -->

<div id="courses" class="Courses">
  <div class="container-fluid padding_left3">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="box_bg">
          <div class="box_bg_img">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="images/ncc1.jpg" ><br></figure>
                  <br>
                  <div class="overlay">
                    <h3>NCC</h3>
                    <p>NCC is the indian military cadet corps that is responsible for providing basic military training to students </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="images/nss3.jpg"></figure>
                  <div class="overlay">
                    <h3>NSS</h3>
                    <p>The National Service Scheme (NSS) is a Central Sector Scheme of Government of India, Ministry of Youth Affairs & Sports</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="images/jrc.jpg"></figure>
                  <div class="overlay">
                    <h3>JRC</h3>
                    <p> The Junior Red Cross principles and ideas, and by participating actively in the Movement</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="images/scout.png"></figure>
                  <div class="overlay">
                    <h3>SCOUT</h3>
                    <p>A Scout is a friend to animals and loves nature. A Scout is disciplined and helps to protect public property.</p>
                  </div>
                </div>
              </div>



            </div>

            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="images/ng3.jpg"></figure>
                  <div class="overlay">
                    <h3>NGC</h3>
                    <p>National  Green Corps  sensitize school children about environment, its problems and conservation</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="images/music.jpg"></figure>
                  <div class="overlay">
                    <h3>SMC</h3>
                    <p>The  Savio music club encourages students to realize their musical talent</p>
                  </div>
                </div>
              </div>
              



            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
        <div class="box_text">
          <div class="titlepage">
            <h2>OUR<strong class="yellow"> CLUBS</strong></h2>
          </div>
          <h2><br> <b>Our School having a Five National  club  </b><br><BR>
             NSS  - National Service Scheme <br><br>
             NCC  - National Cadet Corps<br> <br>
             JRC  - Junior Red Cross<BR><br>
             NGC   - National Green Corps<br> <br>

            SCOUT -Service Commitment  Opportunity unity Team <BR><br>
            
            <h2> <b>One Music Club </b></h2><br>
            <h2>SMC   - Savio Music Club<BR>
            <br></h2>
            <p>
                  Those Clubs are helps  to Develop the students skills and  It help the students to imporve the responsiblities and Ethics , Diciplene </p>
          
        </div>
      </div> 
    </div>
  </div>
</div>


    <!--  footer -->
    <footr id="contact" class="contact">
      <div class="footer ">
        <div class="container">
          <div class="row">

 
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address"><br>
                    <h3>Contact us <br> <br></h3>
                    <ul class="loca">
                      <li><br>
                        <a href="#"><img src="icon/loc.png" alt="#" /></a>Lorem, ipsum dolor.oad
                        <br>Lorem, ipsum.</li><br>
                        <li>
                          <a href="#"><img src="icon/email.png" alt="#" /></a>1123456789@gmail.com </li><br>
                          <li>
                            <a href="#"><img src="icon/call.png" alt="#" /></a>(04179) 220 561  </li><br>
                          </ul>
                          <ul class="social_link">
                            <li><a href="#"><img src="icon/fb.png"></a></li>
                            <li><a href="#"><img src="icon/tw.png"></a></li>
                            <li><a href="#"><img src="icon/lin(2).png"></a></li>
                            <li><a href="#"><img src="icon/instagram.png"></a></li>
                          </ul>

                        </div>
                      </div>
                      
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address"><br>
                          <h3>Activities And Sectors</h3>
                          <br> <br>
                           
                            <p>The Salesian community at Dominic Savio Orphanage,
                               Tirupattur caters to the education to the young of the locality
                                through Higher Secondary school and Elementary school. Besides these, the
                                 institution also provides boarding facilities to the poorest and deserving boys</p>
                          
                          </ul>
                        </div>
                      </div>


                      <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="address"><br>
                        <!--  <a href="index.html"> <img src="images/savio.jpg" alt="logo"></a>-->
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11017.236467407542!2d78.56389188937531!3d12.504138642989838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bac5476fce74a97%3A0x1a375f1a0fe76b74!2sDominicsavio%20Hr%20Sec%20School!5e0!3m2!1sen!2sin!4v1705419563640!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                      </div>
                      
  

          
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2024 Design by Vasu  </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = 'images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11017.236467407542!2d78.56389188937531!3d12.504138642989838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bac5476fce74a97%3A0x1a375f1a0fe76b74!2sDominicsavio%20Hr%20Sec%20School!5e0!3m2!1sen!2sin!4v1705419563640!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></script>
<!-- end google map js -->


<!--specfication-->


</body>

</html>