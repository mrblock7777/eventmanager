<h2>Create New Venues</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/venues/create" method="post">
<div class="form-group">
	<label for="data[faculty_id]">Faculty Id:</label>
	<select class="form-control" name="data[faculty_id]">
		<?php foreach($faculties as $rows): ?>
			<option value="<?php echo $rows['faculty_id'] ?>"><?php echo $rows['faculty_name'] ?></option>
		<?php endforeach; ?>
	</select>
</div>
<div class="form-group">
	<label for="data[level]">Level:</label>
	<input type="text" class="form-control" name="data[level]" size="40">
</div>
<div class="form-group">
	<label for="data[block]">Block:</label>
	<input type="text" class="form-control" name="data[block]" size="40">
</div>
<div class="form-group">
	<label for="data[room]">Room:</label>
	<input type="text" class="form-control" name="data[room]" size="40">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/venues/index" class="btn btn-default">Cancel</a>
</form>
