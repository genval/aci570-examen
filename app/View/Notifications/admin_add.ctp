<div class="notifications form">
<?php echo $this->Form->create('Notification'); ?>
	<fieldset>
		<legend><?php echo __('notificaciones administrador'); ?></legend>
	<?php
		echo $this->Form->input('message_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('viewed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Notificaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Mensajes'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
