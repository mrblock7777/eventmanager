<h2>Create New Groups</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/groups/create" method="post">
<div class="form-group">
	<label for="data[group_name]">Group Name:</label>
	<input type="text" class="form-control" name="data[group_name]" size="40">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/groups/index" class="btn btn-default">Cancel</a>
</form>
