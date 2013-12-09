<?php if(AuthComponent::user('id')): ?>
  <h1>You are logged in</h1>
<?php else: ?>
  <h1>You are not logged in</h1>
<?php endif; ?>

<?php foreach ($categories as $category): ?>
	<?php echo $category ['category']['name'];?>
	<?php foreach ($category ['Project'] as $proyect): ?>
	<ul>
		<li>
		 <?php echo $project['name']; ?>
		</li>
	</ul>
   <?php endforeach; ?>
  <?php endforach; ?>
