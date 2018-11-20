<!DOCTYPE html>
<html lang="en">
<style>
html, body .container-fluid{
  margin:0;
  padding:0;
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