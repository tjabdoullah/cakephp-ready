<div class="roles form">
<?php echo $this->Form->create('Role', array('inputDefaults' => array('div' => 'form-group','label' => array('class' => 'col col-md-3 control-label'),'wrapInput' => 'col col-md-9','class' => 'form-control'),'class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Add Role'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
	<span class="col col-md-3"></span><button class="btn btn-success" style="margin-left: 8px;">Valider</button>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<legend><?php echo __('Actions'); ?></legend>
	<ul>

		<li><?php echo $this->Html->link(__('Liste des Roles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lister : Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
