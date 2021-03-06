<div class="projects view">
<h2><?php echo __('Proyecto'); ?></h2>
	<dl>
		
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Category']['name'], array('controller' => 'categories', 'action' => 'view', $project['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['User']['email'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($project['Project']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion corta'); ?></dt>
		<dd>
			<?php echo h($project['Project']['short_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion larga'); ?></dt>
		<dd>
			<?php echo h($project['Project']['long_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio'); ?></dt>
		<dd>
			<?php echo h($project['Project']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Termino'); ?></dt>
		<dd>
			<?php echo h($project['Project']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta'); ?></dt>
		<dd>
			<?php echo h($project['Project']['goal']); ?>
			&nbsp;
		</dd>
		
		
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Proyecto'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Proyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('nuevo Proyecto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Categorias'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('lista de premios'), array('controller' => 'rewards', 'action' => 'index')); ?> </li>

	</ul>
</div>
<div class="related">
	<h3><?php echo __('mensajes'); ?></h3>
	<?php if (!empty($project['Message'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($project['Message'] as $message): ?>
		<tr>
			<td><?php echo $message['id']; ?></td>
			<td><?php echo $message['project_id']; ?></td>
			<td><?php echo $message['subject']; ?></td>
			<td><?php echo $message['message']; ?></td>
			<td><?php echo $message['created']; ?></td>
			<td><?php echo $message['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'messages', 'action' => 'view', $message['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'messages', 'action' => 'edit', $message['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'messages', 'action' => 'delete', $message['id']), null, __('Are you sure you want to delete # %s?', $message['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('nuevo mensaje'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('premios entregados'); ?></h3>
	<?php if (!empty($project['Reward'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Max Allowed'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="acciones"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($project['Reward'] as $reward): ?>
		<tr>
			<td><?php echo $reward['id']; ?></td>
			<td><?php echo $reward['project_id']; ?></td>
			<td><?php echo $reward['description']; ?></td>
			<td><?php echo $reward['max_allowed']; ?></td>
			<td><?php echo $reward['amount']; ?></td>
			<td><?php echo $reward['order']; ?></td>
			<td><?php echo $reward['created']; ?></td>
			<td><?php echo $reward['modified']; ?></td>
			<td class="acciones">
				<?php echo $this->Html->link(__('ver'), array('controller' => 'rewards', 'action' => 'view', $reward['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'rewards', 'action' => 'edit', $reward['id'])); ?>
				<?php echo $this->Form->postLink(__('borrar'), array('controller' => 'rewards', 'action' => 'delete', $reward['id']), null, __('Are you sure you want to delete # %s?', $reward['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="acciones">
		<ul>
			<li><?php echo $this->Html->link(__('nuevo premio'), array('controller' => 'rewards', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
