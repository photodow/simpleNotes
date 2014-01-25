		
		<footer>
			<ul>
				<li>
					<a href="/simpleNotes/" title="Simple Notes Home">Home</a>
				</li>
<?php if($sessionStatus){ ?>
				<li>
					<a href="/simpleNotes/?listnotes" title="List of Simple Notes">List Notes</a>
				</li>
				<li>
					<a href="/simpleNotes/?userProfile" title="View and Edit Your User Profile"><div class="downArrow"></div> User Profile</a>
					<ul>
						<li>
							<a href="/simpleNotes/?userProfile=changePassword" title="Change Your Password">Change Password</a>
						</li>
						<li>
							<a href="/simpleNotes/?userProfile=changePassword" title="Change Your Password">Change Password</a>
						</li>
						<li>
							<a href="/simpleNotes/?userProfile=changePassword" title="Change Your Password">Change Password</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="/simpleNotes/?logout" title="Logout of Simple Notes">Logout</a>
				</li>
<?php }else{ ?>
				<li>
					<a href="/simpleNotes/?login" title="Login to Simple Notes">Login</a>
				</li>
				<li>
					<a href="/simpleNotes/?register" title="Login to Simple Notes">Register</a>
				</li>
<?php } ?>
			</ul>
		</footer>
		</section>
	</body>
</html>