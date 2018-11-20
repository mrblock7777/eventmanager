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
	<input class="form-control" type="text" name="data[title]" size="40" readonly value="<?php echo $title; ?>">
</div>
<div class="form-group">
	<label for="data[description]">Description</label>
	<textarea readonly class="form-control" name="data[description]" rows="5" cols="40"><?php echo htmlentities($description); ?></textarea>
</div>
<div class="form-group">
	<label hidden for="data[start_date]">Start Date</label>
	<input class="form-control" type="hidden" name="data[start_date]" size="40" value="<?php echo $start_date; ?>">
</div>
<div class="form-group">
	<label hidden for="data[end_date]">End Date</label>
	<input class="form-control" type="hidden" name="data[end_date]" size="40" value="<?php echo $end_date; ?>">
</div>
<div class="form-group">
	<label hidden for="data[start_time]">Start Time</label>
	<input class="form-control" type="hidden" name="data[start_time]" size="40" value="<?php echo $start_time; ?>">
</div>
<div class="form-group">
	<label hidden for="data[end_time]">End Time</label>
	<input class="form-control" type="hidden" name="data[end_time]" size="40" value="<?php echo $end_time; ?>">
</div>
<div class="form-group">
	<label for="data[comment]">Comment</label>
	<textarea class="form-control" name="data[comment]" rows="5" cols="40"><?php echo htmlentities($comment); ?></textarea>
</div>
<div class="form-group">
	<label for="data[status]">Status</label>
	<select class="form-control" name="data[status]" >
	<option value="1">Approved</option>
	<option value="2">Rejected</option>
	<option value="3">Dispute</option>
	</select>
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/applications/index" class="btn btn-default">Cancel</a>
</form>
