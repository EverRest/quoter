
<section class="col-md-offset-2 col-md-8">
	<h2 class="text-success lead text-uppercase text-center">Random Quotes</h2>
	
	<div class="panel-group">
	<?php foreach ($quotes as $quote): ?>
		<div class="panel panel-danger">
			<div class="panel-heading"><?=$quote['0']->author?></div>
			<div class="panel-body"><?=$quote['0']->content?></div>
		</div>			
	<?php endforeach; ?>
	</div><!--.panel-group-->	

</section><!--.col-md-8-->