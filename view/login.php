<h2>Login</h2>
<p>Pleast login to Create, Read, Update and Delete your notes.</p>

<form method="post" action="?login=validateUser">
	<?php if(isset($_GET['login']) && $_GET['login'] === 'error'){ ?>
	<p class="error">Invalid Username or Password</p>
	<?php } ?>
	<div>
		<label for="username">Username</label>
		<input type="text" name="username" id="username" />
	</div>
	<div>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" />
	</div>
	<div>
		<input type="submit" id="submit" value="Login" />
		<a href="?register" title="Create an Account">Create an Account</a>
	</div>
</form>