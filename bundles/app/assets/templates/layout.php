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
	<?php if (isset($flash) && $flash->has()) :?>
		<div class="row">
		<?php foreach ($flash as $msg) :?>
			<div class="alert alert-<?= ($msg->getType() == 'error')?'danger':$msg->getType();?>" role='alert'><?=$_($msg)?></div>
		<?php endforeach;?>
		</div>
	<?php endif;?>
	<div class="row">
		<?php $this->childContent();?>
	</div>
</div>
<?php $this->block('bootstrap-js');?>
</body>
</html>