<h2>Update Faculties</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/faculties/update/<?php echo $faculty_id; ?>" method="post">
	<input type="hidden" name="update[faculty_id]" value="<?php echo $faculty_id; ?>">
<div class="form-group">
	<label for="data[faculty_name]">Faculty Name</label>
	<input class="form-control" type="text" name="data[faculty_name]" size="40" readonly value="<?php echo $faculty_name; ?>">
</div>
<div class="form-group">
	<label for="data[latitude]">Latitude</label>
	<input class="form-control" type="text" name="data[latitude]" value="<?php echo $latitude ?>">
</div>
<div class="form-group">
	<label for="data[longitude]">Longitude</label>
	<input class="form-control" type="text" name="data[longitude]" value="<?php echo $longitude ?>">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/faculties/index" class="btn btn-default">Cancel</a>
</form>
