<h2>Update {controller_class}</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/{controller}/update/<?php echo ${primary}; ?>" method="post">
{content}
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/{controller}/index" class="btn btn-default">Cancel</a>
</form>
