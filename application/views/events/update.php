<h2>Update Events</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/events/update/<?php echo $event_id; ?>" method="post">
	<input type="hidden" name="update[event_id]" value="<?php echo $event_id; ?>">
<div class="form-group">
	<label hidden for="data[faculty_id]">Faculty Id:</label>
	<input type="hidden" class="form-control" name="data[faculty_id]" size="40" value="<?php echo $faculty_id ?>">
</div>
<div class="form-group">
	<label for="data[location_id]">Venue:</label>
	<select  class="form-control" name="data[location_id]">
		<?php foreach($venues as $rows): ?>
			<option value="<?php echo $rows['location_id'] ?>"><?php echo $rows['room'] ?></option>
		<?php endforeach; ?>
	</select>
</div>
<div class="form-group">
	<label for="data[title]">Title:</label>
	<input type="text" class="form-control" name="data[title]" size="40" value = "<?php echo $title ?>">
</div>
<div class="form-group">
	<label for="data[description]">Description:</label>

	<textarea class="form-control" name="data[description]" rows="5" cols="40"><?php echo $description ?></textarea>
</div>
<div class="form-group">
	<label for="data[organiser]">Organiser:</label>
	<input type="text" class="form-control" name="data[organiser]" size="40" value = "<?php echo $organiser ?>">
</div>
<div class="form-group">
	<label for="data[start_date]">Start Date:</label>
	<input type="text" class="form-control datepicker" name="data[start_date]" size="40" value = "<?php echo $start_date ?>">
</div>
<div class="form-group">
	<label for="data[end_date]">End Date:</label>
	<input type="text" class="form-control datepicker" name="data[end_date]" size="40" value = "<?php echo $end_date ?>">
</div>
<div class="form-group timepicker">
	<label for="data[start_time]">Start Time:</label>
	<input type="text" class="form-control" name="data[start_time]" size="40" value = "<?php echo $start_time ?>">
</div>
<div class="form-group timepicker">
	<label for="data[end_time]">End Time:</label>
	<input type="text" class="form-control" name="data[end_time]" size="40" value = "<?php echo $end_time ?>">
</div>
<div class="form-group">
	<label for="data[coordinator]">Coordinator:</label>
	<input type="text" class="form-control" name="data[coordinator]" size="40" value = "<?php echo $coordinator ?>">
</div>
<div class="form-group">
	<label for="data[capacity]">Capacity:</label>
	<input type="text" class="form-control" name="data[capacity]" size="40" value = "<?php echo $capacity ?>">
</div>
<div class="form-group">
	<label for="data[isregister]">Isregister:</label>
	<select class="form-control" name="data[isregister]">
		<option style="display:none">-</option>
		<option value="1">Register</option>
		<option value="0">No register</option>
	</select>
</div>
<div class="form-group">
	<label for="data[fee]">Fee:</label>
	<input type="text" class="form-control" name="data[fee]" size="40" value = "<?php echo $fee ?>">
</div>

	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/faculties/event/<?php echo $faculty_id ?>" class="btn btn-default">Cancel</a>
</form>
