<h2>List of Applications</h2>
<a class="btn btn-default"href="<?php echo CONF_BASE_PATH ?>/faculties/">Back</a>
<table class="table">
    <thead>
      	<tr>
		<th>APP ID</th>
	<th>TITLE</th>
	<th>STATUS</th>
<th>ACTION</th>
</tr>

    </thead>
    <tbody>
		<?php foreach($applications as $row): ?>
		<tr>	<td><?php echo $row['app_id']; ?></td>	
	<td><?php echo $row['title']; ?></td>
	<?php if ($row['status'] == 0){?>
		<td><?php echo 'Processed'  ?></td>
	<?php }else if ($row['status'] == 1){?>
		<td><?php echo 'Approved'  ?></td>
	<?php }else if($row['status'] == 2){?>
		<td><?php echo 'Rejected'  ?></td>
	<?php }else if ($row['status'] == 3){?>
		<td><?php echo 'Dispute'  ?></td>
	<?php }?>

	<td><a href="<?php echo CONF_BASE_PATH; ?>/applications/view/<?php echo $row['app_id']; ?>" class="btn btn-info">View</a> <?php if($row['status']==1){?><a href="<?php echo CONF_BASE_PATH ?>/applications/delete/<?php echo $row['app_id'] ?>" onclick="return confirm('Do you want to make this event public? This action cannot be undone')">Publish</a><?php }else { ?><a href="<?php echo CONF_BASE_PATH ?>/applications/delete/<?php echo $row['app_id'] ?>" onclick="return confirm('Do you want to delete this application details?')">Delete</a><?php } ?></td>
</tr>
		<?php endforeach; ?>
    </tbody>
  </table>