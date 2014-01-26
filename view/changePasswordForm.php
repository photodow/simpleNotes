<h2>Change Password</h2>
<p>If you would like to change your password you should fill out the form below.</p>
<form method="POST" action="?changePassword">
	<?php if(isset($_GET['changePassword']) && $_GET['changePassword'] === 'error'){ ?>
	<p class="error">There was an error creating your new password. Please review the fields below and submit the form again.</p>
	<?php } ?>
	<div>
		<label for="oldPass">Old Password</label>
		<input type="password" name="oldPass" id="oldPass" />
	</div>
	<div>
		<label for="newPass">New Password</label>
		<input type="password" name="newPass" id="newPass" />
	</div>
	<div>
		<label for="newPassRep">Retype New Password</label>
		<input type="password" name="newPassRep" id="newPassRep" />
	</div>
	<div>
		<input type="submit" id="submit" value="Change Password" />
	</div>
</form>