<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>Student  Management System || Home Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
	<body>


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
                    <H1>  DSS</H1>
                    <a href="index.html"></a>
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
                      <li> <a href="#courses">Clubs</a> </li>
                      <li> <a href="#about">About</a> </li>
                      <li> <a href="#learn">Gallery</a> </li>
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



<div class="banner banner5">
	<div class="container" ><br><br><br>
	<h2>Notice</h2>
	</div>
</div>
<!--weelcome-->
<div class="welcome" >
	<div class="container" style="border-color: coral;" >
		<table border ="1" class="table table-bordered mg-b-0"  >
                      <?php
$vid=$_GET['viewid'];
$sql="SELECT * from tblpublicnotice where ID=:vid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>

 <tr align ="center" class="table-warning">

<td colspan="4" style="font-size:20px;color:red">
 Notice</td></tr>

<tr  style="font-size:15px;color:blue">
    <th>Notice Announced Date</th>
    <td><?php  echo $row->CreationDate;?></td>
  </tr>
    <tr  style="font-size:15px;color:blue">
    <th>Noitice Title</th>
    <td><?php  echo $row->NoticeTitle;?></td>
  </tr>
  <tr  style="font-size:15px;color:blue">
     <th>Message</th>
    <td><?php  echo $row->NoticeMessage;?></td>
     
  </tr>

  <?php $cnt=$cnt+1;}} ?>
</table>
	</div>
</div>
<!--/welcome-->

	</body>
</html>
