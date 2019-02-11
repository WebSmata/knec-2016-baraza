<!DOCTYPE html> 
<html>
<?php $myaccount = isset( $_SESSION['imanidairy_account'] ) ? $_SESSION['imanidairy_account'] : ""; ?>
<head>
  <title><?php echo js_get_option('sitename') ?></title>
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="js_themes/css/styles.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js_themes/js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
  <nav>
	  <div id="menubar">
        <ul id="nav">
          <li><a href=".">Home</a></li>
		<?php 
		$myaccount = isset( $_SESSION['imanidairy_account'] ) ? $_SESSION['imanidairy_account'] : "";
		if ($myaccount){ echo
		'<li><a href="index.php?action=item_all">Cereals</a></li>
		<li><a href="index.php?action=type_all">Types</a></li>
		<li><a href="index.php?action=supp_all">Suppliers</a></li>
		<li><a href="index.php?action=user_all">Users</a></li>
		<li><a href="index.php?action=order_all">Orders</a></li>
		<li><a href="index.php?action=options">Site Options</a></li>
		<li><a href="index.php?action=logout">Logout?</a></li>'; 
	
		}  else { echo
			'<li><a href="index.php?action=register">Register</a></li>
			<li><a href="index.php?action=forgot_password">Forgot Password</a></li>
			<li><a href="index.php?action=forgot_username">Forgot Username</a></li>';
		}
			?>		
        </ul>
      </div>	
    </nav>
    <header>
	  <div id="banner">
	    <div id="welcome">
	      <h3 class="site_name"><?php echo js_get_option('sitename') ?></h3>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <h3>IMANI DAIRYFARM</h3>
	    </div><!--close welcome_slogan-->			
	  </div><!--close banner-->
    </header>
	


