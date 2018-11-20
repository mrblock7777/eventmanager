<style>
.row {
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
<h2>View Applications</h2>
<div class="row">
	<div class="col-md-3">App Id:</div>
	<div class="col-md-9"><?php echo $app_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Faculty Id:</div>
	<div class="col-md-9"><?php echo $faculty_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Location Id:</div>
	<div class="col-md-9"><?php echo $location_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Ic:</div>
	<div class="col-md-9"><?php echo $ic; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Apply Date:</div>
	<div class="col-md-9"><?php echo $apply_date; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Title:</div>
	<div class="col-md-9"><?php echo $title; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Description:</div>
	<div class="col-md-9"><?php echo $description; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Venue:</div>
	<div class="col-md-9"><?php echo $venue; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Start Date:</div>
	<div class="col-md-9"><?php echo $start_date; ?></div>
</div>
<div class="row">
	<div class="col-md-3">End Date:</div>
	<div class="col-md-9"><?php echo $end_date; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Start Time:</div>
	<div class="col-md-9"><?php echo $start_time; ?></div>
</div>
<div class="row">
	<div class="col-md-3">End Time:</div>
	<div class="col-md-9"><?php echo $end_time; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Comment:</div>
	<div class="col-md-9"><?php echo $comment; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Status:</div>
	<div class="col-md-9"><?php echo $status; ?></div>
</div>
<a href="<?php echo CONF_BASE_PATH; ?>/applications/index" class="btn btn-primary">Back</a>
