<div class="projects index">
	<h2><?php echo __('Proyectos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('goal'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['Category']['name'], array('controller' => 'categories', 'action' => 'view', $project['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['User']['email'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
		</td>
		<td><?php echo h($project['Project']['name']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['short_description']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['long_description']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['goal']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['created']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('ver'), array('action' => 'view', $project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $project['Project']['id'])); ?>
			</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array( 'format' => __('Pagina {:page} de {:pages}, muestra {:current} de un total de {:count}, partiendo de {:start}, terminando con {:end}') )); ?>
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo proyecto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Categorias'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de mensajes'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de premios '), array('controller' => 'rewards', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
