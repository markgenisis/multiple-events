<header class="w3-container" style="padding-top:22px">
	<h5><b><i class="fa fa-list-ol fa-fx"></i> Users Lists</b><hr style="margin:0px" /></h5>
</header>
<div class="w3-container">
	<table id="userListTbl" class="w3-table w3-border w3-text-black display dataTable no-footer">
		<thead>
			<tr>
				<th>Username</th>
				<th>Full Name</th>
				<th>User Type</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = mysql_query("select * from users where user_type!='1'");
				while($r = mysql_fetch_assoc($query)){
			?>
				<tr>
					<td><?php echo $r['username']?></td>
					<td><?php echo ucwords($r['first_name'].' '.$r['middle_name'].' '.$r['last_name'])?></td>
					<td>
						<?php
							echo getUserType($r['user_type']);
						?>
					</td>
					<td>
						<button class="w3-button w3-green w3-small"><span class="fa fa-edit fa-fx"></span> Edit</button>
					</td>
				</tr>
			<?php }?>
		</tbody>
	</table>
</div>
