<div class="users form">
<?php echo $this->Form->create('User', array('inputDefaults' => array('div' => 'form-group','label' => array('class' => 'col col-md-3 control-label'),'wrapInput' => 'col col-md-9','class' => 'form-control'),'class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fname');
		echo $this->Form->input('lname');
		echo $this->Form->input('names');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('role_id');
		echo $this->Form->input('gender_id');
		echo $this->Form->input('photo_id');
	?>
	</fieldset>
	<span class="col col-md-3"></span><button class="btn btn-success" style="margin-left: 8px;">Valider</button>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<legend><?php echo __('Actions'); ?></legend>
	<ul>

		<li><?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Etes vous sûr de vouloir supprimer # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Liste des Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lister : Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lister : Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lister : Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lister : Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
