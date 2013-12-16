<?php if(AuthComponent::user('id')): ?>
  <h1>You are logged in</h1>
<?php else: ?>
  <h1>You are not logged in</h1>
<?php endif; ?>


<?php foreach ($category as $category): ?>
	
	<?php
                 
                 echo $this->Html->link(
                        h($category['Category']['name']),
                        
                        array(
                                'controller' => 'categories', 'action' => 'view',
                                $category['Category']['id']
                        )
                ); ?>
<li>                
	<?php foreach ($category ['Project'] as $project): ?> 
	<?php
                 
                 echo $this->Html->link(
                        h($project['name']),
                        
                        array(
                                'controller' => 'projects', 'action' => 'view', 
                                $project['id']
                        )
                ); ?>	</li>
   <?php endforeach; ?>
  <?php endforeach; ?>
