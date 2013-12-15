<?php if(AuthComponent::user('id')): ?>
  <h1>You are logged in</h1>
<?php else: ?>
  <h1>You are not logged in</h1>
<?php endif; ?>
<?php $this->set('category', $category); ?>
<?php $this->set('project', $project); ?>

<?php foreach ($category as $category): ?>
	
	<?php
                 
                 echo $this->Html->link(
                        h($category['Category']['name']),
                        
                        array(
                                'controller' => 'categories', 'action' => 'view',
                                $category['Category']['id']
                        )
                ); ?>
	<?php foreach ($category ['Project'] as $project): ?>
	<?php
                 
                 echo $this->Html->link(
                        h($project['Category']['project']['name']),
                        
                        array(
                                'controller' => 'project', 'action' => 'view',
                                $project['Project']['id']
                        )
                ); ?>	
	<ul>
		<li>
		 <?php echo $project['name']; ?>
		</li>
	</ul>
   <?php endforeach; ?>
  <?php endforeach; ?>
