<h2>Update Groups</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/groups/update/<?php echo $group_id; ?>" method="post">
	<input type="hidden" name="update[group_id]" value="<?php echo $group_id; ?>">
<div class="form-group">
	<label for="data[group_name]">Group Name</label>
	<input class="form-control" type="text" name="data[group_name]" size="40" value="<?php echo $group_name; ?>">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/groups/index" class="btn btn-default">Cancel</a>
</form>
