<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table class="table table-hover table-condensed" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fname'); ?></th>
			<th><?php echo $this->Paginator->sort('lname'); ?></th>
			<th><?php echo $this->Paginator->sort('names'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('role_id'); ?></th>
			<th><?php echo $this->Paginator->sort('gender_id'); ?></th>
			<th><?php echo $this->Paginator->sort('photo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['fname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['lname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['names']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Gender']['name'], array('controller' => 'genders', 'action' => 'view', $user['Gender']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['photo_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ouvrir'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Modifier'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $user['User']['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} sur {:pages}, affichant {:current} entrées sur un total de {:count}, Commençant par : {:start}, et terminant par : {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Précédant'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Suivant') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nouveau : User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Liste : Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste : Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste : Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste : Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
