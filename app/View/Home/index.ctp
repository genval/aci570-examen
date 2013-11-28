<?php if(AuthComponent::user('id')): ?>
  <h1>You are logged in</h1>
<?php else: ?>
  <h1>You are not logged in</h1>
<?php endif; ?>