<div class="container">
<h2>Participants list</h2>
<table class="table">
    <thead>
      	<tr>
		<th>PARTICIPANT ID</th>
	<th>EVENT ID</th>
	<th>IC</th>
	<th>NAME</th>
	<th>PHONE</th>
	<th>EMAIL</th>
<th>ACTION</th>
</tr>

    </thead>
    <tbody>
		<?php foreach($participants as $row): ?>
		<tr>	<td><?php echo $row['participant_id']; ?></td>
	<td><?php echo $row['event_id']; ?></td>
	<td><?php echo $row['ic']; ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['phone']; ?></td>
	<td><?php echo $row['email']; ?></td>

	<td><a href="<?php echo CONF_BASE_PATH; ?>/participants/view/<?php echo $row['participant_id']; ?>" class="btn btn-info">View</a> <a href="<?php echo CONF_BASE_PATH; ?>/participants/update/<?php echo $row['participant_id']; ?>" class="btn btn-warning">Update</a> <a href="<?php echo CONF_BASE_PATH; ?>/participants/delete/<?php echo $row['participant_id']; ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
</tr>
		<?php endforeach; ?>
    </tbody>
  </table>
</div>