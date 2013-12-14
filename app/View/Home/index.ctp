<?php if(AuthComponent::user('id')): ?>
  <h1>You are logged in</h1>
<?php else: ?>
  <h1>You are not logged in</h1>
<?php endif; ?>

<?php foreach ($category as $category): ?>
	<?php echo $category ['Category']['name'];?>
	<?php foreach ($category ['Project'] as $project): ?>
	<ul>
		<li>
		 <?php echo $project['name']; ?>
		</li>
	</ul>
   <?php endforeach; ?>
  <?php endforeach; ?>
