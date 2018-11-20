<style>
 #event_list, #event_list th, #event_list td{
	padding-left:150px;
 }
 h2{
	 padding-left:80px;
 }
</style>
<h2>Events Available</h2>
<table class="table" id="event_list">
    <thead>
      	<tr>
	<th>DATE/TIME</th>
	<th>EVENT</th>
	<th>FEE</th>
</tr>

    </thead>
    <tbody>
		<?php foreach($events as $row): ?>
		<tr>
		<td><p><?php echo $row['start_date']; ?></p>
		<p><?php echo date("g:i ",strtotime($row['start_time'])).'-'.date("g:i a",strtotime($row['end_time'])) ?></p></td>
		<td><p style="font-size: 20px"><?php echo $row['title']; ?></p>
		<?php foreach($faculties as $rows): ?>
		<?php if($row['faculty_id'] == $rows['faculty_id']): ?>
		<p style="font-size:10px"><a href="<?php echo CONF_BASE_PATH ?>/faculties/event/<?php echo $rows['faculty_id']; ?>"><?php echo $rows['faculty_name']; ?></a></p></td>
		<?php endif; ?>
		<?php endforeach; ?>
		<td><?php echo 'RM '. $row['fee']; ?></td>
	</tr>
			<?php endforeach; ?>
    </tbody>
  </table>