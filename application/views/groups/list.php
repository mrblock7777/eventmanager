<h2>List of Groups</h2>
<p><b><a href="<?php echo CONF_BASE_PATH; ?>/groups/create" class="btn btn-success">Add New</a></b></p>
<table class="table">
    <thead>
      	<tr>
		<th>GROUP ID</th>
	<th>GROUP NAME</th>
<th>ACTION</th>
</tr>

    </thead>
    <tbody>
		<?php foreach($groups as $row): ?>
		<tr>	<td><?php echo $row['group_id']; ?></td>
	<td><?php echo $row['group_name']; ?></td>

	<td><a href="<?php echo CONF_BASE_PATH; ?>/groups/view/<?php echo $row['group_id']; ?>" class="btn btn-info">View</a> <a href="<?php echo CONF_BASE_PATH; ?>/groups/update/<?php echo $row['group_id']; ?>" class="btn btn-warning">Update</a> <a href="<?php echo CONF_BASE_PATH; ?>/groups/delete/<?php echo $row['group_id']; ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
</tr>
		<?php endforeach; ?>
    </tbody>
  </table>