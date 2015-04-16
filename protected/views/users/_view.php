<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div  class="media">
	<div class="media-body">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

<!--	<b><?php #echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php #echo CHtml::encode($data->password); ?>
	<br />
-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	</div>
</div>