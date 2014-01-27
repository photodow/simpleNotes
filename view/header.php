<!DOCTYPE>
<html>
	<head>
		<title><?php echo $title; ?></title>

		<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link type='text/css' rel='stylesheet' href='css/style.css' />
	</head>
	<body>
				<aside>
					<nav>
						<ul>
							<li>
								<span title="Navigation"><i class="fa fa-bars"></i></span>
								<ul>
									<li>
										<a href="/simpleNotes/" title="Simple Notes Home"><i class="fa fa-home"></i> Home</a>
									</li>
								<?php if($sessionStatus){ ?>
									<li>
										<a href="/simpleNotes/?listnotes" title="View Your Simple Notes"><i class="fa fa-list"></i> Notes</a>
									</li>
									<li>
										<a href="/simpleNotes/?addNote" title="Add a Simple Note"><i class="fa fa-file-o"></i> Add Note</a>
									</li>
									<?php /*<li>
										<a href="/simpleNotes/?settings" title="View/Edit Your Settings"><i class="fa fa-cog"></i> Settings</a>
									</li>*/ ?>
									<li>
										<a href="/simpleNotes/?logout" title="Sign Out of Simple Notes"><i class="fa fa-sign-out"></i> Sign Out</a>
									</li>
								<?php }else{ ?>
									<li>
										<a href="/simpleNotes/?login" title="Sign In to Simple Notes"><i class="fa fa-sign-in"></i> Sign In</a>
									</li>
								<?php } ?>
								</ul>
							</li>
						</ul>
					</nav>
				</aside>
		<section id="content">
			<header>
				<h1>Simple Notes</h1>
			</header>