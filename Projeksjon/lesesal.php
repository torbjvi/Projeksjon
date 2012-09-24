<?php
session_start();
include('classes/PDO.php');
include('classes/Person.class.php');
include('classes/Auth.class.php');
$auth = new Auth($dbh);
if(isset($_GET['data'])) {
	 if($auth->logIn($_GET['data'],$dbh)) {
	 }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Projeksjon - Linjeforening for geomatikere ved NTNU

	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
	  .custom-header {
		
background-image:url('header2.png');
}

    </style>
    <link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="./bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./bootstrap/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
<?php
include('views/navbar.php');
?>

    <div class="container-fluid">
		  <div class="row-fluid">
		<div class="span9 offset1">
		    <div class="page-header">
				<h1>Projeksjon <small>Linjeforening for geomatikere ved NTNU</small></h1>
			</div>
		</div>
	  </div>
	  <div class="row-fluid">
		<div class="span9 offset1">
		    <div class="span8">
				    <ul class="thumbnails">
						<li class="span12">
							<div class="thumbnail">
								<img class="img-rounded" src="asd.png" alt="">
								<h3>Thumbnail label</h3>
								<p>Thumbnail caption...</p>
							</div>
						</li>
						
						
					</ul>
					<ul class="thumbnails">
						<li class="span12">
							<div class="thumbnail">
								<img src="http://placehold.it/300x200" alt="">
								<h3>Thumbnail label</h3>
								<p>Thumbnail caption...</p>
							</div>
						</li>
					</ul>
			</div>
			<div class="span4 well">
				
			</div>
		</div>
	  </div>
      
         
        
	  </div><!--/row-->

      <hr>

      

    <!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
    <script>
		
	</script>

  </body>
</html>
