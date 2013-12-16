<div class="projects form">
<?php echo $this->Form->create('Project'); ?>
	<fieldset>
		<legend><?php echo __('nuevo proyecto'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('short_description');
		echo $this->Form->input('long_description');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('goal');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Proyectos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Categorias'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo premio'), array('controller' => 'rewards', 'action' => 'add')); ?> </li>
	</ul>
</div>
