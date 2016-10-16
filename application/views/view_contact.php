<h3 class="text-center text-uppercase lead text-primary">Send a letter</h3>
<div class="col-md-offset-2 col-md-8 jumbotron">
	<form action="send" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Email:</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="youremail@mail.com">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="heading">Heading:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="heading" name="heading" placeholder="Title">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="text">Message:</label>
			<div class="col-sm-10"> 
				<textarea cols="4" class="form-control" id="text" name="text" placeholder="Enter message..."></textarea>
			</div>
		</div>
		<br/>
		<div class="form-group"> 
			<div class="col-sm-12">
				<button type="submit" class="btn btn-lg center-block btn-success">Submit</button>
			</div>
		</div>
	</form>
</div><!--.col-md-8-->