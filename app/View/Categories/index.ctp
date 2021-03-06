<div class="categories index">
	<h2><?php echo __('Categorias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	 <?php foreach($categories as $category): ?>
        <tr>
      
                <td>
                
                <?php
                echo $this->Paginator->sort('Nombre: '); 
                 echo $this->Html->link(
                        h($category['Category']['name']),
                        
                        array(
                                'controller' => 'categories', 'action' => 'view',
                                $category['Category']['id']
                        )
                ); 
               
                 //echo $this->Paginator->sort(' activo: ');
                //echo h($category['Category']['is_active']); ?>
                </td>
                
        </tr>
        <?php endforeach; ?>
        <?php unset($category); ?>
	

	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, muestra {:current} de un total de {:count}, partiendo de {:start}, terminando con {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">


	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Lista de Proyectos'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
