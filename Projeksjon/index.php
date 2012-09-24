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
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
		    <div class="page-header custom-header">
				<h1>Projeksjon <small>Linjeforening for geomatikere ved NTNU</small></h1>
			</div>
		</div>
	  </div>
      <div class="row-fluid">
        

		<?php
		include('views/sidebar.php');
		?>		
		
		
       <div class="span3 hidden-phone">
          <div class="well">
			<h5><i class="icon-calendar"></i> Kommende arrangementer:</h5>
			<div class="offset1">
			
				<div class="short-event">
					<ul>
						<li><strong>20. Sep.: </strong> <a href="#" rel="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">Bli kjent kveld.</a></li>
					</ul>
				</div>
			</div>
			<h5><i class="icon-gift"></i> Bursdager denne måneden:</h5>
			<div class="offset1">
			
				<div class="short-event">
					<ul>
						<li><strong>20. Sep.: </strong> <a href="#" rel="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">Bli kjent kveld.</a></li>
					</ul>
				</div>
			</div>
		  </div>
         
        </div><!--/span-->
	  </div><!--/row-->

      <hr>

      

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$("#asd").tooltip();
	</Script>
  </body>
</html>
