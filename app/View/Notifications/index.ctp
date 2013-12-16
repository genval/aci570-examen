<div class="notifications index">
	<h2><?php echo __('Notificaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('message_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('viewed'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($notifications as $notification): ?>
	<tr>
		<td><?php echo h($notification['Notification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($notification['Message']['subject'], array('controller' => 'messages', 'action' => 'view', $notification['Message']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($notification['User']['email'], array('controller' => 'users', 'action' => 'view', $notification['User']['id'])); ?>
		</td>
		<td><?php echo h($notification['Notification']['viewed']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['created']); ?>&nbsp;</td>
		<td><?php echo h($notification['Notification']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('ver'), array('action' => 'view', $notification['Notification']['id'])); ?>
			
			
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array( 'format' => __('Pagina {:page} de {:pages}, muestra {:current} de un total de {:count}, partiendo de {:start}, terminando con {:end}') 
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => 25));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="acciones">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva notificacion'), array('action' => 'add')); ?></li>
		<!--<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Mensaje'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
