<h2>Update Users</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/users/update/<?php echo $user_id; ?>" method="post">
	<input type="hidden" name="update[user_id]" value="<?php echo $user_id; ?>">
<div class="form-group">
	<label for="data[group_id]">Group Id</label>
	<input class="form-control" type="text" name="data[group_id]" size="40" value="<?php echo $group_id; ?>">
</div>
<div class="form-group">
	<label for="data[username]">Username</label>
	<input class="form-control" type="text" name="data[username]" size="40" value="<?php echo $username; ?>">
</div>
<div class="form-group">
	<label for="data[password]">Password</label>
	<input class="form-control" type="text" name="data[password]" size="40" value="<?php echo $password; ?>">
</div>
<div class="form-group">
	<label for="data[first_name]">First Name</label>
	<input class="form-control" type="text" name="data[first_name]" size="40" value="<?php echo $first_name; ?>">
</div>
<div class="form-group">
	<label for="data[last_name]">Last Name</label>
	<input class="form-control" type="text" name="data[last_name]" size="40" value="<?php echo $last_name; ?>">
</div>
<div class="form-group">
	<label for="data[lastlogin]">Lastlogin</label>
	<input class="form-control" type="text" name="data[lastlogin]" size="40" value="<?php echo $lastlogin; ?>">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/users/index" class="btn btn-default">Cancel</a>
</form>
