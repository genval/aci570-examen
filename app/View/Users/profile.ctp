<div class="users view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('nombres'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('apellidos'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('privilegios de administracio'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_admin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('creado'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="acciones">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar perfil'), array('action' => 'edit')); ?> </li>
		<li><?php echo $this->Html->link(__('Contribuciones'), array('controller' => 'contributions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Notificaciones'), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Proyectos'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('nuevo Proyecto'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('contribuciones'); ?></h3>
	<?php if (!empty($user['Contribution'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Reward Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Contribution'] as $contribution): ?>
		<tr>
			<td><?php echo $contribution['id']; ?></td>
			<td><?php echo $contribution['user_id']; ?></td>
			<td><?php echo $contribution['reward_id']; ?></td>
			<td><?php echo $contribution['amount']; ?></td>
			<td><?php echo $contribution['created']; ?></td>
			<td><?php echo $contribution['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contributions', 'action' => 'view', $contribution['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contributions', 'action' => 'edit', $contribution['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contributions', 'action' => 'delete', $contribution['id']), null, __('Are you sure you want to delete # %s?', $contribution['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

<div class="related">
	<h3><?php echo __('Notificaciones'); ?></h3>
	<?php if (!empty($user['Notification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Message Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Viewed'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Notification'] as $notification): ?>
		<tr>
			<td><?php echo $notification['id']; ?></td>
			<td><?php echo $notification['message_id']; ?></td>
			<td><?php echo $notification['user_id']; ?></td>
			<td><?php echo $notification['viewed']; ?></td>
			<td><?php echo $notification['created']; ?></td>
			<td><?php echo $notification['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'notifications', 'action' => 'view', $notification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'notifications', 'action' => 'edit', $notification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'notifications', 'action' => 'delete', $notification['id']), null, __('Are you sure you want to delete # %s?', $notification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

<div class="related">
	<h3><?php echo __('Proyectos realizados'); ?></h3>
	<?php if (!empty($user['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		<th><?php echo __('Long Description'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Goal'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['category_id']; ?></td>
			<td><?php echo $project['user_id']; ?></td>
			<td><?php echo $project['name']; ?></td>
			<td><?php echo $project['short_description']; ?></td>
			<td><?php echo $project['long_description']; ?></td>
			<td><?php echo $project['start_date']; ?></td>
			<td><?php echo $project['end_date']; ?></td>
			<td><?php echo $project['goal']; ?></td>
			<td><?php echo $project['is_active']; ?></td>
			<td><?php echo $project['created']; ?></td>
			<td><?php echo $project['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
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
