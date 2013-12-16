<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		//echo $this->Form->input('id');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('modificar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Lista de Contribuciones'), array('controller' => 'contributions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Notificaciones'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Proyectos'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('nuevo Proyecto'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
