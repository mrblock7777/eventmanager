<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL; ?>/media/css/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL; ?>/media/css/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL;?>/media/css/jquery.dataTables.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL;?>/media/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL;?>/media/css/responsive.bootstrap.css">
  <link rel="stylesheet" href="<?php echo CONF_BASE_URL; ?>/media/css/jquery-ui.min.css">
  <script src="<?php echo CONF_BASE_URL; ?>/media/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="<?php echo CONF_BASE_URL; ?>/media/js/jquery-ui.min.js"></script>
  <script src="<?php echo CONF_BASE_URL; ?>/media/js/bootstrap.min.js"></script>
  <script src="<?php echo CONF_BASE_PATH; ?>/media/js/jquery.dataTables.min.js"></script>



  <!--<link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsed">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a href="" class="navbar-brand">Event Manager</a>
        </div>
        <div class="collapse navbar-collapse" id="collapsed">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo CONF_BASE_PATH ?>/faculties/">Faculties</a></li>
                <li><a href="<?php echo CONF_BASE_PATH ?>/events/">Events</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo CONF_BASE_PATH ?>/applications/"><i class="fa fa-file" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo CONF_BASE_PATH ?>/session/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                
            </ul>
        </div>
    </div>
</nav>

<div class="container">
<?php echo $content; ?>
</div>


<script>
		$(function(){
		$("[data-tooltip='tooltip']").tooltip();
    $(".datepicker").datepicker({
			dateFormat:'yy-mm-dd'
		});
		});
	</script>
</body>
</html>