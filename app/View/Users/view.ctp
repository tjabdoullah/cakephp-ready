<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($user['User']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Names'); ?></dt>
		<dd>
			<?php echo h($user['User']['names']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Gender']['name'], array('controller' => 'genders', 'action' => 'view', $user['Gender']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Modifier : User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Supprimer User'), array('action' => 'delete', $user['User']['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste : Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau : User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Documents : Associé(e)s'); ?></h3>
	<?php if (!empty($user['Document'])): ?>
	<table class="table table-hover table-condensed" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Path'); ?></th>
		<th><?php echo __('Real Filename'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Document'] as $document): ?>
		<tr>
			<td><?php echo $document['id']; ?></td>
			<td><?php echo $document['filename']; ?></td>
			<td><?php echo $document['path']; ?></td>
			<td><?php echo $document['real_filename']; ?></td>
			<td><?php echo $document['user_id']; ?></td>
			<td><?php echo $document['created']; ?></td>
			<td><?php echo $document['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ouvrir'), array('controller' => 'documents', 'action' => 'view', $document['id'])); ?>
				<?php echo $this->Html->link(__('Modifier'), array('controller' => 'documents', 'action' => 'edit', $document['id'])); ?>
				<?php echo $this->Form->postLink(__('Supprimer'), array('controller' => 'documents', 'action' => 'delete', $document['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nouveau Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Logs : Associé(e)s'); ?></h3>
	<?php if (!empty($user['Log'])): ?>
	<table class="table table-hover table-condensed" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Log'] as $log): ?>
		<tr>
			<td><?php echo $log['id']; ?></td>
			<td><?php echo $log['user_id']; ?></td>
			<td><?php echo $log['message']; ?></td>
			<td><?php echo $log['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ouvrir'), array('controller' => 'logs', 'action' => 'view', $log['id'])); ?>
				<?php echo $this->Html->link(__('Modifier'), array('controller' => 'logs', 'action' => 'edit', $log['id'])); ?>
				<?php echo $this->Form->postLink(__('Supprimer'), array('controller' => 'logs', 'action' => 'delete', $log['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $log['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nouveau Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
