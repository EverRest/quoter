 <h3 class="text-center text-uppercase lead text-warning">Create a quote</h3>
<div class="col-md-offset-2 col-md-8 jumbotron">
	<form action="add" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-sm-2" for="author">Author:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="author" name="author" placeholder="Author name...">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="content">Quote:</label>
			<div class="col-sm-10"> 
				<textarea rows="6" class="form-control" id="content" name="content" placeholder="Enter new quote..."></textarea>
			</div>
		</div>
		<br/>
		<div class="form-group"> 
			<div class="col-sm-12">
				<button type="submit" class="btn btn-lg center-block btn-warning">Send</button>
			</div>
		</div>
	</form>
</div>