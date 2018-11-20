<h2>List of Users</h2>
<p><b><a href="<?php echo CONF_BASE_PATH; ?>/users/create" class="btn btn-success">Add New</a></b></p>
<table class="table">
    <thead>
      	<tr>
		<th>USER ID</th>
	<th>GROUP ID</th>
	<th>USERNAME</th>
	<th>PASSWORD</th>
	<th>FIRST NAME</th>
	<th>LAST NAME</th>
	<th>LASTLOGIN</th>
<th>ACTION</th>
</tr>

    </thead>
    <tbody>
		<?php foreach($users as $row): ?>
		<tr>	<td><?php echo $row['user_id']; ?></td>
	<td><?php echo $row['group_id']; ?></td>
	<td><?php echo $row['username']; ?></td>
	<td><?php echo $row['password']; ?></td>
	<td><?php echo $row['first_name']; ?></td>
	<td><?php echo $row['last_name']; ?></td>
	<td><?php echo $row['lastlogin']; ?></td>

	<td><a href="<?php echo CONF_BASE_PATH; ?>/users/view/<?php echo $row['user_id']; ?>" class="btn btn-info">View</a> <a href="<?php echo CONF_BASE_PATH; ?>/users/update/<?php echo $row['user_id']; ?>" class="btn btn-warning">Update</a> <a href="<?php echo CONF_BASE_PATH; ?>/users/delete/<?php echo $row['user_id']; ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
</tr>
		<?php endforeach; ?>
    </tbody>
  </table>