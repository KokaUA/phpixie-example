<?php  include $this->resolve('bootstrap3Bundle:default');?>
<!DOCTYPE html>
<html>
<head>
	<title>PHPixie 3.0</title>
	<?php $this->block('bootstrap-css');?>
	<?php $this->block('jquery-js');?>
</head>
<body>
<div class="container">
	<div class="row">
		<h1>PHPixie 3.0</h1>
	</div>
	<div class="row">
		<?php foreach ($flash as $msg):?>
			<div class="alert alert-<?=$msg->getType()?>" role='alert'><?=$_($msg)?></div>
		<?php endforeach;?>
	</div>
	<div class="row">
	<?php $this->childContent();?>
	</div>
</div>
<?php $this->block('bootstrap-js');?>
</body>
</html>