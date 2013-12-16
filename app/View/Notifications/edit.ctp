<div class="notifications form">
<?php echo $this->Form->create('Notification'); ?>
	<fieldset>
		<legend><?php echo __('Edit Notification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('message_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('viewed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Notification.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Notification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Notificaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Mensajes'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('nuevo Mensaje'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
