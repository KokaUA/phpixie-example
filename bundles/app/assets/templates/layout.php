<?php  include $this->resolve('bootstrap3Bundle:default');?>
<!DOCTYPE html>
<html>
<head>
	<title>PHPixie</title>
	<?php $this->block('bootstrap-css');?>
	<?php $this->block('jquery-js');?>
</head>
<body>
<div class="container">
	<div class="page-header">
		<h1>PHPixie project skeleton</h1>
	</div>
	<div class="row">
		<?php $this->childContent();?>
	</div>
	<div class="row"><a href="/">Home</a></div>
</div>
<?php $this->block('bootstrap-js');?>
</body>
</html>