<div class="notifications form">
<?php echo $this->Form->create('Notification'); ?>
	<fieldset>
		<legend><?php echo __('Add Notification'); ?></legend>
	<?php
		echo $this->Form->input('message_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('viewed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="acciones">
	<h3><?php echo __('acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de notificaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de mensajes'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
