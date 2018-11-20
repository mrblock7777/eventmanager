<h2>Update Venues</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/venues/update/<?php echo $location_id; ?>" method="post">
	<input type="hidden" name="update[location_id]" value="<?php echo $location_id; ?>">
<div class="form-group">
		<label for="data[faculty_id]">Faculty Id:</label>
	<select class="form-control" name="data[faculty_id]">
		<?php foreach($faculties as $rows): ?>
			<option value="<?php echo $rows['faculty_id'] ?>"><?php echo $rows['faculty_name'] ?></option>
		<?php endforeach; ?>
	</select>
</div>
<div class="form-group">
	<label for="data[level]">Level</label>
	<input class="form-control" type="text" name="data[level]" size="40" value="<?php echo $level; ?>">
</div>
<div class="form-group">
	<label for="data[block]">Block</label>
	<input class="form-control" type="text" name="data[block]" size="40" value="<?php echo $block; ?>">
</div>
<div class="form-group">
	<label for="data[room]">Room</label>
	<input class="form-control" type="text" name="data[room]" size="40" value="<?php echo $room; ?>">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/venues/index" class="btn btn-default">Cancel</a>
</form>
