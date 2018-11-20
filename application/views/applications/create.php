<div class="container">
<h2>Create New Applications</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/applications/create/<?php echo $user_id ?>/<?php echo $faculty_id ?>" method="post">
<div class="form-group">
	<label for="data[faculty_id]" hidden>Faculty Id:</label>
	<input type="hidden" class="form-control" name="data[faculty_id]" size="40" value="<?php echo $faculty_id ?>">
</div>
<div class="form-group">
	<label for="data[location_id]">Venue:</label>
	<select  class="form-control" name="data[location_id]">
		<option value="" style="display:none">--Select Venue--</option>
		<?php foreach($venues as $rows): ?>
			<option value="<?php echo $rows['location_id']?>"><?php echo $rows['room'] ?></option>
		<?php endforeach; ?>
	</select>
</div>
<div>
	<label for="data[user_id]" hidden>User id</label>
	<input type="hidden" name="data[user_id]" value="<?php echo $user_id ?>">
</div>
<div class="form-group">
	<label for="data[title]">Title:</label>
	<input type="text" class="form-control" name="data[title]" size="40">
</div>
<div class="form-group">
	<label for="data[description]">Description:</label>
	<textarea class="form-control" name="data[description]" rows="5" cols="40"></textarea>
</div>
<div class="form-group">
	<label for="data[organiser]">Organiser:</label>
	<input type="text" class="form-control" name="data[organiser]" size="40">
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
	<label for="data[fee]">Fee(RM):</label>
	<input type="text" class="form-control" name="data[fee]" size="40">
</div>
<div class="form-group">
	<label for="data[isregister]">Registration:</label>
	<select class="form-control" name="data[isregister]">
		<option style="display:none">--Register or No register?--</option>
		<option value="1">Register</option>
		<option value="2">No registration</option>
	</select>
</div>
<div class="form-group">
	<label for="data[capacity]">Capacity: </label>
	<input type="text" class="form-control" name="data[capacity]">
</div>
<div class="form-group">
	<label for="data[document]">Supporting documents</label>
	<input type="file" name="data[document]" class="form-control">
</div>
<div class="form-group">
	<label hidden for="data[comment]">Comment:</label>
	<textarea style="display:none" class="form-control" name="data[comment]" rows="5" cols="40"></textarea>
</div>
<div class="form-group">
	<label hidden for="data[status]">Status:</label>
	<input type="hidden" class="form-control" name="data[status]" size="40" value="0">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/faculties/event/<?php echo $faculty_id ?>" class="btn btn-default">Cancel</a>
</form>
</div>