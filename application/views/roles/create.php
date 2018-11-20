<h2>Create New Roles</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/roles/create" method="post">
<div class="form-group">
	<label for="data[group_id]">Group Id:</label>
	<input type="text" class="form-control" name="data[group_id]" size="40">
</div>
<div class="form-group">
	<label for="data[module]">Module:</label>
	<input type="text" class="form-control" name="data[module]" size="40">
</div>
<div class="form-group">
	<label for="data[role]">Role:</label>
	<input type="text" class="form-control" name="data[role]" size="40">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/roles/index" class="btn btn-default">Cancel</a>
</form>
