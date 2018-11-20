<style>
.row {
    padding-top: 10px;
    padding-bottom: 10px;
}
.view{
	border: 1px solid black;
	padding: 10px;
	background:maroon linear-gradient(to bottom left, black, maroon);
	color:white;
	width:100%;
	padding-left:20px;

}
h2{
	color:white;
}

</style>
<div class="view">
	<h2>Events in <?php echo ucwords(strtolower($faculty_name))?></h2>
<a href="<?php echo CONF_BASE_PATH; ?>/faculties/index" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>	<a href="#goggle" data-toggle="modal" class="btn btn-danger"><i class="fa fa-map-marker" aria-hidden="true"></i>
</a> 
</div>
		
	
<div class="modal fade" id="goggle" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
			<div id="map" style="width:560px;height:400px;"></div><br>
			<a class="btn btn-primary" data-dismiss="modal">Close Map</a>
        </div>
      
      </div>
      
    </div>
  </div>
<p><a href="<?php echo CONF_BASE_PATH ?>/applications/create/<?php echo $user_id ?>/<?php echo $faculty_id ?>">Want to create event but you're not an admin? Click me, dummy </a></p>
  <script>
	  function map(){
			var latitude = '<?php echo $latitude; ?>';
			var longitude = '<?php echo $longitude ?>';
			//3.003100, 101.711405;
		  var mapOptions = {
			  center: new google.maps.LatLng(latitude,longitude),
			  zoom:20,
			  mapTypeId: google.maps.MapTypeId.HYBRID
		  }
		  var map = new google.maps.Map(document.getElementById("map"),mapOptions);
		  $("#goggle").on("shown.bs.modal",function(){
			google.maps.event.trigger(map,"resize");
		  });
	  }
  </script>
  
  
