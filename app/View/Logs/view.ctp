<div class="logs view">
<h2><?php echo __('Log'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($log['Log']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($log['User']['names'], array('controller' => 'users', 'action' => 'view', $log['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($log['Log']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($log['Log']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Modifier : Log'), array('action' => 'edit', $log['Log']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Supprimer Log'), array('action' => 'delete', $log['Log']['id']), array(), __('Etes vous sûr de vouloir supprimer # %s?', $log['Log']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste : Logs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau : Log'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
