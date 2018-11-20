<h2>Update Applications</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/applications/update/<?php echo $app_id; ?>" method="post">
	<input type="hidden" name="update[app_id]" value="<?php echo $app_id; ?>">
<div class="form-group">
	<label hidden for="data[faculty_id]">Faculty Id</label>
	<input  class="form-control" type="hidden" name="data[faculty_id]" size="40" value="<?php echo $faculty_id; ?>">
</div>
<div class="form-group">
	<label hidden for="data[location_id]">Location Id</label>
	<input class="form-control" type="hidden" name="data[location_id]" size="40" value="<?php echo $location_id; ?>">
</div>
<div class="form-group">
	<label for="data[title]">Title</label>
	<input class="form-control" type="text" name="data[title]" size="40" value="<?php echo $title; ?>">
</div>
<div class="form-group">
	<label for="data[description]">Description</label>
	<textarea class="form-control" name="data[description]" rows="5" cols="40"><?php echo htmlentities($description); ?></textarea>
</div>
<div class="form-group">
	<label for="data[start_date]">Start Date:</label>
	<input type="text" class="form-control datepicker" name="data[start_date]" size="40">
</div>
<div class="form-group">
	<label for="data[end_date]">End Date:</label>
	<input type="text" class="form-control datepicker" name="data[end_date]" size="40">
</div>
<div class="form-group timepicker">
	<label for="data[start_time]">Start Time:</label>
	<input type="text" class="form-control" name="data[start_time]" size="40">
</div>
<div class="form-group timepicker">
	<label for="data[end_time]">End Time:</label>
	<input type="text" class="form-control" name="data[end_time]" size="40">
</div>
<div class="form-group">
	<label for="data[comment]">Comment</label>
	<textarea class="form-control" name="data[comment]" rows="5" cols="40"><?php echo htmlentities($comment); ?></textarea>
</div>
<div class="form-group">
	<label for="data[status]">Status</label>
	<select hidden class="form-control" name="data[status]">
	    <option hidden value="3" selected="selected">Dispute</option>
	</select>
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/applications/index" class="btn btn-default">Cancel</a>
</form>
