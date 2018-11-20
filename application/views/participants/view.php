<style>
.row {
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
<h2>View Participants</h2>
<div class="row">
	<div class="col-md-3">Participant Id:</div>
	<div class="col-md-9"><?php echo $participant_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Event Id:</div>
	<div class="col-md-9"><?php echo $event_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Ic:</div>
	<div class="col-md-9"><?php echo $ic; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Name:</div>
	<div class="col-md-9"><?php echo $name; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Phone:</div>
	<div class="col-md-9"><?php echo $phone; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Email:</div>
	<div class="col-md-9"><?php echo $email; ?></div>
</div>
<a href="<?php echo CONF_BASE_PATH; ?>/participants/index" class="btn btn-primary">Back</a>
