<div class="genders index">
	<h2><?php echo __('Genders'); ?></h2>
	<table class="table table-hover table-condensed" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($genders as $gender): ?>
	<tr>
		<td><?php echo h($gender['Gender']['id']); ?>&nbsp;</td>
		<td><?php echo h($gender['Gender']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ouvrir'), array('action' => 'view', $gender['Gender']['id'])); ?>
			<?php echo $this->Html->link(__('Modifier'), array('action' => 'edit', $gender['Gender']['id'])); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $gender['Gender']['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $gender['Gender']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nouveau : Gender'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Liste : Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
