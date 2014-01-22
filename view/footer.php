		
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
					<a href="/simpleNotes/?logout" title="Logout of Simple Notes">Logout</a>
				</li>
<?php }else{ ?>
				<li>
					<a href="/simpleNotes/?login" title="Login to Simple Notes">Login</a>
				</li>
<?php } ?>
			</ul>
		</footer>
		</section>
	</body>
</html>