<!DOCTYPE html>
<html data-ng-app="movieStubApp">
<head>
<?php 
	echo $this->Html->charset(); 
 	echo $this->fetch('title'); 
	echo $this->Html->meta('icon');
?>
  <base href="" target="_blank">
  <meta name="viewport" content="width=device-width,user-scalable=no">
  <link rel="stylesheet" type="text/css" href="http://www.marchese.space/stylesheets/main.css">
</head>
<body>
	<header>
    <div class="title">
      <h1>Pace Digital Gallery </h1>
      <h5>Marchese and McDonald Retrospective</h5>
    </div>
    <div id="hum-menu" class="menu-btn"> <span></span> <span></span> <span></span> </div>
    <ul class="responsive-menu expand">
      <li><a class="active" href="/index.php">Home</a></li>
      <li><?php echo $this->Html->link(__('Years'), array('controller'=>'evtYears','action' => 'index'));?></li>
    <li><a href="artists.php">Artists</a></li>
    <li><a href="about_us.php">About</a></li>
    <li><a href="phpmail/index.php">Contact us</a></li>

    </ul>
  </header>
	 <div class="wrapper" data-ng-controller="movieStubController" >
		
		<div id="content">
			<?php echo $this->Session->flash(); ?>
      
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="header">
			<p>
				
			</p> 

		</div>
		<footer>Copyright &copy; 2015   <a href="http://www.Marchese.space">Marchese.space</a> | Design&Development by Luna Group @Pace University, NYC | 

      <?php
          if (AuthComponent::user()){
        ?>
        Welcome 
        <?php print $this->Session->read('Auth.User.username'); ?>
         | 
        <?php
            // The user is logged in, show the logout link
            if($this->params['admin']){
              echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));
            }else{echo $this->Html->link('Log out', array('admin'=>true, 'controller' => 'users', 'action' => 'logout'));}
          }else{
            // The user is not logged in, show login link
            if($this->params['admin']){
              echo $this->Html->link('Log in', array('controller' => 'users', 'action' => 'login'));
            }else{echo $this->Html->link('Log in', array('admin'=>true,'controller' => 'users', 'action' => 'login'));}
          }
        ?> 
    </footer>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.min.js"></script>
    <script type="text/javascript" src="http://www.marchese.space/app.js"></script>
    <script type="text/javascript" src="http://www.marchese.space/carousel.js"></script> 
    <script>
    jQuery(function($){
      $('#hum-menu').click(function(){
        $('.responsive-menu').toggleClass('expand')
      })
    }) </script>
    <script>
    $(document).ready(function() {
     
       $("#owl-demo").owlCarousel({
            autoPlay: 3000,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
          });

        $("#owl-demo2").owlCarousel({
     
          autoPlay: 3000, //SET AutoPlay to 3 seconds
     
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
     
      });
     
     
    });
    </script>
</body>
</html>
