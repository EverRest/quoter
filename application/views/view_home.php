<aside class="col-md-3">
	<h2 class="text-warning lead text-uppercase text-center">Categories</h2>
	<ul class="list-group">
		<li class="list-group-item">
			<div class="btn-toolbar" role="toolbar">
				<div class="btn-group" role="group">
					<button class="btn text-uppercase btn-lg btn-info" data-toggle="modal" data-target="#login-form">Login</button>
				</div>
				<div class="btn-group pull-right" role="group">
					<button class="btn text-uppercase btn-lg btn-success" data-toggle="modal" data-target="#register-form">Register</button>
				</div>
			</div>
		</li>
		<li class="list-group-item">Dapibus ac facilisis in</li>
		<li class="list-group-item">Morbi leo risus</li>
		<li class="list-group-item">Porta ac consectetur ac</li>
		<li class="list-group-item">Vestibulum at eros</li>
		<li class="list-group-item">Cras justo odio</li>
		<li class="list-group-item">Dapibus ac facilisis in</li>
		<li class="list-group-item">Morbi leo risus</li>
		<li class="list-group-item">Porta ac consectetur ac</li>
		<li class="list-group-item">Vestibulum at eros</li>
		<li class="list-group-item">Porta ac consectetur ac</li>
		<li class="list-group-item">Vestibulum at eros</li>
	</ul>
</aside><!--.col-md-3-->
<section class="col-md-9">
	<h2 class="text-primary lead text-uppercase text-center">Quotes</h2>
	
	<div class="panel-group">
	<?php foreach ($quotes as $row): ?>
		<div class="panel panel-primary">
			<div class="panel-heading"><?=$row->author?></div>
			<div class="panel-body"><?=$row->content?></div>
		</div>			
	<?php endforeach; ?>
	</div><!--.panel-group-->	

</section><!--.col-md-9-->


<!--Modal Login & Register Forms-->

<!-- Login Form -->
<form action="user/login" method="post" id="login-form" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header bg-info">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-uppercase lead">Please login</h4>
			</div><!--.modal-header-->
			<div class="modal-body">
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email" name="email" required="required">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" required="required">
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="remember"> Remember me</label>
				</div>
			</div><!--.modal-body-->
			<div class="modal-footer">
				<button type="submit" class="btn btn-lg text-uppercase btn-info">Enter</button>
			</div><!--.modal-footer-->
		</div><!--.modal-content-->

	</div><!--.modal-dialog-->
</form><!--#login-form-->

<!-- Register Form -->
<form action="user/register" method="post" id="register-form" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header bg-success">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title text-uppercase lead">Please register</h4>
		</div><!--.modal-header-->
		<div class="modal-body">
			<div class="form-group">
				<label for="name">Your name:</label>
				<input type="text" class="form-control" id="name" name="name" required="required">
			</div>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" id="email" name="email" required="required">
			</div>
			<div class="form-group">
				<label for="passwowd">Password:</label>
				<input type="password" class="form-control" id="password" required="required">
			</div>
		</div><!--.modal-body-->
		<div class="modal-footer">
			<button type="submit" class="btn btn-lg text-uppercase btn-success">Submit</button>
		</div><!--.modal-footer-->
	</div><!--.modal-content-->

	</div><!--.modal-dialog-->
</form><!--#register-form-->