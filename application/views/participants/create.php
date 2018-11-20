<div class="container">
<h2>Create New Participants</h2>
<form role="form" action="<?php echo CONF_BASE_PATH; ?>/participants/create/<?php echo $event_id ?>" method="post">
<div class="form-group">
	<label hidden for="data[event_id]">Event Id:</label>
	<input type="hidden" class="form-control" name="data[event_id]" size="40" value="<?php echo $event_id ?>">
</div>
<?php if(!empty($error)) {?><span style="color:red"><?php echo $error ?></span> <?php }?>
<div class="form-group">
	<label for="data[ic]">Ic:</label>
	<input id="ic" type="text" class="form-control" name="data[ic]" size="40">
</div>
<div class="form-group">
	<label for="data[name]">Name:</label>
	<input type="text" class="form-control" name="data[name]" size="40">
</div>
<div class="form-group">
	<label for="data[phone]">Phone:</label>
	<input type="text" class="form-control" name="data[phone]" size="40">
</div>
<div class="form-group">
	<label for="data[email]">Email:</label>
	<input type="text" class="form-control" name="data[email]" size="40">
</div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<a href="<?php echo CONF_BASE_PATH; ?>/faculties/" class="btn btn-default">Cancel</a>
</form>
</div>

<script>
	$("#ic").focusout(function(){
		var new_value = document.getElementById("ic").value;
		var test = new_value.replace(/-/g,"");
		document.getElementById("ic").value = test;

	});

</script>
