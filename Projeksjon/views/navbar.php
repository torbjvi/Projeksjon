<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Projeksjon</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="/"><i class="icon-home icon-white"></i> Hjem</a></li>
              <li><a href="#about">Arrangementer</a></li>
			  <li><a href="lesesal.php">Lesesalen</a></li>
			  <li><a href="#about">Medlemmer</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Om <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Kontakt oss</a></li>
                  <li><a href="#">Om Projeksjon</a></li>
                  <li><a href="#">Styre</a></li>
                </ul>
              </li>
            
             
			 </ul>
			 <ul class="nav pull-right">
				 <li class="divider-vertical"></li>
				 <?php
					if($auth->isLoggedIn()) {
				
				echo '<li class="active"><a href="https://innsida.ntnu.no/sso/?target=filmtest&returnargs=geomatikk">'.$auth->person->name.'</a></li>';
				
				 }
				 else {
				 ?>
				 <li class=""><a href="https://innsida.ntnu.no/sso/?target=filmtest&returnargs=geomatikk">Logg inn</a></li>
				 <?php
				 }
				 ?>
				 
				 <li class="divider-vertical"></li>
			 </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
