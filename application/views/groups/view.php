<style>
.row {
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
<h2>View Groups</h2>
<div class="row">
	<div class="col-md-3">Group Id:</div>
	<div class="col-md-9"><?php echo $group_id; ?></div>
</div>
<div class="row">
	<div class="col-md-3">Group Name:</div>
	<div class="col-md-9"><?php echo $group_name; ?></div>
</div>
<a href="<?php echo CONF_BASE_PATH; ?>/groups/index" class="btn btn-primary">Back</a>
