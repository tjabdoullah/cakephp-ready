<div class="annexes index">
	<h2><?php echo __('Annexes'); ?></h2>
	<table class="table table-hover table-condensed" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($annexes as $annex): ?>
	<tr>
		<td><?php echo h($annex['Annex']['id']); ?>&nbsp;</td>
		<td><?php echo h($annex['Annex']['created']); ?>&nbsp;</td>
		<td><?php echo h($annex['Annex']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ouvrir'), array('action' => 'view', $annex['Annex']['id'])); ?>
			<?php echo $this->Html->link(__('Modifier'), array('action' => 'edit', $annex['Annex']['id'])); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $annex['Annex']['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $annex['Annex']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nouveau : Annex'), array('action' => 'add')); ?></li>
	</ul>
</div>
