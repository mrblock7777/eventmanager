<h2>Create New Events</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/events/create" method="post">
<div class="form-group">
	<label for="data[location_id]">Location:</label>
	<select class="form-control" name="data[location_id]">
		<?php foreach($faculties as $row): ?>
		<option value="<?php echo $row['faculty_id'] ?>"><?php echo $row['faculty_name'];?></option>
		<?php endforeach; ?>
	</select>
</div>
<div class="form-group">
	<label for="data[title]">Title:</label>
	<input type="text" class="form-control" name="data[title]" size="40">
</div>
<div class="form-group">
	<label for="data[description]">Description:</label>

	<textarea class="form-control" name="data[description]" rows="5" cols="40"></textarea>
</div>
<div class="form-group input-group has-feedback">
	<label for="data[date]">Date:</label>
	<input type="text" class="form-control datepicker" name="data[date]" size="40">
</div>
<div class="form-group">
	<label for="data[language]">Language:</label>
	<input type="text" class="form-control" name="data[language]" size="40">
</div>
<div class="form-group">
	<label for="data[duration]">Duration:</label>
	<input type="text" class="form-control" name="data[duration]" size="40">
</div>
<div class="form-group">
	<label for="data[coordinator]">Coordinator:</label>
	<input type="text" class="form-control" name="data[coordinator]" size="40">
</div>
<div class="form-group">
	<label for="data[capacity]">Capacity:</label>
	<input type="text" class="form-control" name="data[capacity]" size="40">
</div>
<div class="form-group">
	<label for="data[fee]">Fee:</label>
	<input type="text" class="form-control" name="data[fee]" size="40">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/events/index" class="btn btn-default">Cancel</a>
</form>
