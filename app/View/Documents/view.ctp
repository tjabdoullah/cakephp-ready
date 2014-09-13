<div class="documents view">
<h2><?php echo __('Document'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($document['Document']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($document['Document']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($document['Document']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Real Filename'); ?></dt>
		<dd>
			<?php echo h($document['Document']['real_filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($document['User']['names'], array('controller' => 'users', 'action' => 'view', $document['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($document['Document']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($document['Document']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Modifier : Document'), array('action' => 'edit', $document['Document']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Supprimer Document'), array('action' => 'delete', $document['Document']['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $document['Document']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste : Documents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau : Document'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
