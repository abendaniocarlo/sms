<h1>List of Courses</h1>
<a href="<?php echo base_url('sms/addcourse/'); ?>"  class="btn btn-success btn-md" >
<span class="glyphicon glyphicon-plus-sign"></span>  Add course</a>
<br />
<br />
<table class="table">
	<thead>
		<tr>
			<th>Course ID</th>
			<th>Course</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($course as $s){
		echo '	<tr >	
					<td>'.$s['id'].'</td>
					<td>'.$s['coursename'].'</td>
					
				</tr>
				';
	}
	?>
	</tbody>
</table>