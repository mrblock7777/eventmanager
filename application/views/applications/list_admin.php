<h2>List of Applications</h2>
<a class="btn btn-default"href="<?php echo CONF_BASE_PATH ?>/faculties/">Back</a>
<table class="table">
    <thead>
      	<tr>
		<th>APP ID</th>
	<th>IC</th>
	<th>NAME</th>
	<th>APPLY DATE</th>
	<th>TITLE</th>
	<th>VENUE</th>
	<th>DOCUMENT</th>
	<th>STATUS</th>
<th>ACTION</th>
</tr>

    </thead>
    <tbody>
		<?php foreach($applications as $row): ?>
		<?php if($session['user_id'] == $row['faculty_id']+1):?>
		<tr>	<td><?php echo $row['app_id']; ?></td>
	<td><?php echo $row['ic']; ?></td>
	<td><?php echo $row['applicants']?></td>
	<td><?php echo $row['apply_date']; ?></td>
	<td><?php echo $row['title']; ?></td>
	<td><?php echo $row['location_id']; ?></td>
	<td><a href="<?php echo CONF_BASE_URL?>/media/img/<?php echo $row['document']?>"><?php echo $row['document'] ?></a></td>
	<td><?php echo ucwords($row['status']); ?></td>

	<td><a href="<?php echo CONF_BASE_PATH; ?>/applications/view/<?php echo $row['app_id']; ?>" class="btn btn-info">View</a> <a href="<?php echo CONF_BASE_PATH; ?>/applications/update/<?php echo $row['app_id']; ?>" class="btn btn-warning">Update</a> <a href="<?php echo CONF_BASE_PATH; ?>/applications/delete/<?php echo $row['app_id']; ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
</tr>
		<?php endif; ?>
		<?php endforeach; ?>
    </tbody>
  </table>