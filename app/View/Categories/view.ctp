<div class="categories view">
<h2><?php echo __('Categoria'); ?></h2>
	<dl>
		
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($category['Category']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crear'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Categoria'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Borrar Categoria'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Projectos'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($category['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Goal'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			
			<td><?php echo $project['user_id']; ?></td>
			<td><?php echo $project['name']; ?></td>
			<td><?php echo $project['short_description']; ?></td>
			
			<td><?php echo $project['start_date']; ?></td>
			<td><?php echo $project['end_date']; ?></td>
			<td><?php echo $project['goal']; ?></td>
			<td><?php echo $project['is_active']; ?></td>
			<td><?php echo $project['created']; ?></td>
			<td><?php echo $project['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('ver poyecto'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
							</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			
		</ul>
	</div>
</div>
