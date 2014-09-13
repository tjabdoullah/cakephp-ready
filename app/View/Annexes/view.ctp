<div class="annexes view">
<h2><?php echo __('Annex'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($annex['Annex']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($annex['Annex']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($annex['Annex']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Modifier : Annex'), array('action' => 'edit', $annex['Annex']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Supprimer Annex'), array('action' => 'delete', $annex['Annex']['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $annex['Annex']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste : Annexes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau : Annex'), array('action' => 'add')); ?> </li>
	</ul>
</div>
