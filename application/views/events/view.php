<style>
.row {
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
<div class="container">
<h2><?php echo $title ?></h2>

<div class="row">
	<div class="col-md-3">Title:</div>
	<div class="col-md-9"><?php echo $title; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Description:</div>
	<div class="col-md-9"><?php echo $description; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Organiser:</div>
	<div class="col-md-9"><?php echo $organiser; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Capacity:</div>
	<div class="col-md-9"><?php echo $capacity; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Seats left:</div>
	<div class="col-md-9"><?php echo $seat = $capacity - $participant ?></div>
</div>

<div class="row">
	<div class="col-md-3">Fee:</div>
	<div class="col-md-9"><?php echo $fee; ?></div>
</div>
<div class="row">
	<?php if($seat > 0){ ?>
		<div class="col-md-9"><a href="<?php echo CONF_BASE_PATH ?>/participants/create/<?php echo $event_id ?>" class="btn btn-success">Register</a></div>
	<?php }else{?>
		<div class="col-md-9">Seats are full</div>
	<?php }?>
</div>
<a href="<?php echo CONF_BASE_PATH; ?>/faculties/event/<?php echo $faculty_id ?>" class="btn btn-primary">Back</a>
</div>