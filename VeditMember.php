<html>
	<title>Add Member</title>
		<head></head>
			<body>
			<form method="post" name="edit_member" action="<?php echo base_url();?>Cmember/edit_memberOne">
				<table>
					
					<tr>
						<td>name</td>
						<td></td>
						<td><input type="hidden" name="id" value="<?php echo $member_edit[0]->id;?>"><input type="text" name="name_member" value="<?php echo $member_edit[0]->name; ?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td></td>
						<td><input type="email" name="email_member" value="<?php echo $member_edit[0]->email; ?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td></td>
						<td><input type="password" name="pass_member" value="<?php echo $member_edit[0]->pass; ?>"></td>
					</tr>
					<tr>
						<td>Position</td>
						<td></td>
						<td>
							<select name="position_member">
								<option value="<?php echo $member_edit[0]->position;?>"><?php echo $member_edit[0]->position;?></option>
								<option value="Senior Web Developer">Senior Web Developer</option>
								<option value="Junior Web Developer">Junior Web Developer</option>
								<option value="Senior Android Developer">Senior Android Developer</option>
								<option value="Junior Android Developer">Junior Android Developer</option>
								<option value="Senior IOs Developer">Senior IOs Developer</option>
								<option value="Junior IOs Developer">Junior IOs Developer</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Sex</td>
						<td></td>
						<td>
							<input type="radio" id="M" name="sex_member" value="M" <?php echo set_radio('sex', 'M', $member_edit[0]->sex == 'M'); ?>  />Male</label>
							<input type="radio" id="F" name="sex_member" value="F" <?php echo set_radio('sex', 'F', $member_edit[0]->sex == 'F'); ?>  />Female</label>
						</td>
					</tr>
					<tr>
						<td>Address</td>
						<td></td>
						<td><textarea name="address_member"><?php echo $member_edit[0]->address; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="3"><input type="submit" name="submit" value="Save"></td>
					</tr>
					
				</table>
			</form>
			
			<a href="<?php echo base_url();?>Cmember">Member</a>
			</body>
</html>
