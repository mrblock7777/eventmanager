<style>
label{
	color:red;
}
</style>
<h2>Create New Faculties</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/faculties/create" method="post">
<div class="form-group">
	<label for="data[faculty_name]">Faculty Name:</label>
	<input type="text" class="form-control" name="data[faculty_name]" size="40">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/faculties/index" class="btn btn-default">Cancel</a>
</form>
