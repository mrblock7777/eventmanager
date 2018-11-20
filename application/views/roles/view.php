<style>
.row {
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
<h2>View Roles</h2>
<div class="row">
	<div class="col-md-3">Role Id:</div>
	<div class="col-md-9"><?php echo $role_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Group Id:</div>
	<div class="col-md-9"><?php echo $group_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Module:</div>
	<div class="col-md-9"><?php echo $module; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Role:</div>
	<div class="col-md-9"><?php echo $role; ?></div>
</div>
<a href="<?php echo CONF_BASE_PATH; ?>/roles/index" class="btn btn-primary">Back</a>
