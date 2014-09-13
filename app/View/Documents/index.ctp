<div class="documents index">
	<h2><?php echo __('Documents'); ?></h2>
	<table class="table table-hover table-condensed" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('real_filename'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($documents as $document): ?>
	<tr>
		<td><?php echo h($document['Document']['id']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['filename']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['path']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['real_filename']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($document['User']['names'], array('controller' => 'users', 'action' => 'view', $document['User']['id'])); ?>
		</td>
		<td><?php echo h($document['Document']['created']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ouvrir'), array('action' => 'view', $document['Document']['id'])); ?>
			<?php echo $this->Html->link(__('Modifier'), array('action' => 'edit', $document['Document']['id'])); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $document['Document']['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $document['Document']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nouveau : Document'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Liste : Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
