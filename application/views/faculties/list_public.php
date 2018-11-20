<?php $faculty = array();
$i=0?>
<?php foreach($faculties as $row):
	$faculty[$i] = $row['faculty_name'];
	$i++;
endforeach; ?>
<?php $i=0; ?>
<?php foreach($users as $rows): 
	$user[$i] = $rows['username'];
	$i++;
 endforeach; ?>
<?php $i=0; ?>

		<div class="row">
				<?php foreach($faculties as $row): ?>
				<div class="col-md-4">
					<div class="jumbotron">
						<a href="<?php echo CONF_BASE_PATH ?>/faculties/event/<?php echo $row['faculty_id']?>"><img src="<?php echo CONF_BASE_PATH ?>/media/img/<?php echo $user[$i] ?>.jpg" alt="No image available"></a><br/>
						<a href="<?php echo CONF_BASE_PATH ?>/faculties/event/<?php echo $row['faculty_id']?>"><?php echo $row['faculty_name']; ?></a>
					</div>
				</div>
				<?php $i++; endforeach; ?>
			</div>