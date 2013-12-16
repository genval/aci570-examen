<div class="messages form">
<?php echo $this->Form->create('Message'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Message'); ?></legend>
	<?php
		echo $this->Form->input('project_id');
		echo $this->Form->input('subject');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Mensajes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Projectos'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Projecto'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Lista Notificaciones'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Notificacion'), array('controller' => 'notifications', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
