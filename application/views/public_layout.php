<!DOCTYPE html>
<html lang="en">
<style>
html, body .container-fluid{
  margin:0;
  padding:0;
  
}

#login{
	opacity:0;
	transition:0.5s;
	margin-top:50px;
}
#login:hover{
	opacity:1;
	transition:0.5s;
}
.jumbotron{
	height:250px;
}
img{
	width:100%;
	height:90%;
	opacity:1;
}
.upm{
	height:500px;

	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: auto;
	background-color: black;
	margin-bottom:10px;
    width:100%;
	
	
}
.btn-group-vertical{
    position:absolute;
    overflow:auto;
    width:130px;
    height:100%;
   
}
.btn-group-vertical a{
	margin-bottom:10px;
	left:-65px;
	transition:0.5s;
    background: linear-gradient( to bottom left,maroon,black );
    
}
.btn-group-vertical a:hover{
	left:0;
	transition:0.5s;
}
#faculties, #events{
	margin-top:30px;
}
#title{
	text-align:center;
	font-size:72px;
	color:white;
}
#logo{
	height:120px;
}
#strip{
    background: linear-gradient(to bottom right, #680303,black);
}

@media screen and (max-width:990px) and (min-width:500px){
	img{
		width:50%;
	}
}
</style>
<head>
  <title>Event Manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL; ?>/media/css/journal/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL; ?>media/css/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL;?>/media/css/jquery.dataTables.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL;?>/media/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL;?>/media/css/responsive.bootstrap.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL; ?>/media/css/jquery-ui.min.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL; ?>/media/plugins/clockpicker-gh-pages/dist/bootstrap-clockpicker.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL; ?>/media/plugins/clockpicker-gh-pages/dist/jquery-clockpicker.css">
  <script src="<?php echo CONF_BASE_URL; ?>/media/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="<?php echo CONF_BASE_URL; ?>/media/plugins/clockpicker-gh-pages/dist/bootstrap-clockpicker.js"></script>
  <script src="<?php echo CONF_BASE_URL; ?>/media/plugins/clockpicker-gh-pages/dist/jquery-clockpicker.js"></script>
  <script src="<?php echo CONF_BASE_URL; ?>/media/js/jquery-ui.min.js"></script>
  <script src="<?php echo CONF_BASE_URL; ?>/media/js/bootstrap.min.js"></script>
  <script src="<?php echo CONF_BASE_PATH; ?>/media/js/jquery.dataTables.min.js"></script>



  <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcJ6PCMHQuJsLhGWa9Uhk3fhYZRGxCTYw&callback=map"
  type="text/javascript"></script>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>-->

   <script>
            $(document).ready(function() {
                $('.display').DataTable({

                });
            });

  </script>
</head>
<body>

<div class="container-fluid">
 
    <div class="upm" style="background-image:url(<?php echo CONF_BASE_PATH; ?>/media/img/upm.jpg)">
    <div class="btn-group-vertical" style="position:fixed; z-index:2;">
            <a href="<?php echo CONF_BASE_PATH ?>/applications/" class="btn btn-primary">Applications</a>
            <a href="<?php echo CONF_BASE_PATH ?>/events/list" class="btn btn-primary">Events</a>
            <a href="<?php echo CONF_BASE_PATH?>/faculties/index" class="btn btn-primary">Faculties</a>
            <a href="<?php echo CONF_BASE_PATH?>/session/login" class="btn btn-primary">Sign In</a>	
        </div>
        <p><img id="logo" style="width:290px;margin:20px 10px;float:right;" src="<?php echo CONF_BASE_PATH ?>/media/img/UPM.png" alt="UPM logo"></p>
        <div style="background-color :#680303 " id="strip"><p><h2 id="title">EVENTmanager</h2></p>
            <p style=" text-align:center;color:white;font-size:20px;"><q>The most sophisticated event manager everrrrr in the whole world<br> by Totally Spies</q></p>
        </div>
    </div>  

    <?php echo $content; ?>
</div>


<script>
		$(function(){
		$("[data-tooltip='tooltip']").tooltip();
    $(".datepicker").datepicker({
			  dateFormat:'yy-mm-dd'
		});
    $(".timepicker").clockpicker({
      donetext:'Select'
    });
		});
	</script>
</body>
</html>