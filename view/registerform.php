<h2>Create an Account</h2>
<p>Fill out the form below to register a new account with Simple Notes.</p>
<form method="POST" action="?register=execute">
	<?php if(isset($_GET['register']) && $_GET['register'] === 'error'){ ?>
	<p class="error">There was a problem registering this account. Please review the fields below and submit the form again.</p>
	<?php } ?>
	<div>
		<label for="firstName">First Name</label>
		<input type="text" name="firstName" id="firstName" />
	</div>
	<div>
		<label for="lastName">Last Name</label>
		<input type="text" name="lastName" id="lastName" />
	</div>
	<div>
		<label for="userName">Username</label>
		<input type="text" name="userName" id="userName" />
	</div>
	<div>
		<label for="newPass">Password</label>
		<input type="password" name="newPass" id="newPass" />
	</div>
	<div>
		<label for="newPassRep">Retype Password</label>
		<input type="password" name="newPassRep" id="newPassRep" />
	</div>
	<div>
		<input type="submit" id="submit" value="Register" />
	</div>
</form>