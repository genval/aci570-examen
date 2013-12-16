<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('agregar Categoria solo admin'); ?></legend>
	<?php
		echo $this->Form->input('Escriba el nombre');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Categorias'), array('action' => 'index')); ?></li>
			
	</ul>
</div>
