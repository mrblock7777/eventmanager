<h2>Create New Users</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/users/create" method="post">
<div class="form-group">
	<label for="data[group_id]" hidden>Group Id:</label>
	<input type="hidden" name="data[group_id]" value="2">
</div>
<div class="form-group">
	<label for="data[username]">Username:</label>
	<input type="text" class="form-control" name="data[username]" required>
</div>
<div class="form-group">
	<label for="data[password]">Password:</label>
	<input type="text" class="form-control" name="data[password]" size="40" required>
</div>
<div class="form-group">
	<label for="data[first_name]">First Name:</label>
	<input type="text" class="form-control" name="data[first_name]" size="40" required>
</div>
<div class="form-group">
	<label for="data[last_name]">Last Name:</label>
	<input type="text" class="form-control" name="data[last_name]" size="40">
</div>
<div class="form-group">
	<label for="data[email]">Email:</label>
	<input type="text" class="form-control" name="data[email]" size="40" required>
</div>
<div class="form-group">
	<label for="data[phone]">Contact Number:</label>
	<input type="text" class="form-control" name="data[phone]" size="40" required>
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/faculties/index" class="btn btn-default">Cancel</a>
</form>
