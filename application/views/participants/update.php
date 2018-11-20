<h2>Update Participants</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/participants/update/<?php echo $participant_id; ?>" method="post">
	<input type="hidden" name="update[participant_id]" value="<?php echo $participant_id; ?>">
<div class="form-group">
	<label for="data[event_id]">Event Id</label>
	<input class="form-control" type="text" name="data[event_id]" size="40" value="<?php echo $event_id; ?>">
</div>
<div class="form-group">
	<label for="data[ic]">Ic</label>
	<input class="form-control" type="text" name="data[ic]" size="40" value="<?php echo $ic; ?>">
</div>
<div class="form-group">
	<label for="data[name]">Name</label>
	<input class="form-control" type="text" name="data[name]" size="40" value="<?php echo $name; ?>">
</div>
<div class="form-group">
	<label for="data[phone]">Phone</label>
	<input class="form-control" type="text" name="data[phone]" size="40" value="<?php echo $phone; ?>">
</div>
<div class="form-group">
	<label for="data[email]">Email</label>
	<input class="form-control" type="text" name="data[email]" size="40" value="<?php echo $email; ?>">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/events/view/<?php echo $event_id ?>" class="btn btn-default">Cancel</a>
</form>
