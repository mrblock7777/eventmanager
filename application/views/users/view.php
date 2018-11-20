<style>
.row {
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
<h2>View Users</h2>
<div class="row">
	<div class="col-md-3">User Id:</div>
	<div class="col-md-9"><?php echo $user_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Group Id:</div>
	<div class="col-md-9"><?php echo $group_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Username:</div>
	<div class="col-md-9"><?php echo $username; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Password:</div>
	<div class="col-md-9"><?php echo $password; ?></div>
</div>
<div class="row">
	<div class="col-md-3">First Name:</div>
	<div class="col-md-9"><?php echo $first_name; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Last Name:</div>
	<div class="col-md-9"><?php echo $last_name; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Lastlogin:</div>
	<div class="col-md-9"><?php echo $lastlogin; ?></div>
</div>
<a href="<?php echo CONF_BASE_PATH; ?>/users/index" class="btn btn-primary">Back</a>
