<div class="roles view">
<h2><?php echo __('Role'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($role['Role']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($role['Role']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Modifier : Role'), array('action' => 'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Supprimer Role'), array('action' => 'delete', $role['Role']['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste : Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau : Role'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Users : Associé(e)s'); ?></h3>
	<?php if (!empty($role['User'])): ?>
	<table class="table table-hover table-condensed" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fname'); ?></th>
		<th><?php echo __('Lname'); ?></th>
		<th><?php echo __('Names'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Gender Id'); ?></th>
		<th><?php echo __('Photo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($role['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['fname']; ?></td>
			<td><?php echo $user['lname']; ?></td>
			<td><?php echo $user['names']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['role_id']; ?></td>
			<td><?php echo $user['gender_id']; ?></td>
			<td><?php echo $user['photo_id']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ouvrir'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Modifier'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Supprimer'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nouveau User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
