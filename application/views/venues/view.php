<style>
.row {
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
<h2>View Venues</h2>
<div class="row">
	<div class="col-md-3">Location Id:</div>
	<div class="col-md-9"><?php echo $location_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Faculty Id:</div>
	<div class="col-md-9"><?php echo $faculty_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Level:</div>
	<div class="col-md-9"><?php echo $level; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Block:</div>
	<div class="col-md-9"><?php echo $block; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Room:</div>
	<div class="col-md-9"><?php echo $room; ?></div>
</div>
<a href="<?php echo CONF_BASE_PATH; ?>/venues/index" class="btn btn-primary">Back</a>
