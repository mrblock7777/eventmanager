<h2>Update Roles</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/roles/update/<?php echo $role_id; ?>" method="post">
	<input type="hidden" name="update[role_id]" value="<?php echo $role_id; ?>">
<div class="form-group">
	<label for="data[group_id]">Group Id</label>
	<input class="form-control" type="text" name="data[group_id]" size="40" value="<?php echo $group_id; ?>">
</div>
<div class="form-group">
	<label for="data[module]">Module</label>
	<input class="form-control" type="text" name="data[module]" size="40" value="<?php echo $module; ?>">
</div>
<div class="form-group">
	<label for="data[role]">Role</label>
	<input class="form-control" type="text" name="data[role]" size="40" value="<?php echo $role; ?>">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/roles/index" class="btn btn-default">Cancel</a>
</form>
