<?php 
if(isset($_POST['login'])){
    session_start();
    ob_start();
    require_once('logInUser.inc.php');
}
?>

<head>
	<link rel="stylesheet" type="text/css" href="../css/header_styles.css">
	<link rel="stylesheet" type="text/css" href="../css/layout_styles.css">
	<!--google analytics-->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88659906-1', 'auto');
  ga('send', 'pageview');

      </script>
</head>

<div id="container">
  <div id="headerMain">
  	<div id="bannerwrap"><a href="http://greatmoods.com"><img id="logo2" src="../images/whitelogo.png" alt="GreatMoods Logo"></a>
  		<img id="banner" src="../<?php echo $banner_path;?>" width="1024" height="150" alt="banner placeholder" /></div>
  	
    <div id="menuWrapper"> </div> <!--end menuWrapper-->
    
    <ul class="nav">
    <li><a href="#">My Account Login</a>
    		<div class="newlogin">
		        <?php
		            if(!isset($_SESSION['LOGIN']) || $_SESSION['LOGIN'] == "FALSE") {
		                echo '<form id="newlogin" action="logInUser.php" method="post">';
		                echo '<label class="userlogin">Username:</label>
		                      <input id="loginemail" type="text" name="email" value="">';
		                echo '<br>';
		                echo '<label class="userlogin">Password:</label>
		                      <input id="loginpassword" type="password" name="password" value="" >';
		                echo '<br>';
		                echo '<input id="redbutton" class="user" name="login" type="submit" value="Login" />';
		                echo '</form>';
		                
		            } elseif($_SESSION['LOGIN'] == "TRUE") {
		                echo '<div class="mallmenu">
		         		<div class="nav-column">';
		                echo '<h4><a href="index.php">GreatMoods<br>Homepage</a></h4>';
		         	echo '<h4><a href="'.$_SESSION['home'].'" />Account<br>Home</a></h4>';
		         	echo '<br>';
		         	include('includes/logout.inc.php');
		         	echo '</div>
		         		</div>';
		              }
		         ?>
      		</div> <!--end login-->
    	</li>
	<li><a href="#">Women</a>
        <?php include 'includes/menu_women_home.php'; ?>
    </li>
    <li><a href="#">Accessories</a>
        <?php include 'includes/menu_accessories_home.php'; ?>
    </li>
    <li><a href="#">Men</a>
        <?php include 'includes/menu_men_home.php'; ?>
    </li>
    <li><a href="#">Juniors</a>
        <?php include 'includes/menu_juniors_home.php'; ?>
    </li>
    <li><a href="#">Kids</a>
        <?php include 'includes/menu_kids_home.php'; ?>
    </li>
    <li><a href="#">Baby</a>
        <?php include 'includes/menu_baby_home.php'; ?>
    </li>
    <li><a href="#">Fitness</a>
        <?php include 'includes/menu_fitness_home.php'; ?>
    </li>
    <li><a href="#">Food</a>
        <?php include 'includes/menu_food_home.php'; ?>
    </li>
    <li><a href="#">Entertainment</a>
        <?php include 'includes/menu_entertainment_home.php'; ?>
    </li>
    <li><a href="#">Housewares</a>
        <?php include 'includes/menu_housewares_home.php'; ?>
    </li>
    <li><a href="#">Health</a>
        <?php include 'includes/menu_health_home.php'; ?>
    </li>
    <li><a href="#">Inspirational</a>
        <?php include 'includes/menu_inspirational_home.php'; ?>
    </li>
    <li><a href="#">Holiday</a>
        <?php include 'includes/menu_holiday_home.php'; ?>
    </li>
    <li><a href="#">Business</a>
        <?php include 'includes/menu_business_home.php'; ?>
    </li>
   <li><a href="#">Education Examples</a>
    	<?php include 'includes/menu_education_examples.php'; ?>
    </li>
    <li><a href="#">Organization Examples</a>
    	<?php include 'includes/menu_organization_examples.php'; ?>
    </li>
</ul>
</div> <!--end headerMain-->
  