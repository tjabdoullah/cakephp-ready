<div class="documents form">
<?php echo $this->Form->create('Document', array('inputDefaults' => array('div' => 'form-group','label' => array('class' => 'col col-md-3 control-label'),'wrapInput' => 'col col-md-9','class' => 'form-control'),'class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Edit Document'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('filename');
		echo $this->Form->input('path');
		echo $this->Form->input('real_filename');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
	<span class="col col-md-3"></span><button class="btn btn-success" style="margin-left: 8px;">Valider</button>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<legend><?php echo __('Actions'); ?></legend>
	<ul>

		<li><?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $this->Form->value('Document.id')), array(), __('Etes vous sûr de vouloir supprimer # %s?', $this->Form->value('Document.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Liste des Documents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lister : Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
