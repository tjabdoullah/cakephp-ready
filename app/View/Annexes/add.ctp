<div class="annexes form">
<?php echo $this->Form->create('Annex', array('inputDefaults' => array('div' => 'form-group','label' => array('class' => 'col col-md-3 control-label'),'wrapInput' => 'col col-md-9','class' => 'form-control'),'class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Add Annex'); ?></legend>
	<?php
	?>
	</fieldset>
	<span class="col col-md-3"></span><button class="btn btn-success" style="margin-left: 8px;">Valider</button>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<legend><?php echo __('Actions'); ?></legend>
	<ul>

		<li><?php echo $this->Html->link(__('Liste des Annexes'), array('action' => 'index')); ?></li>
	</ul>
</div>
